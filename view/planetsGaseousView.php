<?php
// --------------------------------
// Vue de la liste des éléments classés par point de fusion décroissant
// --------------------------------
$titre = "Liste des planètes gazeuses";
include_once "includes/header.php";

?>

<body>

    <div class="container mt-2 mb-5">

        <div class="d-flex justify-content-end">
            <a href="?page=planet" class="btn btn-secondary mb-2">Revenir à la liste générale</a>
        </div>

        <h2><?=$titre?></h2>

        <div class="d-flex flex-row justify-content-between align-items-end">
            
            <form method="GET" class="d-flex mb-4">
                <div class="form-group mt-2">
                    <input type="hidden" name="page" value="planet">
                    <div class="mb-2">
                        <label for="searchName"><b>Recherche par le nom : </b></label>
                    </div>
                    <div class="d-flex">
                        <input type="text" name="searchName" value="<?= htmlentities($_GET['searchName'] ?? '') ?>">
                        <button class="btn btn-primary ms-2" type="submit">Rechercher</button>
                    </div>
                </div>
            </form>

            <div class="mb-4">
                <a href="?page=planet&action=create" class="btn btn-primary" >Ajouter une planète</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Diamètre</th>
                    <th>Gravité</th>
                    <th>Lien Nasa</th>

                </tr>
            </thead>

            <tbody>
                <?php foreach($planets as $planet) : ?>
                    <tr>
                        <td><img src="<?=htmlentities($planet->getImgUrl())?>" width="200"/></td>
                        <td><a href="?page=planet&id=<?=$planet->getId()?>"><?=htmlentities($planet->getNom()); ?></a></td>
                        <td><?=htmlentities($planet->getCategorie()); ?></td>
                        <td><?=htmlentities($planet->getDiametre()); ?></td>
                        <td><?=htmlentities($planet->getGravite()); ?></td>
                        <td><a href="<?=htmlentities($planet->getLienNasa());?>">En savoir plus</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</body>
</html>

<?php

include_once "includes/footer.php";

?>
