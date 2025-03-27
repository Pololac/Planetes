<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css"> <!-- Chemin relatif (depuis view/) -->

    <title>
        <?php echo isset($titre) ? htmlspecialchars($titre) : 'Accueil'; ?>
    </title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="?">Space Learn</a>

                <!-- Bouton pour mobiles -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Conteneur des liens -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav d-flex gap-5">
                        <li class="nav-item">
                            <a class="nav-link" href="?page=planet">Planètes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=planet&view=telluric">Planètes telluriques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=planet&view=gaseous">Planètes gazeuses</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
