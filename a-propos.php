<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A propos - Mon site de recettes</title>
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
        <h1>À propos</h1>
        <section>
            <h2>Le site</h2>
            <p>Ce site rassemble des recettes simples, expliquées pas à pas, avec la liste des ingrédients et des ustensiles.</p>
        </section>

        <section>
            <h2>Les auteurs</h2>
            <p>Site créé par WAHIB, WISSAM et AMINE , dans le cadre de mon apprentissage du HTML, du CSS, de Bootstrap et du PHP.</p>
        </section>

        <section>
            <h2>Sources</h2>
            <p>Les recettes sont inspirées du site <a href="https://www.marmiton.org" target="_blank" rel="noopener">Marmiton</a>.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Mon site de recettes</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>