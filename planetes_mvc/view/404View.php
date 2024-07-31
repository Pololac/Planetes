<?php 
// --------------------------------
// Vue de la page 404
// --------------------------------
$titre = "Erreur 404";
include "include/header.php";

?>

<body>
    <div class="container mt-5 mb-5">
        <a href="?" class="btn btn-secondary mb-2">Revenir à l'accueil</a>

        <h2><?=$titre?></h2>

        <p>Veuillez nous excuser mais la page que vous demandez n'existe pas</p>
    </div>
</body>
</html>

<?php

include "include/footer.php";

?>