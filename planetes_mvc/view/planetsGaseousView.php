<?php
// --------------------------------
// Vue de la liste des éléments classés par point de fusion décroissant
// --------------------------------
$titre = "Liste des planètes gazeuses";
include "include/header.php";

?>

<body>

    <div class="container mt-5 mb-5">
        <a href="?" class="btn btn-secondary mb-2">Revenir à l'accueil</a>

        <h2><?=$titre?></h2>

        <div class = "row">
            <form method="GET" class="mb-4">
            <div class="form-group col-4 mt-2 mb-2">
                <input type="hidden" name="page" value="planet">
                <label for="searchName"><b>Recherche par le nom : </b></label>
                <input type="text" name="searchName" class="form-control" value="<?= htmlentities($_GET['searchName'] ?? '') ?>">
                <button class="btn btn-primary mt-2" type="submit">Rechercher</button>
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
                        <td><a href="<?=htmlentities($planet->getLienNasa());?>"><?=htmlentities($planet->getLienNasa());?></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="?page=planet&action=create" class="btn btn-primary mt-2 mb-4" >Ajouter une planète</a>

    </div>

</body>
</html>

<?php

include "include/footer.php";

?>
