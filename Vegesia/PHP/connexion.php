<?php
    session_start();    
    
    require_once 'bdd.php';
        
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];
    //Verifier toutes les données bien complétées et les récupérer    
    if(isset($pseudo) && isset($password) && !empty($pseudo) && !empty($password)){		
        $ins=$bdd->prepare('SELECT idInscrit, pseudo, password FROM inscrit WHERE pseudo = :pseudo');
        $ins->bindValue(':pseudo',$pseudo, PDO::PARAM_STR); //associer la valeur
        $ins->execute();
        $data=$ins->fetch();
        //Vérification du mot de passe
        if($data['password'] == $password){            
            $_SESSION['pseudo'] = $data['pseudo'];
            $_SESSION['idInscrit'] = $data['idInscrit'];
            header('Location:../index.php');		
        }
        else{
            $_SESSION['connexion'] = 1; //Mauvais mot de passe alors afficher message 1
            header('Location:../index.php');
        }
    }
    else{
        $_SESSION['connexion'] = 2; //Toutes les données ne sont pas rentrées donc afficher message 2
        header('Location:../index.php');
    }  
    
    exit();
?>

