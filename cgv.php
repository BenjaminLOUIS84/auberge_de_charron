<?php
session_start();

// 1. Détection de la langue (via URL ?lang=en, ou session, ou français par défaut)
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'fr';

// 2. Configuration de la date dynamique selon la langue
if ($lang === 'en') {
    $dateFormatter = new IntlDateFormatter('en_US', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    $date_du_jour = $dateFormatter->format(new DateTime());
} else {
    $dateFormatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
    $date_du_jour = $dateFormatter->format(new DateTime());
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($lang === 'en') ? 'Terms and Conditions - Auberge de Charron' : 'Conditions Générales de Vente - Auberge de Charron'; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            line-height: 1.6;
            color: #333;
            background-color: #fdfbf7;
        }
        h1 { color: #2c3e50; border-bottom: 2px solid #4CAF50; padding-bottom: 10px; font-size: 2em; }
        h2 { color: #2c3e50; margin-top: 30px; font-size: 1.4em; }
        h3 { color: #e67e22; font-size: 1.1em; }
        p { text-align: justify; }
        .date-maj { font-style: italic; color: #666; margin-bottom: 30px; }
        .disclaimer {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin-top: 20px;
            border-radius: 4px;
        }
        .lang-selector { text-align: right; margin-bottom: 20px; }
        .lang-link { text-decoration: none; font-weight: bold; color: #4CAF50; margin-left: 10px; }
    </style>
</head>
<body>

    <!-- Sélecteur de langue discret en haut à droite -->
    <div class="lang-selector">
        <a href="?lang=fr" class="lang-link" style="<?php echo ($lang === 'fr') ? 'text-decoration:underline;' : ''; ?>">FR</a> |
        <a href="?lang=en" class="lang-link" style="<?php echo ($lang === 'en') ? 'text-decoration:underline;' : ''; ?>">EN</a>
    </div>

<?php if ($lang === 'en'): ?>
    <!-- ==================== VERSION ANGLAISE ==================== -->
    <h1>TERMS AND CONDITIONS (T&C)</h1>
    <p class="date-maj"><strong>Last updated:</strong> <?php echo $date_du_jour; ?></p>

    <h2>Article 1: Object and Legal Notices</h2>
    <p>The present Terms and Conditions (T&C) exclusively govern the sales of products and services executed on the website of Auberge de Charron.</p>
    <ul>
        <li><strong>Establishment:</strong> L'Auberge de Charron</li>
        <li><strong>Technical / Funnel Contact:</strong> webmaster@aubergedecharron.fr</li>
        <li><strong>Management / Client Contact:</strong> id2recettes@gmail.com</li>
    </ul>

    <h2>Article 2: Products and Services Sold</h2>
    <h3>1. Gift Vouchers ("L'Échappée Gourmande")</h3>
    <p>Gift Vouchers purchased on the website are valid for a restaurant service including a full meal for 2 people at Auberge de Charron. They have a strict validity period of 12 months from the purchase date. After this period, the voucher expires and cannot be honored, without any right to financial compensation. They are non-exchangeable and non-refundable.</p>
   
    <h3>2. Digital Masterclass</h3>
    <p>The Digital Masterclass is a purely digital product including access to a private series of instructional videos as well as a companion booklet in PDF format ("The Chef's Log"). Access to the content is granted on a personal, non-transferable, and unlimited basis over time, subject to the operational maintenance of the technical distribution platform.</p>

    <div class="disclaimer">
        <strong>⚠️ Important Exclusion of Liability Clause (Hygiene and Safety):</strong><br>
        Through its Masterclass, Auberge de Charron transmits culinary know-how and techniques for strictly informational, educational, and pedagogical purposes. The customer is solely and fully responsible for applying these recipes, instructions, and advice at their home.<br><br>
        Auberge de Charron formally declines any liability in the event of food poisoning, allergies, adverse reactions, or any other health incident occurring following the handling, preparation, or consumption of the Masterclass dishes. It is exclusively up to the customer to ensure strict compliance with basic hygiene rules, the absolute freshness of their ingredients (especially for eggs, meat, and fish), respect for the cold chain, and the compliance and safety of their personal cooking equipment.
    </div>

    <h2>Article 3: Price and Payment</h2>
    <p>Prices for our products are firm and indicated in Euros (€) All Taxes Included (TTC):</p>
    <ul>
        <li><strong>Gift Voucher:</strong> 90 € TTC</li>
        <li><strong>Digital Masterclass:</strong> 30 € TTC</li>
    </ul>
    <p>Payment is due immediately upon ordering. Payment is made securely via the platforms and payment links provided on the site before redirection.</p>

    <h2>Article 4: Absence of Right of Withdrawal</h2>
    <p>In accordance with article L.221-28 of the French Consumer Code, the right of withdrawal cannot be exercised for:</p>
    <ul>
        <li><strong>The Masterclass (Digital content not supplied on a tangible medium):</strong> The customer expressly notes and accepts that the execution of the digital content begins immediately after payment validation. By checking the T&C acceptance box, the customer gives their express prior consent for immediate access to the videos and booklet download, and thus expressly waives their 14-day right of withdrawal.</li>
        <li><strong>The Gift Voucher (Restaurant service catering):</strong> Catering services to be provided on a specified date or period do not benefit from the right of withdrawal. Any purchase of a Gift Voucher is therefore firm, final, and non-refundable.</li>
    </ul>

    <h2>Article 5: Data Protection and Proof of Acceptance</h2>
    <p>In order to secure transactions and protect against abusive bank chargebacks or disputes, Auberge de Charron applies electronic evidence regulations. By checking the acceptance box of these T&C before finalizing the order, the customer expressly accepts that their <strong>IP address</strong>, as well as the <strong>precise date and time of their consent</strong>, will be securely recorded in the website's database.</p>
    <p>This technical data will be legally binding as proof of the customer's consent and waiver of the right of withdrawal. In accordance with GDPR regulations, this data is kept solely for legal proof purposes and will under no circumstances be assigned, sold, or shared with third parties.</p>

<?php else: ?>
    <!-- ==================== VERSION FRANÇAISE ==================== -->
    <h1>CONDITIONS GÉNÉRALES DE VENTE (CGV)</h1>
    <p class="date-maj"><strong>Mise à jour le :</strong> <?php echo $date_du_jour; ?></p>

    <h2>Article 1 : Objet et Mentions Légales</h2>
    <p>Les présentes Conditions Générales de Vente (CGV) régissent de manière exclusive les ventes de produits et services effectuées sur le site internet de l'Auberge de Charron.</p>
    <ul>
        <li><strong>Établissement :</strong> L'Auberge de Charron</li>
        <li><strong>Contact Technique / Tunnel :</strong> webmaster@aubergedecharron.fr</li>
        <li><strong>Contact Gestion / Client :</strong> id2recettes@gmail.com</li>
    </ul>

    <h2>Article 2 : Produits et Services vendus</h2>
    <h3>1. Les Bons Cadeaux ("L'Échappée Gourmande")</h3>
    <p>Les Bons Cadeaux achetés sur le site sont valables pour une prestation de restauration comprenant un repas complet pour 2 personnes à l'Auberge de Charron. Ils possèdent une durée de validité stricte de 12 mois à compter de leur date d'achat. Passé ce délai, le bon expire et ne pourra plus être honoré, sans droit à une quelconque compensation financière. Ils ne sont ni échangeables, ni remboursables.</p>
   
    <h3>2. La Masterclass Digitale</h3>
    <p>La Masterclass Digitale est un produit purement numérique comprenant un accès à une série de vidéos explicatives privées ainsi qu'un livret d'accompagnement au format PDF ("Le Carnet du Chef"). L'accès aux contenus est octroyé à titre personnel, non cessible, et illimité dans le temps, sous réserve du maintien opérationnel de la plateforme technique de diffusion.</p>

    <div class="disclaimer">
        <strong>⚠️ Clause importante d'exclusion de responsabilité (Hygiène et Sécurité) :</strong><br>
        L'Auberge de Charron transmet à travers sa Masterclass un savoir-faire et des techniques culinaires à titre purement indicatif, pédagogique et éducatif. Le client est seul et unique responsable de l'application de ces recettes, instructions et conseils à son domicile. <br><br>
        L'Auberge de Charron décline formellement toute responsabilité en cas d'intoxication alimentaire, d'allergie, de réaction indésirable ou de tout autre incident de santé survenant suite à la manipulation, la préparation ou la consommation des plats de la Masterclass. Il appartient exclusivement au client de veiller au strict respect des règles d'hygiène élémentaires, à la fraîcheur absolue de ses ingrédients (notamment pour les œufs, viandes et poissons), au respect de la chaîne du froid, ainsi qu'à la conformité et la sécurité de son matériel de cuisson personnel.
    </div>

    <h2>Article 3 : Prix et Paiement</h2>
    <p>Les tarifs de nos produits sont fermes et indiqués en Euros (€) Toutes Taxes Comprises (TTC) :</p>
    <ul>
        <li><strong>Bon Cadeau :</strong> 90 € TTC</li>
        <li><strong>Masterclass Digitale :</strong> 30 € TTC</li>
    </ul>
    <p>Le paiement est exigible immédiatement à la commande. Le règlement s'effectue de manière sécurisée via les plateformes et liens de paiement mis à disposition sur le site avant la redirection.</p>

    <h2>Article 4 : Absence de Droit de Rétractation</h2>
    <p>Conformément à l’article L.221-28 du Code de la consommation français, le droit de rétractation ne peut pas être exercé pour :</p>
    <ul>
        <li><strong>La Masterclass (Contenu numérique non fourni sur support matériel) :</strong> Le client note et accepte expressément que l'exécution du contenu numérique commence immédiatement après la validation de son paiement. En cochant la case d'acceptation des CGV, le client donne son accord préalable exprès pour l'accès immédiat aux vidéos et au téléchargement du livret, et renonce ainsi expressément à son droit de rétractation de 14 jours.</li>
        <li><strong>Le Bon Cadeau (Prestations de services de restauration) :</strong> Les services de restauration devant être fournis à une date ou selon une périodicité spécifiée ne bénéficient pas du droit de rétractation. Tout achat de Bon Cadeau est donc ferme, définitif et non remboursable.</li>
    </ul>

    <h2>Article 5 : Protection des données et Preuve d'acceptation</h2>
    <p>Afin de sécuriser les transactions et de se prémunir contre les litiges ou contestations bancaires abusives, l'Auberge de Charron applique la réglementation de la preuve électronique. En cochant la case d'acceptation des présentes CGV avant de finaliser la commande, le client accepte expressément que son <strong>adresse IP</strong>, ainsi que la <strong>date et l'heure précises de son consentement</strong>, soient enregistrées de manière sécurisée dans la base de données du site.</p>
    <p>Les données techniques feront foi et seront opposables juridiquement comme preuve du consentement du client et de sa renonciation au droit de rétractation. Conformément à la réglementation RGPD, ces données sont conservées uniquement à des fins de preuve légale et ne seront en aucun cas cédées, vendues ou partagées avec des tiers.</p>
<?php endif; ?>

</body>
</html>
