<?php 

// --------------------------------
// Routeur
// --------------------------------

if (!empty($_GET['page'])) {       // Envoie vers les différents controleurs en fonction de l'info "page"

    if ($_GET['page'] == 'planet'){
        require_once('controller/planetController.php');

    } else { 
        require_once('view/404View.php');
    }

} else {
    require_once('view/homeView.php');
}

