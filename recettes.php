<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos recettes - Mon site de recettes</title>
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
                <h1>Nos recettes</h1>

        <div class="row">
            <article class="col-md-6 recette-resume">
                <a href="recette-flan-vanille.php">
                    <img src="images/flanvn.jpg" alt="Flan à la vanille">
                    <h2>Flan à la vanille</h2>
                </a>
                <p>Un flan très crémeux, facile à réussir. Note : 4 sur 5.</p>
            </article>

            <article class="col-md-6 recette-resume">
                <a href="recette-gratin-dauphinois.php">
                    <img src="images/gratind.jpg" alt="Gratin dauphinois">
                    <h2>Gratin dauphinois</h2>
                </a>
                <p>Un grand classique réconfortant. Note : 5 sur 5.</p>
            </article>
            <article class="col-md-6 recette-resume">
                <a href="recette-risotto-truffe.php">
                    <img src="images/risotto.jpg" alt="Risotto à la truffe">
                    <h2>Risotto à la Truffe</h2>
                </a>
                <p>Un délicieux Risotto à la Truffe. Note : 4 sur 5.</p>
            </article>
            <article class="col-md-6 recette-resume">
                <a href="recette-tiramisu.php">
                    <img src="images/tiramisu.jpg" alt="Tiramisu">
                    <h2>Tiramisu </h2>
                </a>
                <p>Un Tiramisu à l'italienne, étape par étape. Note : 4 sur 5.</p>
            </article>

        </div>
                
    </main>

    <footer>
        <p>&copy; 2026 Mon site de recettes</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>