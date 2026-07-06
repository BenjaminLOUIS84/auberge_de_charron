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
            <p><span class="badge">Pour 4 personnes</span> <span class="badge">Cuisson: Au Bain-Marie Four à 120°C</span></p>
            <p><strong>Ingrédients :</strong><br>
            - 4 œufs extra-frais<br>- 150g de poitrine de lard paysan<br>- 300g de champignons<br>- 20cl de vin blanc sec<br>- 20cl de crème liquide 35% MG<br>- 48gr de Roux<br>- 1 gousse d'ail<br>- persil<br>- 1 botte d'asperges vertes<br>- sel fin<br>- poivre</p>
            <ol>
                
                <li><strong>La Crème aux champignons:</strong> Sauter vivement les champignons nettoyés avec l'ail et assaisonner. Déglacer au vin blanc sec, laisser frémir 10 min, puis mixer. Ajouter le Roux et laisser frémir 5 min supplémentaires. Ajouter la crème et le persil.</li>
                <li><strong>L'Œuf Cocotte :</strong> Dans un rammequin verser de la crème au champignons, casser un oeuf directement dessus et rajouter de la crème. Placer le rammequin au bain-marie dans un fourrégulé à 120°C pendant 15-20 minutes. Surveiller la cuisson et particulièrement la coagulation de l'oeuf.</li>
                <li><strong>Lard & Asperges :</strong> Dorer les tranches de lard à la poêle. Blanchir les pointes d'asperges 3 min à l'eau bouillante puis les glacer.</li>
                <li><strong>Les mouillettes :</strong> Couper une baguette de pain frais en tartines, beurrer et débitter des batonnets.</li>
                <li><strong>Dressage :</strong>Mettre une serviette sur l'assiette. Sortir le rammequin du four et le poser sur la serviette, parsemer de lard et de pointes d'asperges et disposer les mouillettes.</li>
            </ol>
        </div>

        <!-- PLAT MER -->
        <div class="fiche-technique">
            <h3>🐟 Le Plat Mer : L'Or Blanc en Croûte d'Émeraude & Risotto au Safran</h3>
            <img src="images/platMer.jpg" alt="L'Or Blanc en Croûte d'Émeraude & Risotto au Safran" width="100%" height="auto">
            <p><span class="badge">Pour 4 personnes</span> <span class="badge">Four: 180°C</span></p>
            <p><strong>Ingrédients :</strong><br>
            - 4 dos de cabillaud<br>- sel, poivre<br>- farine<br>- huile<br>
            Coûte d'herbes :<br>- 50g de beurre<br>- 50g de chapelure<br>- 25gr d'herbes aromatiques<br>-  50g de fromage râpé<br>
            Bouillon de volaille:<br>- 1 carotte<br>- 1 oignon<br>- bouquet garni<br>- poulet(carcasse et abatti)<br>- huile<br>- eau 1 litre<br>
            Risotto :<br>- 400g de riz Arborio<br>- 60cl de bouillon de volaille<br>- safran<br>- 200gr d'oignons<br>- 10cl de vin blanc<br>- beurre<br>- Sel, poivre</p>
            Flan de légumes :<br>- 4 oeufs<br>- 25cl de lait<br>- 25cl de crème liquide<br>- 30 gr de farine<br>- herbes aromatiques<br>- 1 courgette<br>- 3 cornichons<br>- 1 carotte<br>- 4gr de sel et 2gr de poivre</p>
            Sauce beurre blanc :<br>- 40g d'echalote<br>- 2cl de vin blanc<br>- 2cl de vinaigre<br>- 200gr de beurre<br></p>
            <ol>
                <li><strong>Le Cabillaud :</strong> Assaisonner et fariner le poisson. Marquer en cuisson à la poêle 2 minutes par face pour la coloration et croûte. Poser un rectangle de croûte d'herbes sur chaque dos. Enfourner à 180°C pendant 5 à 8 minutes.</li>
                <li><strong>La Croûte :</strong> Réaliser à la main un sablage avec le beurre, la chapelure, le fromage et les herbes. Étaler sur 3mm dans un sac de congélation avec un rouleau à pâtisserie et réserver au frais.</li>
                <li><strong>Le Bouillon de volaille :</strong> Faire revenir le poulet dans l'huile. Ajouter la carotte, l'oignon et le bouquet garni. Verser l'eau et laisser mijoter 1 heure. Laisser infuser et refroidir 20 minutes puis filtre pour recueillir le bouillon.</li>
                <li><strong>Le Risotto :</strong> Suer l'oignon ciselé, assaisonner et nacrer le riz, déglacer au vin blanc. Ajouter le bouillon safrané et laisser mijoter pendant 17 min. Lier hors du feu au beurre.</li>
                <li><strong>Le Flan de légumes :</strong> Cuire les légumes à l'étuvée et les refroidir. Mélanger les oeufs avec le lait, la crème et la farine. Assaisonner et ajouter les herbes. Ajouter ensuite les légumes cuits et verser la préparation dans un moule rectangle en silicone. Cuire au four à 180°C pendant 20 minutes.</li>
                <li><strong>La Sauce Beurre Blanc :</strong> Suer les échalotes ciselées, déglacer au vin blanc et au vinaigre puis faire réduire. Monter au beurre froid en fouettant.</li>
                <li><strong>Dressage :</strong> Garnir un emporte-pièce de risotto, poser le cabillaud à côté, poser le flan de légumes et verser le cordon de sauce beurre blanc sur le poisson. Ajouter un quartier de citron</li>
            </ol>
        </div>

        <!-- PLAT TERRE -->
        <div class="fiche-technique" style="border-left: 3px solid var(--gold);">
            <h3>🥩 Option Terre : Le Pavé Limousin & son Jardin d'Automne</h3>
            <img src="images/platTerre.jpg" alt="Le Pavé Limousin & son Jardin d'Automne" width="100%" height="auto">
            <p><span class="badge">Alternative Viande</span> <span class="badge">Pour 4 personnes</span></p> <span class="badge">Four: 80°C</span></p>
            <p><strong>Ingrédients :</strong><br>
            - 4 pavés de rumsteck Limousin<br>
            Mousseline :<br>- 1 courge butternut (ou à défaut des carottes ou de la patate douce)<br>- 4 Pomme de terre<br>- 1 fève tonka<br>- 20cl de crème liquide<br>- 50g de beurre<br>- Sel, poivre<br>
            Beignets d'Aubergine :<br>- 1 aubergine<br>- du persil et 2 gousses d'ail<br>- chapelure<br>- 1 œuf<br>- farine<br>- Huile de friture<br>- Sel, poivre<br>
            Sauce au Bleu d'Auvergne :<br>- 100g de Bleu d'Auvergne<br>- 20cl de fond de volaille<br>- 10cl de crème liquide<br>- 22gr de Roux<br>- Sel, poivre<br>
            Sauce au Poivre :<br>- Entre 10 et 30g de Poivre (selon le goût)<br>- 5cl de Cognac<br>- 30cl de crème liquide<br>- 22gr de Roux<br>- Sel<br></p>
        
            <ol>
                <li><strong>Pavé de rumsteck Limousin :</strong> Sortir du réfrigérateur 20 minutes avant de cuire au four à 80°C pendant une heure. Réserver au chaud avant de saisir les pavés 2 à 3 min par face au beurre moussant. Laisser reposer 5 min.</li>
                <li><strong>Mousseline :</strong> Cuire la courge butternut et les pommes de terre à la vapeur ou dans l'eau bouillante(cuire à l'anglaise). Assaisonner et râper un tiers de fève tonka sur les légumes cuits. Mixer longuement avec de la crème, le beurre.</li>
                <li><strong>Beignets d'Aubergine :</strong> Passer les rondelles d'aubergine dégorgées dans la farine, dans l'anglaise à la persillade, puis la chapelure. Frire jusqu'à coloration.</li>
                <li><strong>Sauce au Bleu :</strong> Réduire le fond de volaille et y faire fondre le Bleu d'Auvergne à feu doux en fouettant. Ajouter le roux, assaisonner et ajouter la crème.</li>
                <li><strong>Sauce au Poivre :</strong> Torréfier le Poivre à feu vif puis flamber au cognac. Ajouter le roux, assaisonner et ajouter la crème.</li>
                <li><strong>Dressage :</strong>Dresser une virgule de mousseline, poserdeux beignets d'aubergine et le pavé nappé de sauce.</li>
            </ol>
        </div>

        <!-- DESSERT -->
        <div class="fiche-technique">
            <h3>🍫 Le Dessert : Jardin Blanc & Fraîcheur Citronnée</h3>
            <img src="images/dessert.jpg" alt="Jardin Blanc & Fraîcheur Citronnée" width="100%" height="auto">
            <p><span class="badge">Pour 4 personnes</span> <span class="badge">Four: 180°C</span></p>
            <p><strong>Ingrédients :</strong><br>
            Coques en Chocolat :<br>- 200g de chocolat blanc<br>
            Mousse Bavaroise aux Fruits rouges :<br>-  150g de purée de fruits rouges<br>- 1 feuille de gélatine<br>- 150gr de chantilly<br>- 1 cuillère à soupe de sucre glace<br>
            Sablé Breton :<br>- 100g de farine<br>- 70g de beurre<br>- 1 pincée de gros sel<br>- 1 jaune d'œuf<br>
            Sorbet citron-basilic :<br>- 200ml de jus de citron<br>- 10g de feuilles de basilic frais<br>- 250gr Sucre<br>- 150gr d'eau</p>
            <ol>
                <li><strong>La Coque :</strong> Badigeonner les moules demi-sphères de chocolat blanc fondu. Figer au congelateur.</li>
                <li><strong>L'Insert :</strong> Dissoudre la gélatine hydratée dans la purée de fruits rouges chaude, laisser refroidir et incorporer la chantilly. Garnir les coques et congeler 3h.</li>
                <li><strong>Sablé Breton :</strong> Sabler farine, sucre, beurre. Lier au jaune d'œuf. Étaler sur 5mm, détailler et cuire à 180°C pendant 12 à 15 min.</li>
                <li><strong>Sorbet citron-basilic :</strong> Faire un sirop avec le sucre et l'eau puis ajouter le jus de citron et le basilic. Attendre que la base soit froide avant de mettre dans la sorbetière. Laisser reposer 24h au congélateur.</li>
                <li><strong>Dressage :</strong> Poser le dôme démoulé sur le sablé breton, laisser revenir à température 15 min, servir avec une boule de sorbet.</li>
            </ol>
        </div>
        <!-- ASTUCE EXCLUSIVE -->
        <!-- VIDÉO 5 -->
        <h3>Une petite surprise rien que pour vous !</h3>
        <div class="video-wrapper">
            <div class="video-shield"></div>
            <video src="videos/video5.mp4" controls controlslist="nodownload" playsinline webkit-playsinline poster="images/miniature5.jpg" width="100%" height="auto"></video>
        </div>
        <p><em>Note : Pour lire la vidéo, faites un double clic sur le lecteur.</em></p><br>
        <div class="fiche-technique">
            <h3>ASTUCE EXCLUSIVE : La préparation & l'utilisation du ROUX en cuisine</h3>
            <img src="images/roux.jpg" alt="Roux" width="100%" height="auto">
            <p><span class="badge">PROPORTIONS</span></p><br>
            <p>75gr de Roux pour 1L de liquide permet de réaliser un velouté</p>
            <p>125gr de Roux pour 1L de liquide permet de réaliser un gratin</p>
            <p><strong>Ingrédients :</strong><br>
            - 200g de beurre<br>
            - 200g de farine<br></p><br>
            <p>Le Roux est un mélange de beurre et de farine utilisé pour épaissir les sauces et les soupes.<br> 
            Il existe trois types de roux : blanc, blond et brun, chacun ayant une couleur et un goût distincts.</p>
           
            <ol>
                <li><strong>Le Roux Blanc :</strong> Faire fondre le beurre dans une casserole, ajouter la farine et mélanger jusqu'à obtenir une pâte homogène. Cuire légèrement en remuant constamment. Durée de cuisson : 5 à 10 minutes.</li>
                <li><strong>Le Roux Blond:</strong> Durée de cuisson : 10 à 15 minutes.</li>
                <li><strong>Le Roux Brun:</strong> Durée de cuisson : 15 à 20 minutes.</li>
                <li><strong>Le choc thermique pour créer l'épaississement :</strong> Verser le roux chaud dans un liquide froid ou vice-versa.</li>

            </ol>
        </div>

    </div>
    <p><strong>Notes :</strong><br>
    - Les fiches techniques sont fournies à titre indicatif. Les temps de cuisson peuvent varier selon le matériel et les ingrédients utilisés. Ajustez selon votre expérience et vos préférences.<br>
    - Pour toute question ou assistance, n'hésitez pas à contacter notre support technique via le formulaire de contact sur notre site.<br>
    - Les vidéos et fiches techniques sont la propriété intellectuelle de l'Auberge de Charron. Toute reproduction, distribution ou partage non autorisé est strictement interdit.<br>
    - Décline toute responsabilité en cas de mauvaise manipulation, d'empoisonnement ou d'accident en cuisine. Suivez les instructions avec précaution et respectez les règles de sécurité alimentaire.</p>

</div>

<script src="js/script.js"></script>

</body>
</html>
