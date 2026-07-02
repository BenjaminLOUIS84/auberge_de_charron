<?php
// ==========================================
// SECURITÉ : Vérification du Token magique
// ==========================================
// On imagine que le token attendu en BDD est "masterclass_premium_2026"
// URL d'accès : https://guideculinaire.aubergedecharron.fr/masterclass.php?token=masterclass_premium_2026

$token_valide = "masterclass_premium_2026"; // À remplacer plus tard par ta vérification en BDD

// if (!isset($_GET['token']) || $_GET['token'] !== $token_valide) {
//     // Si le token n'est pas bon, on redirige poliment vers l'accueil
//     header('Location: index.html');
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masterclass Digitale - Auberge de Charron</title>
    <link rel="stylesheet" href="masterclass.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="robots" content="noindex, nofollow">
   
</head>
<body>

<div class="container">

    <!-- ENTÊTE -->
    <header class="header-masterclass">
        <h1>Auberge de Charron</h1>
        <h2>Masterclass Digitale - Le Menu Echappée Gourmande à la Maison</h2>
    </header>

    <!-- MOT DU CHEF -->
    <div class="mot-chef">
        <p>« Bienvenue dans les coulisses de l'Auberge de Charron ! Je suis ravi de m'inviter dans votre cuisine pour vous transmettre mon savoir-faire. À travers cette page privée et les modules vidéos associés, nous allons briser la frontière du restaurant pour que vous puissiez reproduire chez vous l'émotion de notre menu Echappée Gourmande. Enfilez votre tablier, et laissez-vous guider ! »</p>
        <p style="text-align: right; font-weight: bold;">- Chef Benjamin Louis</p>
    </div>

   
    <img src="images/masterClassDigitale.png" alt="Masterclass Digitale" width="100%" height="auto">
   

    <!-- ==========================================
         SECTION 1 : LES MODULES VIDÉOS (3 VIDÉOS)
         ========================================== -->
    <h3 class="section-title">1. Vos Modules Vidéos Privés</h3>
    <p><em>Ces modules sont strictement confidentiels et réservés aux membres de la Masterclass. Pour des raisons de sécurité, les fonctions de partage et le clic droit sont désactivés.</em></p>

    <!-- VIDÉO 1 -->
    <h3>📹 Vidéo 1 : Introduction & Préparation de l'Entrée</h3>
    <p><strong>Au programme :</strong> Présentation de la Masterclass, philosophie du menu, produits du terroir et technique complète de l'Œuf Cocotte.</p>
    <div class="video-wrapper">
        <!-- Le bouclier de protection -->
        <div class="video-shield"></div>
        <!-- Remplacer ID_YOUTUBE_1 par l'identifiant de ta vidéo non répertoriée -->
        <iframe src="https://www.youtube.com/embed/ID_YOUTUBE_1?rel=0&modestbranding=1&controls=1" frameborder="0" allowfullscreen></iframe>
    </div>

    <!-- VIDÉO 2 -->
    <h3>📹 Vidéo 2 : La Préparation du Plat (Mer & Option Terre)</h3>
    <p><strong>Au programme :</strong> Maîtrise des cuissons (Cabillaud en croûte d'Émeraude et Pavé Limousin), réalisation du risotto au Safran, du flan de légumes, de la mousseline, des beignets d'Aubergines et techniques de sauces de Chef.</p>
    <div class="video-wrapper">
        <div class="video-shield"></div>
        <!-- Remplacer ID_YOUTUBE_2 par l'identifiant -->
        <iframe src="https://www.youtube.com/embed/ID_YOUTUBE_2?rel=0&modestbranding=1&controls=1" frameborder="0" allowfullscreen></iframe>
    </div>

    <!-- VIDÉO 3 -->
    <h3>📹 Vidéo 3 : La Préparation du Dessert & Conclusion</h3>
    <p><strong>Au programme :</strong> Architecture du Jardin Blanc (dôme chocolat), manipulation des textures gel, confection du sorbet / biscuit et les mots de conclusion du Chef.</p>
    <div class="video-wrapper">
        <div class="video-shield"></div>
        <!-- Remplacer ID_YOUTUBE_3 par l'identifiant -->
        <iframe src="https://www.youtube.com/embed/ID_YOUTUBE_3?rel=0&modestbranding=1&controls=1" frameborder="0" allowfullscreen></iframe>
    </div>


    <!-- ==========================================
         SECTION 2 : LISTE DES COURSES & MATÉRIEL
         ========================================== -->
    <h3 class="section-title">2. Liste des Courses & Matériel Recommandé</h3>
    <p>Pour obtenir le même niveau d'excellence qu'à l'Auberge, la qualité du matériel et des ingrédients est primordiale.</p>
    <p>Pour votre confort, j'ai sélectionné les meilleurs produits et ustensiles sur Amazon. Vous pouvez les commander directement via les liens ci-dessous.</p>

    <h4>Ustensiles Techniques Spécifiques</h4>
    <ul>
        <li><strong>Poches à douille jetables et Douilles:</strong> Idéal pour le dressage propre de la mousseline de butternut et de la mousse bavaroise.<br><a href="https://amzn.to/4vIQ54D" target="_blank" class="btn-principal">Commandez</a></li>
        <li><strong>Moule demi-sphères en silicone (Ø6-7cm) :</strong> Requis pour mouler et démouler parfaitement le dôme de chocolat blanc du dessert.<br><a href="https://amzn.to/4eUH8hr" target="_blank" class="btn-principal">Commandez</a></li>
        <li><strong>Moule rectangle en silicone :</strong> Requis pour mouler et démouler parfaitement le flan de légumes.<br><a href="https://amzn.to/4oZsaeL" target="_blank" class="btn-principal">Commandez</a></li>
        <li><strong>Balance de précision :</strong> Requis pour peser les ingrédients avec exactitude.<br><a href="https://amzn.to/3TewV89" target="_blank" class="btn-principal">Commandez</a></li>
        <li><strong>Mixeur plongeant :</strong> Requis pour mixer les ingrédients de manière uniforme et réaliser la crème de sous bois.<br><a href="https://amzn.to/4wnNnBu" target="_blank" class="btn-principal">Commandez</a></li>
        <li><strong>Sorbetière :</strong> Idéale pour confectionner le sorbet au citron.<br><a href="https://amzn.to/4v5oU2V" target="_blank" class="btn-principal">Commandez</a></li>
        <li><strong>Emporte-pièces (Ø8cm):</strong> Pratique pour dresser le risotto et pour faconner le sablé.<br><a href="https://amzn.to/4eHceu7" target="_blank" class="btn-principal">Commandez</a></li>
        <li><strong>Couteau de chef :</strong> Essentiel pour découper et préparer les ingrédients.<br><a href="https://amzn.to/4giEWCP" target="_blank" class="btn-principal">Commandez</a></li>
       
    <h4>Épicerie Fine & Ingrédients Clés</h4>
    <ul>
        <li><strong>Riz Arborio ou Carnaroli (AOP) :</strong> Seuls ces riz confèrent le crémeux inimitable du grand risotto italien sans s'écraser.</li>
        <li><strong>Pistils de Safran pur :</strong> Évitez la poudre, les filaments infusés apportent un parfum noble et une couleur d'or.</li>
        <li><strong>Fève Tonka entière :</strong> À râper au dernier moment sur la courge pour développer des notes d'amande et de vanille sauvage.</li>
    </ul>
    
    <!-- ==========================================
         SECTION 3 : LE RÉTROPLANNING
         ========================================== -->
    <h3 class="section-title">3. Le Rétroplanning de l'Organisation</h3>
    <p>La clé d'un grand dîner de chef réside dans la préparation (la <em>« mise en place »</em>). Suivez cet ordre précis pour servir chaud, sans le moindre stress :</p>
   
    <table>
        <thead>
            <tr>
                <th>Timing</th>
                <th>Actions en Cuisine</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>La veille (J-1)</strong></td>
                <td>Réaliser les inserts aux fruits rouges du dessert et les congeler. Mouler les dômes en chocolat blanc et réserver au froid. Confectionner les pickles de légumes du plat.</td>
            </tr>
            <tr>
                <td><strong>Le matin (H-5)</strong></td>
                <td>Préparer la crème de champignons de sous-bois. Tailler et blanchir les asperges vertes. Préparer la croûte d'herbes du cabillaud (ou la mousseline de butternut et les beignets d'aubergine pour la viande).</td>
            </tr>
            <tr>
                <td><strong>Avant le repas (H-1)</strong></td>
                <td>Lancer la cuisson des œufs à basse température (64°C) au bain-marie stable. Marquer les bases du risotto (nacrer le riz). Sortir les sablés bretons.</td>
            </tr>
            <tr>
                <td><strong>Pendant le dîner</strong></td>
                <td>
                    <strong>Entrée :</strong> Réchauffer la crème de champignons, dresser l'œuf au centre, parsemer de lard croustillant.<br><br>
                    <strong>Plat :</strong> Terminer le risotto au safran, cuire le poisson au four avec sa croûte (ou poêler le pavé Limousin), monter le beurre blanc à la minute.<br><br>
                    <strong>Dessert :</strong> Démouler le dôme sur le sablé breton au moment de servir, accompagner du sorbet frais.
                </td>
            </tr>
        </tbody>
    </table>


    <!-- ==========================================
         SECTION 4 : LES FICHES TECHNIQUES
         ========================================== -->
    <h3 class="section-title">4. Les Fiches Techniques Pas-à-Pas</h3>
   
    <div class="grid-fiches">
       
        <!-- ENTRÉE -->
        <div class="fiche-technique">
            <h3>🍳 L'Entrée : Œuf Cocotte au Lard Paysan & Crème de sous-bois</h3>
            <p><span class="badge">Pour 4 personnes</span> <span class="badge">Cuisson: 64°C</span></p>
            <p><strong>Ingrédients :</strong> 4 œufs extra-frais, 150g de poitrine de lard paysan, 300g de champignons des bois, 20cl de crème liquide 35% MG, 1 gousse d'ail, 1 botte d'asperges vertes, sel fin, poivre.</p>
            <ol>
                <li><strong>L'Œuf Parfait :</strong> Placer les œufs entiers avec leur coquille dans un bain-marie régulé à 64°C pendant 45 minutes.</li>
                <li><strong>La Crème :</strong> Sauter vivement les champignons nettoyés avec l'ail. Mouiller à la crème, laisser frémir 10 min, puis mixer puissamment.</li>
                <li><strong>Lard & Asperges :</strong> Dorer les lardons à la poêle. Blanchir les pointes d'asperges 3 min à l'eau bouillante puis les glacer.</li>
                <li><strong>Dressage :</strong> Verser la crème chaude, écaler délicatement l'œuf au centre, parsemer de lard et disposer les asperges.</li>
            </ol>
        </div>

        <!-- PLAT MER -->
        <div class="fiche-technique">
            <h3>🐟 Le Plat Mer : L'Or Blanc en Croûte d'Émeraude & Risotto au Safran</h3>
            <p><span class="badge">Pour 4 personnes</span> <span class="badge">Four: 200°C</span></p>
            <p><strong>Ingrédients :</strong> 4 dos de cabillaud, 50g de beurre, 50g de chapelure, persil, estragon, 250g de riz Arborio, 1L de bouillon de volaille, safran, 1 oignon, vin blanc, parmesan.</p>
            <ol>
                <li><strong>La Croûte :</strong> Mixer beurre, chapelure et herbes. Étaler sur 3mm entre deux feuilles de cuisson et congeler 15 min.</li>
                <li><strong>Le Risotto :</strong> Suer l'oignon, nacrer le riz, déglacer au vin blanc. Ajouter le bouillon safrané louche après louche pendant 18 min. Lier hors du feu au parmesan et beurre.</li>
                <li><strong>Le Cabillaud :</strong> Poser un rectangle de croûte d'herbes sur chaque dos. Enfourner à 200°C pendant 8 à 10 minutes.</li>
                <li><strong>Dressage :</strong> Lit de risotto, cabillaud par-dessus, pickles de légumes et cordon de sauce beurre blanc.</li>
            </ol>
        </div>

        <!-- PLAT TERRE -->
        <div class="fiche-technique" style="border-left: 3px solid var(--gold);">
            <h3>🥩 Option Terre : Le Pavé Limousin & son Jardin d'Automne</h3>
            <p><span class="badge">Alternative Viande</span> <span class="badge">Pour 4 personnes</span></p>
            <p><strong>Ingrédients :</strong> 4 pavés de rumsteck Limousin, 1 courge butternut, 1 fève tonka, 2 aubergines, persil, ail, chapelure Panko, 100g de Bleu d'Auvergne, fond de veau.</p>
            <ol>
                <li><strong>Mousseline :</strong> Cuire la courge butternut à l'étuvée avec du beurre. Mixer longuement avec de la crème et râper un tiers de fève tonka.</li>
                <li><strong>Beignets d'Aubergine :</strong> Passer les rondelles d'aubergine dégorgées dans la farine, l'œuf à la persillade, puis le Panko. Frire jusqu'à coloration.</li>
                <li><strong>Sauce au Bleu :</strong> Réduire le fond de veau et y faire fondre le Bleu d'Auvergne à feu doux en fouettant.</li>
                <li><strong>Viande & Dressage :</strong> Saisir les pavés 2 à 3 min par face au beurre moussant. Laisser reposer 5 min. Dresser en virgule de mousseline, deux beignets et le pavé nappé de sauce.</li>
            </ol>
        </div>

        <!-- DESSERT -->
        <div class="fiche-technique">
            <h3>🍫 Le Dessert : Jardin Blanc & Fraîcheur Citronnée</h3>
            <p><span class="badge">Pour 4 personnes</span> <span class="badge">Four: 180°C</span></p>
            <p><strong>Ingrédients :</strong> 200g de chocolat blanc, 150g de purée de fruits rouges, 1 feuille de gélatine, 100g de farine, 70g de beurre demi-sel, 40g de sucre glace, 1 jaune d'œuf, sorbet citron-basilic.</p>
            <ol>
                <li><strong>L'Insert :</strong> Dissoudre la gélatine hydratée dans la purée de fruits rouges chaude. Couler en mini-moules et congeler 3h.</li>
                <li><strong>La Coque :</strong> Badigeonner les moules demi-sphères de chocolat blanc fondu. Figer au frais. Garnir de mousse vanillée en y plaçant l'insert congelé au centre.</li>
                <li><strong>Sablé Breton :</strong> Sabler farine, sucre, beurre. Lier au jaune d'œuf. Étaler sur 5mm, détailler et cuire à 180°C pendant 12 à 15 min.</li>
                <li><strong>Dressage :</strong> Poser le dôme démoulé sur le sablé breton, laisser revenir à température 15 min, servir avec une quenelle de sorbet.</li>
            </ol>
        </div>

    </div>

</div>

<!-- ==========================================
     SCRIPT DE PROTECTION ANTI-PARTAGE YOUTUBE
     ========================================== -->
<script>
    // 1. Interdit le clic droit sur toute la page pour masquer l'inspection et les options de lien
    document.addEventListener('contextmenu', event => event.preventDefault());

    // 2. Gestion des boucliers sur les vidéos
    // Permet de cliquer à travers une fois pour lancer le play (via l'Iframe), mais bloque les clics secondaires
    const shields = document.querySelectorAll('.video-shield');
    shields.forEach(shield => {
        shield.addEventListener('mousedown', function(e) {
            // Empêche le clic droit spécifique sur le lecteur
            if (e.button === 2) {
                e.preventDefault();
                return false;
            }
        });
       
        // Optionnel : Si l'utilisateur clique sur le bouclier, on peut lui laisser gérer les contrôles au clavier
        shield.addEventListener('click', function() {
            this.style.pointerEvents = 'none'; // Laisse passer le clic vers YouTube pour le Play
            setTimeout(() => {
                this.style.pointerEvents = 'auto'; // Remet immédiatement le bouclier
            }, 500);
        });
    });
</script>

</body>
</html>
