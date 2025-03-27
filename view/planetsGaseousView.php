<?php
// --------------------------------
// Vue de la liste des éléments classés par point de fusion décroissant
// --------------------------------
$titre = "Liste des planètes gazeuses";
include_once "includes/header.php";

?>

<body>

    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-end">
            <a href="?page=planet" class="btn btn-secondary mb-2">Revenir à la liste générale</a>
        </div>

        <h2><?=$titre?></h2>

        <div class = "row">
            <form method="GET" class="mb-4 d-flex">
                <div class="form-group col-4 mt-2 mb-2">
                    <input type="hidden" name="page" value="planet">
                    <label for="searchName"><b>Recherche par le nom : </b></label>

                    <div class="d-flex">
                        <input type="text" name="searchName" class="form-control" value="<?= htmlentities($_GET['searchName'] ?? '') ?>">

                        <button class="btn btn-primary ms-2" type="submit">Rechercher</button>
                    </div>
                </div>
            </form>
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


        <div class="d-flex justify-content-end">
            <a href="?page=planet&action=create" class="btn btn-primary mt-2 mb-4" >Ajouter une planète</a>
        </div>
    </div>

</body>
</html>

<?php

include_once "includes/footer.php";

?>
