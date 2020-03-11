<?php
    session_start();
    require_once 'bdd.php';
    
    $idInscrit = $_SESSION['idInscrit'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    
    $ins=$bdd->prepare('UPDATE inscrit SET email = :email, tel = :tel WHERE idInscrit = :idInscrit');
    $ins->execute(array('email'=>$email,'tel' =>$tel, 'idInscrit'=>$idInscrit));
    
    header('Location:../Profil.php');
    exit();
    
?>