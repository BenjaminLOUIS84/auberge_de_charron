<?php
session_start();

// Détection de la langue (?lang=en ou ?lang=fr)
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';

// Textes bilingues
$titre = ($lang === 'en') ? 'Final Step Before Payment' : 'Dernière étape avant le paiement';
$label_email = ($lang === 'en') ? 'Your email address (to receive your order):' : 'Votre adresse e-mail (pour la réception de votre commande) :';
$label_cgv = ($lang === 'en') ? 'I have read and I accept the <a href="cgv.php" target="_blank">Terms and Conditions</a>.' : 'J\'ai lu et j\'accepte sans réserve les <a href="cgv.php" target="_blank">Conditions Générales de Vente</a>.';
$bouton = ($lang === 'en') ? 'Proceed to Secure Payment' : 'Poursuivre vers le paiement sécurisé';
$placeholder = ($lang === 'en') ? 'example@domain.com' : 'exemple@domaine.com';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre; ?> - Auberge de Charron</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; line-height: 1.6; background-color: #fdfbf7; color: #333; }
        .box { border: 1px solid #e0e0e0; padding: 30px; border-radius: 8px; background: #fff; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 8px; color: #2c3e50; }
        .form-group input[type="email"] { width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; font-size: 1em; }
        .cgv-text { margin-top: 25px; display: flex; align-items: flex-start; }
        .cgv-text input { margin-top: 5px; margin-right: 10px; }
        #btn-paiement { background-color: #4CAF50; color: white; padding: 14px 24px; border: none; border-radius: 4px; cursor: not-allowed; opacity: 0.6; width: 100%; font-size: 1.1em; font-weight: bold; margin-top: 20px; transition: all 0.3s ease; }
        #btn-paiement.enabled { cursor: pointer; opacity: 1; background-color: #2e7d32; }
        .lang-selector { text-align: right; margin-bottom: 15px; font-size: 0.9em; }
        .lang-link { text-decoration: none; font-weight: bold; color: #4CAF50; margin-left: 5px; }
    </style>
</head>
<body>

    <div class="lang-selector">
        <a href="?lang=fr" class="lang-link" style="<?php echo ($lang === 'fr') ? 'text-decoration:underline;' : ''; ?>">FR</a> |
        <a href="?lang=en" class="lang-link" style="<?php echo ($lang === 'en') ? 'text-decoration:underline;' : ''; ?>">EN</a>
    </div>

    <div class="box">
        <h2 style="text-align: center; color: #2c3e50; margin-top: 0;"><?php echo $titre; ?></h2>
       
        <form id="form-validation" action="traitement-validation.php" method="POST">
           
            <?php
            // On récupère le produit ou on met 'cadeau' par défaut
            $type_produit = isset($_GET['produit']) ? htmlspecialchars($_GET['produit']) : 'cadeau';
            ?>
            <!-- Champ invisible qui transmet le type de produit au traitement -->
            <input type="hidden" name="type_produit" value="<?php echo $type_produit; ?>">

            <?php
            // On regarde si l'e-mail existe déjà dans la session (Lead Magnet) ou dans l'URL
            $email_deja_connu = '';
            if (!empty($_SESSION['user_email'])) {
                $email_deja_connu = $_SESSION['user_email'];
            } elseif (!empty($_GET['email'])) {
                $email_deja_connu = htmlspecialchars($_GET['email']);
            }
            ?>

            <div class="form-group">
                <label for="email-client"><?php echo $label_email; ?></label>
                <input type="email"
                    id="email-client"
                    name="email_client"
                    placeholder="<?php echo $placeholder; ?>"
                    value="<?php echo $email_deja_connu; ?>"
                    <?php echo !empty($email_deja_connu) ? 'readonly style="background-color: #eee; cursor: not-allowed;"' : ''; ?>
                    required>
            </div>

            <div class="cgv-text">
                <input type="checkbox" id="accept-cgv" onchange="toggleButton()">
                <label for="accept-cgv"><?php echo $label_cgv; ?></label>
            </div>

            <button type="submit" id="btn-paiement" disabled><?php echo $bouton; ?></button>
        </form>
    </div>

<script>
    function toggleButton() {
        const checkbox = document.getElementById('accept-cgv');
        const button = document.getElementById('btn-paiement');
       
        if (checkbox.checked) {
            button.disabled = false;
            button.classList.add('enabled');
        } else {
            button.disabled = true;
            button.classList.remove('enabled');
        }
    }
</script>

</body>
</html>
