<?php
// --------------------------------
// Vue de la liste des planètes
// --------------------------------

$titre = "Liste des planètes";
include_once "includes/header.php";

?>

<body>
    <div class="container mt-5 mb-5">

        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2><?=$titre?></h2>

            <div class="d-flex justify-content-center mt-4">
                <a href="?page=planet&action=create" class="btn btn-primary" >Ajouter une planète</a>
            </div>

        </div>

        <div class="row justify-content-center">
            <?php foreach ($planets as $planet) : ?>
                <div class="col-12 col-md-3 d-flex flex-column align-items-center mt-md-5 mb-5">
                    <div class="mb-3">
                        <img src="<?= htmlentities($planet->getImgUrl()) ?>" alt="Planète <?= htmlentities($planet->getNom()); ?>" width="200" class="rounded-circle"  />
                    </div>
                    <a href="?page=planet&id=<?= $planet->getId() ?>">
                        <h3><?= htmlentities($planet->getNom()); ?></h3>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


</body>
</html>

<?php

include_once "includes/footer.php";

?>
