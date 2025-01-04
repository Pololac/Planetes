<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulaire Creation</title>
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-5">
            <h3>Ajouter une planète</h3>

            <?php

            if(isset($success)){
                echo "<p style='color:green'>$success</p>";
            } else {
                if (isset($error)){
                echo '<p style="color:red">' .$error->getMessage(). '</p>';
                }
            }

            ?>


            <form method="post">
                <div class="form-group">
                    <label for="nom">Nom de la planète : </label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?=htmlentities($_POST['nom'] ?? '')?>"/>
                </div>
                <div class="form-group">
                    <label for="imgUrl">URL de l'image : </label>
                    <input type="text" class="form-control" id="imgUrl" name="imgUrl" value="<?=htmlentities($_POST['imgUrl'] ?? '')?>"/>
                </div>
                <div class="form-group">
                    <label for="categorie">Catégorie : </label>
                    <input type="text" class="form-control" id="categorie" name="categorie" value="<?=htmlentities($_POST['categorie']??'')?>"/>
                </div>
                <div class="form-group">
                    <label for="diametre">Diamètre en km : </label>
                    <input type="number" class="form-control" id="diametre" name="diametre" value="<?=htmlentities($_POST['diametre']??'')?>"/>
                </div>
                <div class="form-group">
                    <label for="gravite">Gravité en m/s² : </label>
                    <input type="number" step="0.01" class="form-control" id="gravite" name="gravite" value="<?=htmlentities($_POST['gravite']??'')?>"/>
                </div>
                <div class="form-group">
                    <label for="lienNasa">Insérer le lien vers le site de la Nasa : </label>
                    <input type="text" class="form-control" id="lienNasa" name="lienNasa" value="<?=htmlentities($_POST['lienNasa']??'')?>"/>
                </div>   
                <button type="submit" class="btn btn-primary mt-2 mb-4">Ajouter</button>

            </form>
        </div>
    </div>

    <p><a href="?page=planet">Revenir à la liste des planètes</a></p>

</div>

</body>
</html>