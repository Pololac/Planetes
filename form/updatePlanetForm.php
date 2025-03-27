<?php
$titre = "Modifier les informations de la planète";
include_once "includes/header.php";

?>

<body>

    <div class="container mt-2 mb-5">
        <div class="d-flex justify-content-end">
            <a href="?page=planet" class="btn btn-secondary mb-2">Revenir à la liste générale</a>
        </div>

        <div class="text-center mb-4">
            <h2><?=$titre?></h2>
        </div>

            
        <?php

        if(isset($success)){?>
            <p style='color:green'><?=$success?></p><?php ;
        } else {
            if (isset($error)){?>
            <p style="color:red"><?=$error->getMessage()?></p><?php ;
            }
        }

        ?>

        <form method="post" class="bg-light text-black p-3 rounded shadow">
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="nom">Nom de la planète : </label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?=htmlentities($_POST['nom'] ?? $planet->getNom() ?? '')?>"/>
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="imgUrl">URL de l'image : </label>
                    <input type="text" class="form-control" id="imgUrl" name="imgUrl" value="<?=htmlentities($_POST['imgUrl'] ?? $planet->getImgUrl() ??'')?>"/>
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="categorie">Catégorie : </label>
                    <input type="text" class="form-control" id="categorie" name="categorie" value="<?=htmlentities($_POST['categorie'] ?? $planet->getCategorie() ??'')?>"/>
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="diametre">Diamètre en km : </label>
                    <input type="number" class="form-control" id="diametre" name="diametre" value="<?=$_POST['diametre'] ?? $planet->getDiametre() ?? '' ?>"/>
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="gravite">Gravité en m/s² : </label>
                    <input type="number" class="form-control" id="gravite" name="gravite" value="<?=$_POST['gravite'] ?? $planet->getGravite() ?? '' ?>"/>
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="lienNasa">Insérer le lien vers le site de la Nasa : </label>
                    <input type="text" class="form-control" id="lienNasa" name="lienNasa" value="<?=htmlentities($_POST['lienNasa'] ?? $planet->getLienNasa() ??'')?>"/>
                </div>

            </div>
            <button type="submit" class="btn btn-primary mt-4 mb-2 d-block mx-auto">Mettre à jour</button>

        </form>
          
    </div>

</div>

</body>
</html>