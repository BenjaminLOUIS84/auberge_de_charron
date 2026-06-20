<?php
// On inclut les identifiants sécurisés qui n'iront jamais sur GitHub
require_once 'db_config.php';

try {
    // La connexion PDO utilise maintenant les variables du fichier masqué
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   
   
    // 1. RECHERCHE DES CONTACTS À RELANCER AUJOURD'HUI
    $stmt = $pdo->prepare("
        SELECT id, email, etape_tunnel
        FROM contacts
        WHERE categorie = 'guide'
          AND date_prochain_mail IS NOT NULL
          AND date_prochain_mail <= CURDATE()
    ");
    $stmt->execute();
    $contacts_a_relancer = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 2. BOUCLE DE TRAITEMENT AU CAS PAR CAS
    foreach ($contacts_a_relancer as $contact) {
        $id = $contact['id'];
        $email = $contact['email'];
        $etape_actuelle = $contact['etape_tunnel'];
       
        if ($etape_actuelle == 1) {
            // ------ ENVOI DU MAIL 2 : HISTOIRE & ASTUCE "MISE EN PLACE" (J+2) ------
            $subject = "=?UTF-8?B?".base64_encode("👨‍🍳 Le secret le mieux gardé des cuisines (et mon histoire)")."?=";
           
            $headers = "From: Auberge de Charron <webmaster@aubergedecharron.fr>\r\n";
            $headers .= "Reply-To: webmaster@aubergedecharron.fr\r\n";
            $headers .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
           
            $message = "Bonjour,\n\n";
            $message .= "Il y a deux jours, vous avez téléchargé notre Guide Culinaire. J'espère que vous avez déjà pu jeter un œil à nos recettes !\n\n";
            $message .= "Quand j'ai repris les cuisines de l'Auberge de Charron, je me suis donné une mission : faire vivre une véritable expérience gastronomique, sans chichi, mais avec une rigueur absolue sur les goûts. Et si vous saviez le nombre de personnes qui me demandent : « Chef, comment vous faites pour envoyer autant d'assiettes parfaites en même temps ? »\n\n";
            $message .= "Mon secret tient en trois mots : La Mise en Place.\n\n";
            $message .= "En cuisine pro, 80% du travail se fait AVANT l'arrivée du premier client. C'est le fait de trier, couper, pré-cuire et organiser chaque ingrédient dans des petits contenants. \n\n";
            $message .= "💡 Mon conseil pour vos repas à la maison :\n";
            $message .= "Ne commencez JAMAIS à cuire si tout votre menu n'est pas taillé et pesé sur votre plan de travail. C'est le seul moyen de cuisiner sereinement, un verre à la main, sans jamais rien faire brûler.\n\n";
            $message .= "Restez bien attentif à vos e-mails... Dans deux jours, je vous réserve une petite surprise exclusive pour vous aider à cuisiner comme un Chef à la maison (ou pour vous faire chouchouter à l'Auberge).\n\n";
            $message .= "Bonne cuisine et à très vite,\nL'Équipe de l'Auberge de Charron";
           
            if (mail($email, $subject, $message, $headers)) {
                // MISE À JOUR : On passe à l'étape 2 (il a reçu le mail 2) et on replanifie à J+2 pour le mail 3
                $update = $pdo->prepare("
                    UPDATE contacts
                    SET etape_tunnel = 2,
                        date_prochain_mail = DATE_ADD(CURDATE(), INTERVAL 2 DAY)
                    WHERE id = :id
                ");
                $update->execute(['id' => $id]);
            }
           
        } elseif ($etape_actuelle == 2) {
            // ------ ENVOI DU MAIL 3 : OFFRE COMMERCIALE DOUBLE (J+4) ------
            $subject = "=?UTF-8?B?".base64_encode("🎁 Une surprise exclusive pour les amoureux de gastronomie")."?=";
           
            $headers = "From: Auberge de Charron <webmaster@aubergedecharron.fr>\r\n";
            $headers .= "Reply-To: webmaster@aubergedecharron.fr\r\n";
            $headers .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
           
            // On prépare la variable email pour l'injecter proprement dans l'URL
            $email_encode = urlencode($email);
           
            $message = "Bonjour,\n\n";
            $message .= "Comme promis, voici la surprise que je vous réservais. Aujourd'hui, j'ouvre officiellement les portes de notre Menu Signature : L'Échappée Gourmande.\n\n";
            $message .= "Que vous habitiez tout près de chez nous ou à l'autre bout de la France, j'ai conçu deux options sur mesure pour vous faire plaisir :\n\n";
            $message .= "Option 1 : Le Bon Cadeau Physique (90 €)\n";
            $message .= "Offrez (ou offrez-vous) une parenthèse complète à l'Auberge pour 2 personnes : Entrée, Plat au choix (Terre ou Mer), Dessert et Boissons comprises.\n\n";
            $message .= "Option 2 : La Masterclass Digitale (30 €)\n";
            $message .= "Vous habitez trop loin ? Pas de panique. Suivez-moi en vidéo HD pas à pas dans les cuisines de l'Auberge et apprenez à reproduire mon menu complet à la maison, du dressage graphique aux cuissons de précision.\n\n";
           
            // MODIFICATION ICI : On ajoute dynamiquement l'e-mail du contact dans le lien de la boutique
            $message .= "👉 Pour découvrir les deux options et accéder à la boutique, cliquez ici : https://aubergedecharron.fr/boutique.html?email=" . $email_encode . "\n\n";
           
            $message .= "Prenez soin de vous,\nL'Équipe de l'Auberge de Charron";
           
            if (mail($email, $subject, $message, $headers)) {
                // FIN DU TUNNEL : On passe à l'étape 3 et on coupe la planification (NULL)
                $update = $pdo->prepare("
                    UPDATE contacts
                    SET etape_tunnel = 3,
                        date_prochain_mail = NULL
                    WHERE id = :id
                ");
                $update->execute(['id' => $id]);
            }
        }
    }
   
    echo "Traitement des relances terminé avec succès.";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
