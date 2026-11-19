<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gratin dauphinois - Mon site de recettes</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Lato&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-recettes">
    <div class="container">
        <a class="navbar-brand" href="index.php">Mes recettes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Ouvrir le menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="recettes.php">Recettes</a></li>
                <li class="nav-item"><a class="nav-link" href="a-propos.php">À propos</a></li>
            </ul>
        </div>
    </div>
</nav>
    </header>

    <main class="container">
        <h1>Gratin dauphinois</h1>

        <section>
            <h2>Photos</h2>
            <div id="carouselGratin" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/gratind.jpg" class="d-block w-100" alt="Gratin dauphinois doré dans son plat">
        </div>
        <div class="carousel-item">
            <img src="images/gratin.jpg" class="d-block w-100" alt="Une part de gratin dauphinois">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselGratin" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselGratin" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
</div>
        </section>

            <div class="row">
                 <section class="col-md-6">
            <h2>Ingrédients</h2>
            <ul>
                <li>1 kg de pommes de terre</li>
                <li>50 cl de crème fraîche liquide</li>
                <li>25 cl de lait entier</li>
                <li>1 gousse d'ail</li>
                <li>30 g de beurre</li>
                <li>1 pincée de noix de muscade</li>
                <li>Sel et poivre</li>
            </ul>
        </section>


         <section class="col-md-6">
            <h2>Ustensiles</h2>
            <ul>
                <li>Un plat à gratin</li>
                <li>Un économe (éplucheur)</li>
                <li>Un couteau bien aiguisé (ou une mandoline)</li>
                <li>Une casserole</li>
                <li>Un saladier</li>
            </ul>
        </section>
    </div>
                
        

        <section>
            <h2>Préparation</h2>
            <ol>
                <li>Préchauffer le four à 160 °C.</li>
                <li>Éplucher les pommes de terre et les couper en fines rondelles, sans les rincer.</li>
                <li>Frotter le plat avec la gousse d'ail coupée en deux, puis le beurrer.</li>
                <li>Chauffer le lait et la crème avec le sel, le poivre et la muscade.</li>
                <li>Ajouter les pommes de terre et cuire 5 minutes à feu doux.</li>
                <li>Verser le tout dans le plat en répartissant bien les rondelles.</li>
                <li>Enfourner pour 1 h 15, jusqu'à ce que le dessus soit bien doré.</li>
                <li>Laisser reposer 5 minutes avant de servir.</li>
            </ol>
        </section>

        <section>
            <h2>Commentaire</h2>
            <p>Un grand classique réconfortant. Ne pas rincer les pommes de terre : leur amidon rend le gratin onctueux.</p>
        </section>

        <section>
            <h2>Note</h2>
            <p>5 sur 5</p>
        </section>
    </main>

    <footer>
        <p>Recette inspirée de <a href="https://www.marmiton.org/recettes/recette_gratin-dauphinois_13809.aspx" target="_blank" rel="noopener">Marmiton</a></p>
        <p>&copy; 2026 Mon site de recettes</p>
</footer>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>