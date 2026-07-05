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
        <!--<iframe src="https://youtube.com/embed/pDVCWKru7iQ?rel=0&modestbranding=1&controls=1" frameborder="0" allowfullscreen></iframe>-->
        <video src="videos/video0.1.mp4" controls controlslist="nodownload" playsinline webkit-playsinline poster="images/miniature1.jpg" width="100%" height="auto"></video>
    </div>
    <p><em>Note : Pour lire la vidéo, faites un double clic sur le lecteur.</em></p>
    
    <!-- VIDÉO 2 -->
    <h3>📹 Vidéo 2 : La Préparation du Plat (Option Mer)</h3>
    <p><strong>Au programme :</strong> Maîtrise des cuissons (Cabillaud en croûte d'Émeraude), réalisation du risotto au Safran, du flan de légumes et technique de la sauce Beurre Blanc Echalote.</p>
    <div class="video-wrapper">
        <div class="video-shield"></div>
        <!-- Remplacer ID_YOUTUBE_2 par l'identifiant -->
        <video src="videos/video0.2.mp4" controls controlslist="nodownload" playsinline webkit-playsinline poster="images/miniature2.jpg" width="100%" height="auto"></video>
    </div>
    <p><em>Note : Pour lire la vidéo, faites un double clic sur le lecteur.</em></p>

    <!-- VIDÉO 3 -->
    <h3>📹 Vidéo 3 : La Préparation du Plat (Option Terre)</h3>
    <p><strong>Au programme :</strong> Maîtrise des cuissons (Pavé Limousin), réalisation de la mousseline de Courge à la fève de Tonka, des beignets d'Aubergines et technique de la sauce au Bleu d'Auvergne.</p>
    <div class="video-wrapper">
        <div class="video-shield"></div>
        <!-- Remplacer ID_YOUTUBE_3 par l'identifiant -->
        <video src="videos/video0.3.mp4" controls controlslist="nodownload" playsinline webkit-playsinline poster="images/miniature3.jpg" width="100%" height="auto"></video>
    </div>
    <p><em>Note : Pour lire la vidéo, faites un double clic sur le lecteur.</em></p>

    <!-- VIDÉO 4 -->
    <h3>📹 Vidéo 4 : La Préparation du Dessert & Conclusion</h3>
    <p><strong>Au programme :</strong> Architecture du Jardin Blanc (dôme chocolat), manipulation des textures gel, confection du sorbet / biscuit et les mots de conclusion du Chef.</p>
    <div class="video-wrapper">
        <div class="video-shield"></div>
        <!-- Remplacer ID_YOUTUBE_4 par l'identifiant -->
        <video src="videos/video0.4.mp4" controls controlslist="nodownload" playsinline webkit-playsinline poster="images/miniature4.png" width="100%" height="auto"></video>
    </div>
    <p><em>Note : Pour lire la vidéo, faites un double clic sur le lecteur.</em></p>


    <!-- ==========================================
         SECTION 2 : LISTE DES COURSES & MATÉRIEL
         ========================================== -->
    <h3 class="section-title">2. Liste des Courses & Matériel Recommandé</h3>
    <p>Pour obtenir le même niveau d'excellence qu'à l'Auberge, la qualité du matériel et des ingrédients est primordiale.</p>
    <p>Pour votre confort, j'ai sélectionné les meilleurs produits et ustensiles sur Amazon. Vous pouvez les commander directement via les liens ci-dessous.</p>

    <h4>Ustensiles Techniques Spécifiques</h4>
    <div class="carousel-container">
        <div class="carousel-track">
            <div class="carousel-slide">
                 <div class="produit-card">
                <img src="images/pocheDouille.jpg" alt="Poches à douille" width="50%" height="auto">
                <strong>Poches à douille jetables et Douilles:</strong> Idéal pour le dressage propre de la mousseline de butternut et de la mousse bavaroise.<br><a href="https://amzn.to/4vIQ54D" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">
                <div class="produit-card"> 
                <img src="images/mouleSphere.jpg" alt="Moule demi-sphères" width="50%" height="auto">
                <strong>Moule demi-sphères en silicone (Ø6-7cm) :</strong> Requis pour mouler et démouler parfaitement le dôme de chocolat blanc du dessert.<br><a href="https://amzn.to/4eUH8hr" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide"> 
                <div class="produit-card"> 
                <img src="images/mouleRectangle.jpg" alt="Moule rectangle" width="50%" height="auto">
                <strong>Moule rectangle en silicone :</strong> Requis pour mouler et démouler parfaitement le flan de légumes.<br><a href="https://amzn.to/4oZsaeL" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">
                <div class="produit-card">
                <img src="images/balance.jpg" alt="Balance de précision" width="50%" height="auto">
                <strong>Balance de précision :</strong> Requis pour peser les ingrédients avec exactitude.<br><a href="https://amzn.to/3TewV89" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">
                <div class="produit-card">
                <img src="images/mixeurPlongeant.jpg" alt="Mixeur plongeant" width="50%" height="auto">
                <strong>Mixeur plongeant :</strong> Requis pour mixer les ingrédients de manière uniforme et réaliser la crème de sous bois.<br><a href="https://amzn.to/4wnNnBu" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">
                <div class="produit-card">
                <img src="images/sorbetiere.jpg" alt="Sorbetière" width="50%" height="auto">
                <strong>Sorbetière :</strong> Idéale pour confectionner le sorbet au citron.<br><a href="https://amzn.to/4v5oU2V" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">   
                <div class="produit-card">
                <img src="images/emportePiece.jpg" alt="Emporte-pièces" width="50%" height="auto">
                <strong>Emporte-pièces (Ø8cm):</strong> Pratique pour dresser le risotto et pour faconner le sablé.<br><a href="https://amzn.to/4eHceu7" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">   
                <div class="produit-card">
                <img src="images/couteau.jpg" alt="Couteau de chef" width="50%" height="auto">
                <strong>Couteau de chef :</strong> Essentiel pour découper et préparer les ingrédients.<br><a href="https://amzn.to/4giEWCP" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
        </div>
        <!-- Boutons de navigation (Optionnel mais recommandé) -->
            <button class="carousel-btn prev">❮</button>
            <button class="carousel-btn next">❯</button>
    </div>

    <h4>Épicerie Fine & Ingrédients Clés</h4>
    <div class="carousel-container">
        <div class="carousel-track">
            <div class="carousel-slide">
                <div class="produit-card">
                <img src="images/riz.jpg" alt="Riz Arborio" width="50%" height="auto">
                <strong>Riz Arborio (AOP) :</strong> Seuls ces riz confèrent le crémeux inimitable du grand risotto italien sans s'écraser.<br><a href="https://amzn.to/44EoJka" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">
                <div class="produit-card">
                <img src="images/safran.jpg" alt="Safran" width="50%" height="auto">
                <strong>Safran en poudre :</strong> La poudre diluée dans le bouillon apporte un parfum noble et une couleur d'or.<br><a href="https://amzn.to/4ausqfJ" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">
                <div class="produit-card">  
                <img src="images/feveTonka.jpg" alt="Fève Tonka" width="50%" height="auto">
                <strong>Fève Tonka entière :</strong> À râper au dernier moment sur la courge pour développer des notes d'amande et de vanille sauvage.<br><a href="https://amzn.to/4auipiK" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">
                <div class="produit-card">  
                <img src="images/chocolatBlanc.jpg" alt="Chocolat Blanc" width="50%" height="auto">
                <strong>Chocolat Blanc :</strong> Idéal pour la préparation du dôme de chocolat blanc du dessert.<br><a href="https://amzn.to/4gToity" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">   
                <div class="produit-card">
                <img src="images/gelatine.jpg" alt="Gélatine" width="50%" height="auto">
                <strong>Gélatine :</strong> Essentielle pour la préparation de la mousse bavaroise aux fruits rouges.<br><a href="https://amzn.to/44dVuoa" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
            <div class="carousel-slide">   
                <div class="produit-card">
                <img src="images/agar.jpg" alt="Agar-Agar" width="50%" height="auto">
                <strong>Agar-Agar :</strong> Alternative végétarienne pour la préparation de mousse bavaroise.<br><a href="https://amzn.to/4wtfak9" target="_blank" class="btn-principal">Commandez</a>
                </div>
            </div>
        </div>
        <!-- Boutons de navigation (Optionnel mais recommandé) -->
            <button class="carousel-btn prev">❮</button>
            <button class="carousel-btn next">❯</button>
    </div>
    <p><em>Note : Les liens ci-dessus sont des liens d'affiliation Amazon. En passant par ces liens, vous soutenez notre travail sans coût supplémentaire pour vous.</em></p>
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
                <td>
                    <strong>Entrée : </strong> Réaliser la crème de champignons.<br><br>
                    <strong>Plat (option Mer): </strong>Réaliser la croûte d'herbes, tailler et cuire les légumes et faire le bouillon de volaille.<br><br>
                    <strong>Plat (option Terre): </strong>Réaliser la mousseline de courge à la fève de Tonka, préparer la chapelure et le bouillon de volaille.<br><br>
                    <strong>Dessert : </strong>Réaliser le sorbet, les coques en chocolat, la mousse bavaroise aux fruits rouges et réserver au congélateur.
                </td>
            </tr>
            <tr>
                <td><strong>Le matin (H-5)</strong></td>
                <td>
                    <strong>Entrée : </strong>Blanchir les pointes d'asperges et poêler les tranches de lard paysan.<br><br>
                    <strong>Plat (option Mer): </strong>Réaliser le flan de légumes et le cuire, nacrer le risotto et déglacer au vin blanc.<br><br>
                    <strong>Plat (option Terre): </strong>Réaliser la sauce au bleu d'Auvergne et paner les aubergines.<br><br>
                    <strong>Dessert : </strong>Réaliser et cuire les sablés.
                </td>
            </tr>
            <tr>
                <td><strong>Avant le repas (H-1)</strong></td>
                <td>
                    <strong>Entrée : </strong>Verser la crème aux champignons dans un rammequin, casser l'œuf et lancer la cuisson 20 minutes avant le repas.<br><br>
                    <strong>Plat (option Mer): </strong>Terminer le risotto au safran, portionner le flan de légumes et réserver les garnitures au chaud. Assaisonner, fariner et poêler le poisson.<br><br>
                    <strong>Plat (option Terre): </strong>Cuire au four le pavé sur une grille à 80°C, réserver au chaud la mousseline et la sauce au bleu d'Auvergne.<br><br>
                    <strong>Dessert : </strong>Sortir les dômes du congélateur et les démouler sur les sablés bretons, réserver au frais.
                </td>
            </tr>
            <tr>
                <td><strong>Pendant le dîner</strong></td>
                <td>
                    <strong>Entrée : </strong>Faire les mouillettes, sortir le rammequin du four et parsemer de lard croustillant et de pointes d'asperges avant de servir.<br><br>
                    <strong>Plat (option Mer): </strong>Cuire le poisson au four avec sa croûte, monter le beurre blanc à la minute.<br><br>
                    <strong>Plat (option Terre): </strong>Poêler le pavé Limousin et frire les aubergines.<br><br>
                    <strong>Dessert : </strong>Sortir le sorbet du congélateur un peu avant de façonner une boule pour servir avec le dessert.
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
            <img src="images/entree.jpg" alt="Œuf Cocotte au Lard Paysan & Crème de sous-bois" width="100%" height="auto">
            <p><span class="badge">Pour 4 personnes</span> <span class="badge">Cuisson: Bain-Marie 120°C</span></p>
            <p><strong>Ingrédients :</strong> 4 œufs extra-frais, 150g de poitrine de lard paysan, 300g de champignons des bois, 20cl de vin blanc sec, 20cl de crème liquide 35% MG, 1 gousse d'ail, persil, 1 botte d'asperges vertes, sel fin, poivre.</p>
            <ol>
                <li><strong>L'Œuf Parfait :</strong> Placer les œufs entiers avec leur coquille dans un bain-marie régulé à 120°C pendant 45 minutes.</li>
                <li><strong>La Crème :</strong> Sauter vivement les champignons nettoyés avec l'ail. Mouiller à la crème, laisser frémir 10 min, puis mixer puissamment.</li>
                <li><strong>Lard & Asperges :</strong> Dorer les lardons à la poêle. Blanchir les pointes d'asperges 3 min à l'eau bouillante puis les glacer.</li>
                <li><strong>Dressage :</strong> Verser la crème chaude, écaler délicatement l'œuf au centre, parsemer de lard et disposer les asperges.</li>
            </ol>
        </div>

        <!-- PLAT MER -->
        <div class="fiche-technique">
            <h3>🐟 Le Plat Mer : L'Or Blanc en Croûte d'Émeraude & Risotto au Safran</h3>
            <img src="images/platMer.jpg" alt="L'Or Blanc en Croûte d'Émeraude & Risotto au Safran" width="100%" height="auto">
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
            <img src="images/plat_terre.jpg" alt="Le Pavé Limousin & son Jardin d'Automne" width="100%" height="auto">
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
            <img src="images/dessert.jpg" alt="Jardin Blanc & Fraîcheur Citronnée" width="100%" height="auto">
            <p><span class="badge">Pour 4 personnes</span> <span class="badge">Four: 180°C</span></p>
            <p><strong>Ingrédients :</strong> Coques en Chocolat : 200g de chocolat blanc<br>
            Mousse Bavaroise aux Fruits rouges :  150g de purée de fruits rouges, 1 feuille de gélatine, 150gr de chantilly, 1 cuillère à soupe de sucre glace<br>
            Sablé Breton : 100g de farine, 70g de beurre, 1 pincée de gros sel, 1 jaune d'œuf<br>
            Sorbet citron-basilic : 200ml de jus de citron, 10g de feuilles de basilic frais, 250gr Sucre, 150gr d'eau</p>
            <ol>
                <li><strong>La Coque :</strong> Badigeonner les moules demi-sphères de chocolat blanc fondu. Figer au congelateur.</li>
                <li><strong>L'Insert :</strong> Dissoudre la gélatine hydratée dans la purée de fruits rouges chaude. Couler en mini-moules et congeler 3h.</li>
                <li><strong>Sablé Breton :</strong> Sabler farine, sucre, beurre. Lier au jaune d'œuf. Étaler sur 5mm, détailler et cuire à 180°C pendant 12 à 15 min.</li>
                <li><strong>Dressage :</strong> Poser le dôme démoulé sur le sablé breton, laisser revenir à température 15 min, servir avec une boule de sorbet.</li>
            </ol>
        </div>

    </div>

</div>

<script src="js/script.js"></script>

</body>
</html>
