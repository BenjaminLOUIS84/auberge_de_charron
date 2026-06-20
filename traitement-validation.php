<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    // 1. Récupération et vérification de la langue pour adapter les messages d'erreur si besoin
    $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';
    $msg_erreur_email = ($lang === 'en') ? "Error: Please enter a valid email address." : "Erreur : Veuillez renseigner une adresse e-mail valide.";
    $msg_erreur_tech = ($lang === 'en') ? "A technical error occurred. Please try again." : "Une erreur technique est survenue. Veuillez réessayer.";

    // 2. Sécurité : Validation de l'email
    if (empty($_POST['email_client']) || !filter_var($_POST['email_client'], FILTER_VALIDATE_EMAIL)) {
        die($msg_erreur_email);
    }
   
    $email_client = $_POST['email_client'];
    $adresse_ip = $_SERVER['REMOTE_ADDR'];
   
    
// On inclut les identifiants sécurisés qui n'iront jamais sur GitHub
require_once 'db_config.php';

try {
    // La connexion PDO utilise maintenant les variables du fichier masqué
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
    }catch (PDOException $e) {
        die($msg_erreur_tech . " (Details : " . $e->getMessage() . ")");
    }

    // 1. Récupération du produit envoyé par le formulaire
    $type_produit = isset($_POST['type_produit']) ? $_POST['type_produit'] : 'cadeau';

    // 2. Aiguillage selon le produit (Nom en BDD et Lien Stripe)
    switch ($type_produit) {
        case 'masterclass':
            $produit = ($lang === 'en') ? 'Masterclass - Culinary Secrets' : 'Masterclass - Les Secrets du Chef';
            $lien_stripe = 'https://buy.stripe.com/7sYaEXf1saF65Fs6Jf3gk03'; // ton vrai lien masterclass
            break;
        
        case 'cadeau':
        default:
            $produit = ($lang === 'en') ? 'Gift Voucher - L\'Échappée Gourmande' : 'Bon Cadeau - L\'Échappée Gourmande';
            $lien_stripe = 'https://buy.stripe.com/eVqaEXbPg28A9VI3x33gk02'; // ton vrai lien bon cadeau
            break;
    }

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
       
        // 3. Insertion de la preuve d'acceptation des CGV
        $stmt = $pdo->prepare("INSERT INTO signatures_cgv (email, produit, adresse_ip) VALUES (:email, :produit, :ip)");
        $stmt->execute([
            'email' => $email_client,
            'produit' => $produit,
            'ip' => $adresse_ip
        ]);
       
        // 4. Redirection vers Stripe
        header("Location: " . $lien_stripe);
        exit;

    } catch (PDOException $e) {
        // En production, tu peux remplacer par log_error pour cacher le détail $e->getMessage()
        die($msg_erreur_tech . " (Details : " . $e->getMessage() . ")");
    }
} else {
    // Si accès direct au fichier sans soumettre le formulaire
    header("Location: validation-commande.php");
    exit;
}
?>