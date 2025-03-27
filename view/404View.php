<?php 
// --------------------------------
// Vue de la page 404
// --------------------------------
$titre = "Erreur 404";
include_once "includes/header.php";

?>

<body class="min-vh-100 d-flex flex-column">
    <div class="container mt-5 mb-5 text-center" style="height: 600px;">
        <div class="d-flex justify-content-end">
            <a href="?" class="btn btn-secondary">Revenir à l'accueil</a>
        </div>

        <div class="mt-5">
            <h2><?=$titre?></h2>
            <p class="mt-4">Veuillez nous excuser mais la page que vous demandez n'existe pas.</p>
            <img src="assets/images/page-lost.svg" alt="Une soucoupe d'extraterrestres" width="500" height="500">
        </div>
        
    </div>
</body>

</html>

<?php

include_once "includes/footer.php";

?>