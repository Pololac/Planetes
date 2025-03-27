<?php
// --------------------------------
// Vue d'un seul planet
// --------------------------------

$titre = "Vue d'un seul planet";
include_once "includes/header.php";

?>

<body>
    <div class="container mt-2 mb-5 text-center">
        <div class="d-flex justify-content-end">
            <a href="?" class="btn btn-secondary mb-2">Revenir à l'accueil</a>
        </div>

        <h1><?=htmlentities($planet->getNom())?></h1>
        <h3>(Planète <?=htmlentities($planet->getCategorie())?>)</h3>

        <div class="d-flex flex-column align-items-center">
            <div class="d-flex justify-content-center align-items-center gap-4">
                <a href="?page=planet&action=update&id=<?=$planet->getId()?>" role="button">Modifier la planète</a>
                <a href="?page=planet&action=delete&id=<?=$planet->getId()?>" role="button">Supprimer la planète</a>
            </div>
           
            <img src="<?=htmlentities($planet->getImgUrl())?>" width="500" class="mt-4 mb-4"/>
            <p><b>Diamètre : </b><?=htmlentities($planet->getDiametreFormatted())?></p>
            <p><b>Gravité :</b> <?=htmlentities($planet->getGraviteFormatted())?></p>
            <a href=<?=htmlentities($planet->getLienNasa()); ?>>Voir la planète sur le site de la NASA</a>
        </div>
        
       
    </div>
</body>
</html>

<?php

include_once "includes/footer.php";

?>
