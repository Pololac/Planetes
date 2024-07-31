<?php

// --------------------------------
// Contrôleur des planètes
// --------------------------------

require_once 'model/PlanetManager.php';


if (!empty($_GET['action'])) {

    if ($_GET['action'] == "create") {
        
        if(!empty($_POST)) {    //Vérifie si le formulaire a été envoyé
            
            if(!empty($_POST['nom']) && !empty($_POST['imgUrl']) && !empty($_POST['categorie']) && ($_POST['diametre']) != "" && ($_POST['gravite']) != "" && !empty($_POST['lienNasa'])) {   // Vérifie si toutes les données du formulaires sont renseignées (pour les nombres, la condition est formulée différemment )

                try {
                    $planet = new Planet;   // Si tt renseigné, création d'un nouvel objet
                    $planet->hydrate($_POST['nom'], $_POST['imgUrl'], $_POST['categorie'], $_POST['diametre'], $_POST['gravite'], $_POST['lienNasa']);   // Hydratation de l'objet avec les données envoyées ds POST
                    PlanetManager::create($planet);     // Stocke l'objet dans la base de données
                    $success = "La planète a été ajoutée avec succès";     //Stocke un message de success

                } catch(Exception $error) {}  //Capture les exceptions et les stocke dans une variable

            } else {
                
                $error = new Exception ('Tous les champs sont obligatoires');
            }
        }
        
        require_once 'form/createPlanetForm.php';        //Il faut créer les variables $success & $error avant l'affichage du formulaire pour qu'il puisse les afficher 


    } elseif ($_GET['action'] == "update") {

        if(!empty($_GET['id'])) {

            $planet = PlanetManager::getOne($_GET['id']);

            if(!empty($_POST['nom']) && !empty($_POST['imgUrl']) && !empty($_POST['categorie']) && ($_POST['diametre']) != "" && ($_POST['gravite']) != "" && !empty($_POST['lienNasa'])) {   // Vérifie si toutes les données du formulaires sont renseignées (pour les nombres, la condition est formulée différemment )

                try {
                    
                    $planet->hydrate($_POST['nom'], $_POST['imgUrl'], $_POST['categorie'], $_POST['diametre'], $_POST['gravite'], $_POST['lienNasa']);   // Hydratation de l'objet avec les données envoyées ds POST
                    PlanetManager::update($planet);     // Stocke l'objet dans la base de données
                    $success = "La planète a été mise à jour avec succès";     //Stocke un message de success

                } catch(Exception $error) {}  //Capture les exceptions et les stocke dans une variable
                
            require_once 'form/updatePlanetForm.php';

            } else {
                
                $error = new Exception ('Tous les champs sont obligatoires');
            }

        } else {
        require_once 'view/404View.php';
        }

    } elseif ($_GET['action'] == "delete") {
        
        if(!empty($_GET['id'])) {
            
            try {
                $planet = PlanetManager::getOne($_GET['id']);

                if(!empty($_POST['confirm'])){
                    if(($_POST['confirm']) == 'OUI'){
                        try {
                            PlanetManager::delete($planet);
                            $success = "La planète a été supprimée avec succès";     //Stocke un message de success
                        } catch(Exception $error) {}  //Capture les exceptions et les stocke dans une variable
                        
                    } else {
                        header('Location:?page=planet&id=' .$planet->getId()); //Redirection vers la vue détaillée de la planète
                        exit;
                    }

                } require_once 'form/deletePlanetForm.php';

            } catch(Exception $error) {
                require_once 'view/404View.php';
            }

        } else {
            require_once 'view/404View.php';
        }
    } else {
        require_once 'view/404View.php';
    }

} elseif (!empty($_GET['view']) ){

    if ($_GET['view'] == "gaseous") {
        $planets = PlanetManager::getGaseous();
        require_once 'view/planetsGaseousView.php';

    } elseif ($_GET['view'] == "telluric") {
        $planets = PlanetManager::getTelluric();
        require_once 'view/planetsTelluricView.php';

    } else {
        $planets = PlanetManager::getAll();
        require_once 'view/planetsView.php';
    }

} elseif (!empty($_GET['id']) ){
  
    try {
        $planet = PlanetManager::getOne(intval($_GET['id'])) ;
        require_once 'view/planetView.php';

    } catch(Exception $e) {
        require_once 'view/404View.php';
    }

} elseif (!empty($_GET['searchName']) ){

    $planets = PlanetManager::searchByName($_GET['searchName']);
    require_once 'view/planetsView.php';

} else {
    $planets = PlanetManager::getAll();
    require_once 'view/planetsView.php';
}