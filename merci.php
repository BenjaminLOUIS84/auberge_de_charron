<?php
// 1. On inclut la configuration BDD sécurisée
require_once 'db_config.php';

// 2. On récupère les infos transmises par Stripe dans l'URL
$email_client = isset($_GET['email']) ? trim($_GET['email']) : null;
$type_produit = isset($_GET['produit']) ? trim($_GET['produit']) : 'masterclass';

if ($email_client && filter_var($email_client, FILTER_VALIDATE_EMAIL)) {
    try {
        // Connexion à la BDD
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // 3. MISE À JOUR BDD : Le client a acheté, on coupe le tunnel de relance !
        $stmt = $pdo->prepare("UPDATE contacts SET etape_tunnel = 4 WHERE email = :email");
        $stmt->execute(['email' => $email_client]);

        // 4. CONFIGURATION DE L'EMAIL ET DE LA PIÈCE JOINTE
        $to = $email_client;
        $from = "contact@aubergedecharron.fr"; // Remplacer par ton adresse pro o2switch
        $reply_to = "contact@aubergedecharron.fr";
       
        // Définition du fichier et du texte selon le produit acheté
        if ($type_produit === 'cadeau') {
            $subject = "Votre Bon Cadeau - Auberge de Charron";
            $file_path = "pdf/bon_cadeau.pdf"; // Chemin vers ton fichier sur le serveur
            $file_name = "bon_cadeau.pdf";
           
            $message_html = "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6;'>
                <h2>Merci pour votre confiance !</h2>
                <p>Votre paiement pour le <strong>Bon Cadeau - Auberge de Charron (90€)</strong> a bien été validé.</p>
                <p>Vous trouverez votre bon cadeau prêt à être imprimé directement joint à cet e-mail.</p>
                <br>
                <p>Au plaisir de vous recevoir,</p>
                <p><strong>L'équipe de l'Auberge de Charron</strong></p>
            </body>
            </html>";
        } else {
            $subject = "Votre Livret de Bord Masterclass - Auberge de Charron";
            $file_path = "pdf/livret_masterclass.pdf"; // Chemin vers ton fichier sur le serveur
            $file_name = "livret_masterclass.pdf";
           
            $message_html = "
            <html>
            <body style='font-family: Arial, sans-serif; line-height: 1.6;'>
                <h2>Bienvenue dans la Masterclass, Chef !</h2>
                <p>Votre paiement pour la <strong>Masterclass - Les Secrets Culinaires (30€)</strong> a bien été validé.</p>
                <p>Votre <strong>Livret de Bord PDF</strong> est disponible en pièce jointe de cet e-mail. Il contient l'ensemble de vos accès secrets aux modules vidéos privés, la liste des courses ainsi que votre rétroplanning d'organisation.</p>
                <p>Enfilez votre tablier, la cuisine n'attend plus que vous !</p>
                <br>
                <p>Culinairement vôtre,</p>
                <p><strong>Chef Benjamin Louis</strong></p>
            </body>
            </html>";
        }

        // 5. ENCODAGE DE LA PIÈCE JOINTE ET ENVOI (STRUCTURE MULTIPART)
        if (file_exists($file_path)) {
            $file_size = filesize($file_path);
            $handle = fopen($file_path, "r");
            $content = fread($handle, $file_size);
            fclose($handle);
            $content = chunk_split(base64_encode($content));

            // Clé de séparation unique pour l'email
            $uid = md5(uniqid(time()));

            // En-têtes principaux
            $headers = "From: " . $from . "\r\n";
            $headers .= "Reply-To: " . $reply_to . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"" . $uid . "\"\r\n\r\n";

            // Corps du message texte/HTML
            $nmessage = "--" . $uid . "\r\n";
            $nmessage .= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
            $nmessage .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
            $nmessage .= $message_html . "\r\n\r\n";

            // Bloc de la pièce jointe
            $nmessage .= "--" . $uid . "\r\n";
            $nmessage .= "Content-Type: application/octet-stream; name=\"" . $file_name . "\"\r\n";
            $nmessage .= "Content-Transfer-Encoding: base64\r\n";
            $nmessage .= "Content-Disposition: attachment; filename=\"" . $file_name . "\"\r\n\r\n";
            $nmessage .= $content . "\r\n\r\n";
            $nmessage .= "--" . $uid . "--";

            // Envoi effectif de l'e-mail
            mail($to, $subject, $nmessage, $headers);
        }

    } catch (PDOException $e) {
        // Erreur silencieuse en production
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
            <p>Votre paiement pour la <strong>Masterclass - Les Secrets Culinaires</strong> a bien été validé.</p>
            <p>Un e-mail de confirmation contenant votre <strong>Livret de Bord PDF</strong> et vos accès vidéos vient de vous être envoyé à l'adresse suivante :</p>
        <?php endif; ?>
       
        <p><strong><?php echo htmlspecialchars($email_client ?? 'votre adresse e-mail'); ?></strong></p>
        <a href="index.html" class="btn-home">Retour à l'accueil</a>
    </div>
</body>
</html>

 