<?php 
    //Deconnexion totale (vider toutes les variables)
    session_start(); 
    session_unset();
    session_destroy();
    
    header('Location:../index.php');
    exit();

?>