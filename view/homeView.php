<?php 
// --------------------------------
// Vue de l'accueil
// --------------------------------

$titre = "Accueil";
include "include/header.php";

?>

<body>
    <div class="container mt-5 mb-5">
        <h1><?=$titre?></h1>
        <p><a href="?page=planet">Voir la liste des planètes</a></p>
        <p><a href="?page=planet&view=telluric">Voir la liste des planètes telluriques</a></p>
        <p><a href="?page=planet&view=gaseous">Voir la liste des planètes gazeuses</a></p>
    </div>
</body>

</html>

<?php

include "include/footer.php";

?>