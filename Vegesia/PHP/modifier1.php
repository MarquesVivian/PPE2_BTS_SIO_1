<?php
    session_start();
    require_once 'bdd.php';
    
    $idInscrit = $_SESSION['idInscrit'];
    $pseudo = $_POST['pseudo'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date = $_POST['date'];
    
    if(isset($_POST['mdp']) && !empty($_POST['mdp']) && isset($_POST['newMdp']) && !empty($_POST['newMdp']) && isset($_POST['confMdp']) && !empty($_POST['confMdp'])){
        $mdp = $_POST['mdp'];
        $newMdp = $_POST['newMdp'];
        $confMdp = $_POST['confMdp'];
        echo $mdp;
        echo $newMdp;
        echo $confMdp;
        
        $ins=$bdd->prepare('SELECT password FROM inscrit WHERE pseudo = :pseudo');
        $ins->bindValue(':pseudo',$pseudo, PDO::PARAM_STR); //associer la valeur
        $ins->execute();
        $data=$ins->fetch();
        $passwrd = $data['password'];
        echo $passwrd;
        
        if($mdp == $passwrd){
            $ins=$bdd->prepare('UPDATE inscrit SET password = :password WHERE idInscrit = :idInscrit');
            $ins->execute(array('password'=>$newMdp, 'idInscrit'=>$idInscrit));
        }
        else {            
            echo 'erreur';
            
        }
    }    
    
    $ins=$bdd->prepare('UPDATE inscrit SET pseudo = :pseudo, nom = :nom, prenom = :prenom, dateNaissance = :date WHERE idInscrit = :idInscrit');
    $ins->execute(array('pseudo'=>$pseudo,'nom' =>$nom, 'prenom'=>$prenom, 'date'=>$date, 'idInscrit'=>$idInscrit));
    
    $_SESSION['pseudo']=$pseudo;
    
    header('Location:../Profil.php');
    exit();
?>

