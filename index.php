<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon site de recettes</title>
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
        <section class="accueil-intro">
            <h1>Bienvenue sur mon site de recettes</h1>
            <p>Des recettes simples et réconfortantes, expliquées pas à pas.</p>
            <a class="lien-bouton" href="recettes.php">Voir les recettes</a>
        </section>

        <section class="row">
            <div class="col-md-6">
                <h2>Pour les gourmands</h2>
                <p>Un flan à la vanille bien crémeux, parfait pour terminer un repas.</p>
            </div>
            <div class="col-md-6">
                <h2>Pour les jours de froid</h2>
                <p>Un gratin dauphinois doré et onctueux, le grand classique de l'hiver.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Mon site de recettes</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>