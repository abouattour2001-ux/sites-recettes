<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flan à la vanille - Mon site de recettes</title>
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
        <h1>Flan à la vanille</h1>

        <section>
            <h2>Photos</h2>
            <div id="carouselFlan" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/flanvn.jpg" class="d-block w-100" alt="Flan à la vanille entier">
        </div>
        <div class="carousel-item">
            <img src="images/flanv.jpg" class="d-block w-100" alt="Une part de flan à la vanille">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFlan" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselFlan" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
</div>
        </section>

        <div class="row">
        <section class="col-md-6">
            <h2>Ingrédients</h2>
            <ul>
                <li>1 pâte brisée</li>
                <li>1 litre de lait entier</li>
                <li>4 œufs</li>
                <li>120 g de sucre</li>
                <li>80 g de Maïzena</li>
                <li>2 gousses de vanille</li>
            </ul>
        </section>


        <section class="col-md-6">
            <h2>Ustensiles</h2>
            <ul>
                <li>Un moule à tarte</li>
                <li>Une casserole</li>
                <li>Un fouet</li>
                <li>Un saladier</li>
            </ul>
        </section>
        </div>

        <section>
            <h2>Préparation</h2>
            <ol>
                <li>Préchauffer le four à 180 °C.</li>
                <li>Étaler la pâte dans le moule et la piquer.</li>
                <li>Faire infuser la vanille dans le lait chaud.</li>
                <li>Fouetter les œufs, le sucre et la Maïzena.</li>
                <li>Verser le lait chaud en fouettant, puis épaissir sur feu doux.</li>
                <li>Verser sur la pâte et cuire 40 à 45 minutes.</li>
                <li>Laisser refroidir 3 heures au réfrigérateur.</li>
            </ol>
        </section>

        <section>
            <h2>Commentaire</h2>
            <p>Un flan très crémeux, facile à réussir.</p>
        </section>

        <section>
            <h2>Note</h2>
            <p>4 sur 5</p>
        </section>
    </main>

    <footer>
        <p>Recette inspirée de <a href="https://www.marmiton.org/recettes/recette_flan-patissier-au-monsieur-cuisine_383711.aspx" target="_blank" rel="noopener">Marmiton</a></p>
        <p>&copy; 2026 Mon site de recettes</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>