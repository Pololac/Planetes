<?php
$titre = "Supprimer la planète";
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
                <p style='color:green'><?=$success?></p>
                
            <?php

            } else {
                if (isset($error)){?>
                <p style="color:red"><?=$error->getMessage()?></p><?php ;
                }?>

                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center mt-5">
                    <p>Êtes-vous sûr de vouloir supprimer <strong><?=$planet->getNom()?></strong>?</p>

                    <form method="post" class="d-flex flex-row ms-4 gap-2">
                        <input type="submit" class="btn btn-primary mt-2 mb-4" name="confirm" value = "OUI">
                        <input type="submit" class="btn btn-primary mt-2 mb-4" name="confirm" value = "NON">
                    </form>
                </div>
                
        <?php }?>

        </div>
    </div>
</div>

</body>
</html>