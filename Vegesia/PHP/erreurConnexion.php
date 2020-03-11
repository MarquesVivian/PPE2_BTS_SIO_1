<?php
    //Verifier qu'il y a des erreurs de saisi pour la connexion et les afficher
    if(isset($_SESSION['connexion']) && !empty($_SESSION['connexion'])){        
        if($_SESSION['connexion'] == 1){
            echo'<div class="alert alert-success" role="alert">';
            echo 'Pseudo ou mot de passe incorrect';
            echo '</div>';
        }
        if(!isset($pseudo) && !isset($password) && empty($pseudo) && empty($password)){
            if($_SESSION['connexion'] == 2){
                echo'<div class="alert alert-success" role="alert">';
                echo 'Veuillez compléter toutes les cases';
                echo '</div>';
            }
        }        
    }
?>