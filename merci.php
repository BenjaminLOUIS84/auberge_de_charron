<?php
// 1. On inclut la configuration BDD sécurisée
require_once 'db_config.php';

// 2. On récupère les infos transmises par Stripe dans l'URL
$email_client = isset($_GET['email']) ? trim($_GET['email']) : null;
$type_produit = isset($_GET['produit']) ? trim($_GET['produit']) : 'masterclass';

// CORRECTION 1 : On initialise le lien masterclass en haut pour éviter l'erreur sur l'affichage HTML
$lien_masterclass = "";

if ($email_client && filter_var($email_client, FILTER_VALIDATE_EMAIL)) {
    try {
        // Connexion à la BDD
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // 3. MISE À JOUR BDD : Le client a acheté, on coupe le tunnel de relance !
        $stmt = $pdo->prepare("UPDATE contacts SET etape_tunnel = 4 WHERE email = :email");
        $stmt->execute(['email' => $email_client]);

        // 4. CONFIGURATION DE L'EMAIL SELON LE PRODUIT
        $from = "contact@aubergedecharron.fr"; // À remplacer par ton adresse pro o2switch
        $reply_to = "contact@aubergedecharron.fr";

        if ($type_produit === 'cadeau') {
            // --- CONFIGURATION BON CADEAU (Avec pièce jointe) ---
            $subject = "Votre Bon Cadeau - Auberge de Charron";
            $file_path = "pdf/bon_cadeau.pdf";
            $file_name = "bon_cadeau.pdf";

            $message_html = "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6;'>
                <h2>Merci pour votre confiance !</h2>
                <p>Votre paiement pour le <strong>Bon Cadeau - Auberge de Charron (90€)</strong> a bien été validé.</p>
                <p>Vous trouverez votre bon cadeau prêt à être imprimé directement joint à cet e-mail.</p><br>
                <p>Au plaisir de vous recevoir,</p>
                <p><strong>L'équipe de l'Auberge de Charron</strong></p>
            </body>
            </html>";
        } else {
            // --- CONFIGURATION MASTERCLASS (Lien sécurisé sans pièce jointe) ---
            $subject = "Votre accès exclusif à la Masterclass - Auberge de Charron";
           
            // Génération du token unique
            $token_masterclass = 'mc_' . bin2hex(random_bytes(16));
           
            // Optionnel : enregistrement du token en BDD ici si tu crées le champ plus tard
           
            $lien_masterclass = "https://www.aubergedecharron.fr/masterclass.php?token=" . $token_masterclass;
            $file_path = null; // Pas de fichier pour la masterclass !

            $message_html = "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6;'>
                <h2>Bienvenue dans la Masterclass, Chef !</h2>
                <p>Votre paiement a bien été validé.</p>
                <p>Pour accéder instantanément à vos vidéos privées et à vos fiches techniques, cliquez sur le lien suivant :</p>
                <p><a href='$lien_masterclass' style='color:#c5a880; font-weight:bold;'>Accéder à mon Espace Masterclass Premium →</a></p>
                <p>Enfilez votre tablier, la cuisine n'attend plus que vous !</p><br>
                <p>Culinairement vôtre,</p>
                <p><strong>Chef Benjamin Louis</strong></p>
            </body>
            </html>";
        }

        // =========================================================================
        // CORRECTION 2 : SÉPARATION DE L'ENVOI (MULTIPART SI FICHIER, SIMPLE SI TEXTE)
        // =========================================================================
        if ($file_path && file_exists($file_path)) {
            // ENVOI DU BON CADEAU (STRUCTURE MULTIPART AVEC PIÈCE JOINTE)
            $file_size = filesize($file_path);
            $handle = fopen($file_path, "r");
            $content = fread($handle, $file_size);
            fclose($handle);
            $content = chunk_split(base64_encode($content));

            $uid = md5(uniqid(time()));

            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $reply_to . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";

            $nmessage = "--" . $uid . "\r\n";
            $nmessage .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
            $nmessage .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
            $nmessage .= $message_html . "\r\n\r\n";
            $nmessage .= "--" . $uid . "\r\n";
            $nmessage .= "Content-Type: application/octet-stream; name=\"" . $file_name . "\"\r\n";
            $nmessage .= "Content-Transfer-Encoding: base64\r\n";
            $nmessage .= "Content-Disposition: attachment; filename=\"" . $file_name . "\"\r\n\r\n";
            $nmessage .= $content . "\r\n\r\n";
            $nmessage .= "--" . $uid . "--";

            mail($email_client, $subject, $nmessage, $headers);
        } else {
            // ENVOI DE LA MASTERCLASS (E-MAIL HTML SIMPLE STANDARD)
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $reply_to . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            mail($email_client, $subject, $message_html, $headers);
        }

    } catch (PDOException $e) {
        // Erreur silencieuse ou log
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merci pour votre commande - Auberge de Charron</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .success-container { text-align: center; padding: 60px 20px; max-width: 600px; margin: 50px auto; background: #fff; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); font-family: Arial, sans-serif; }
        .success-icon { font-size: 50px; color: #27ae60; margin-bottom: 20px; }
        .btn-home { display: inline-block; padding: 12px 25px; background: #c9a054; color: #fff; text-decoration: none; border-radius: 5px; margin-top: 30px; transition: background 0.3s; }
        .btn-home:hover { background: #b28a42; }
    </style>
</head>
<body>
    <div class="success-container">
        <div class="success-icon">✓</div>
        <h1>Merci pour votre commande !</h1>
       
        <?php if ($type_produit === 'cadeau'): ?>
            <p>Votre paiement pour le <strong>Bon Cadeau - Auberge de Charron</strong> a bien été validé.</p>
            <p>Votre bon cadeau prêt à être imprimé vient de vous être envoyé par e-mail à l'adresse suivante :</p>
        <?php else: ?>
            <p>Votre paiement pour la Masterclass a bien été validé !</p>
            <div style="text-align: center; margin: 20px 0;">
                <a href="<?php echo $lien_masterclass; ?>" class="btn-home" style="background-color: #c5a880;">Ouvrir ma Masterclass en Ligne →</a>
            </div>
        <?php endif; ?> 
       
        <p><strong><?php echo htmlspecialchars($email_client ?? 'votre adresse e-mail'); ?></strong></p>
        <a href="index.html" class="btn-home">Retour à l'accueil</a>
    </div>
</body>
</html>

 