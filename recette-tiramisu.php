
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiramisu - Mon site de recettes</title>
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
        <h1>Tiramisu maison</h1>

        <section>
            <h2>Photos</h2>
             <div id="carouseltiramisu" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/tiramisu.jpg" class="d-block w-100" alt="Tiramisu maison">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouseltiramisu" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouseltiramisu" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
</div>
        </section>

        <div class="row">
        <section class="col-md-6">
            <h2>Ingrédients</h2>
            <ul>
                <li>250 g de mascarpone</li>
            <li>3 œufs</li>
            <li>80 g de sucre</li>
            <li>200 g de biscuits à la cuillère</li>
            <li>20 cl de café refroidi</li>
            <li>Cacao en poudre</li>
            </ul>
        </section>


        <section class="col-md-6">
            <h2>Ustensiles</h2>
            <ul>
                <li>Un saladier</li>
                <li>Un fouet électrique</li>
                <li>Une assiette creuse (pour tremper les biscuits)</li>
                <li>Un plat rectangulaire</li>
                <li>Une spatule</li>
    
            </ul>
        </section>
        </div>

        <section>
            <h2>Préparation</h2>
            <ol>
                 <li>Séparer les blancs des jaunes d'œufs.</li>
            <li>Mélanger les jaunes avec le sucre.</li>
            <li>Ajouter le mascarpone.</li>
            <li>Monter les blancs en neige et les incorporer.</li>
            <li>Tremper les biscuits dans le café.</li>
            <li>Alterner biscuits et crème dans un plat.</li>
            <li>Réserver au frais au moins 4 heures.</li>
            <li>Saupoudrer de cacao avant de servir.</li>
            </ol>
        </section>

        <section>
            <h2>Commentaire</h2>
            <p>Délicieux et facile à faire.</p>
        </section>

        <section>
            <h2>Note</h2>
            <p>4 sur 5</p>
        </section>
    </main>

    <footer>
        <p>Recette inspirée de <a href="https://www.marmiton.org/recettes/recette_tiramisu-recette-originale_12023.aspx" target="_blank" rel="noopener">Marmiton</a></p>
        <p>&copy; 2026 Mon site de recettes</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>