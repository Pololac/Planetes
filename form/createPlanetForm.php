<?php
$titre = "Ajouter une planète";
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
            if(isset($success)){
                echo "<p style='color:green'>$success</p>";
            } else {
                if (isset($error)){
                echo '<p style="color:red">' .$error->getMessage(). '</p>';
                }
            }
        ?>

        <form method="post" class="bg-light text-black p-3 rounded shadow">
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="nom">Nom de la planète : </label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?=htmlentities($_POST['nom'] ?? '')?>" />
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="imgUrl">URL de l'image : </label>
                    <input type="text" class="form-control" id="imgUrl" name="imgUrl" value="<?=htmlentities($_POST['imgUrl'] ?? '')?>" />
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="categorie">Catégorie : </label>
                    <input type="text" class="form-control" id="categorie" name="categorie" value="<?=htmlentities($_POST['categorie'] ?? '')?>" />
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="diametre">Diamètre en km : </label>
                    <input type="number" class="form-control" id="diametre" name="diametre" value="<?=htmlentities($_POST['diametre'] ?? '')?>" />
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="gravite">Gravité en m/s² : </label>
                    <input type="number" step="0.01" class="form-control" id="gravite" name="gravite" value="<?=htmlentities($_POST['gravite'] ?? '')?>" />
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="lienNasa">Insérer le lien vers le site de la Nasa : </label>
                    <input type="text" class="form-control" id="lienNasa" name="lienNasa" value="<?=htmlentities($_POST['lienNasa'] ?? '')?>" />
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4 mb-2 d-block mx-auto">Ajouter</button>
        </form>

    </div>

</body>
</html>
