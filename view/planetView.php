<?php
// --------------------------------
// Vue d'un seul planet
// --------------------------------

$titre = "Vue d'un seul planet";
include "include/header.php";

?>

<body>
    <div class="container mt-2 mb-5 text-center">
        <a href="?page=planet">Revenir à la liste générale</a>

        <h1><?=htmlentities($planet->getNom())?> (Planète <?=htmlentities($planet->getCategorie())?>)</h1>

        <a class="mt-4 mb-4" href="?page=planet&action=update&id=<?=$planet->getId()?>" role="button">Modifier la planète</a><

        <a class="mt-2 mb-4" href="?page=planet&action=delete&id=<?=$planet->getId()?>" role="button">Supprimer la planète</a>


        <p><img src="<?=htmlentities($planet->getImgUrl())?>" width="500"/></p>
        <p><b>Diamètre</b> : <?=htmlentities($planet->getDiametre())?></p>
        <p><b>Gravité</b> : <?=htmlentities($planet->getGravite())?></p>
        <a href=<?=htmlentities($planet->getLienNasa()); ?>>Voir la planète sur le site de la NASA</a>
       
    </div>
</body>
</html>

<?php

include "include/footer.php";

?>
