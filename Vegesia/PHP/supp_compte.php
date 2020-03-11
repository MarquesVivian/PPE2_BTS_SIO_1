<?php
    session_start();
    require_once 'bdd.php';
    
    $pseudo = $_SESSION['pseudo'];
    $password = $_POST['password2'];
    $confpassword = $_POST['confpassword2'];
    
    if(isset($password) && isset($confpassword)){
        $ins=$bdd->prepare('SELECT * FROM inscrit WHERE pseudo = :pseudo');
        $ins->bindValue(':pseudo',$pseudo, PDO::PARAM_STR); //associer la valeur
        $ins->execute();
        $data=$ins->fetch();
        //Vérification du mot de passe
        if($data['password'] == $password){  
            if($password == $confpassword){
                $ins=$bdd->prepare('DELETE FROM inscrit WHERE pseudo = :pseudo');
                $ins->bindValue(':pseudo',$pseudo, PDO::PARAM_STR); //associer la valeur
                $ins->execute();
                
                session_unset();
                session_destroy();
    
                header('Location:../index.php');                
            }
            else{
                header('Location:../Profil.php');
            }
        }
        else{
            header('Location:../Profil.php');
        }
    }
    else{
        header('Location:../Profil.php');
    }
    exit();
?>

