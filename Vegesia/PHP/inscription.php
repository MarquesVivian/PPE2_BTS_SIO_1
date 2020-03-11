<?php
    
    require_once 'bdd.php';   
    
    if(!isset($_SESSION['pseudo']) && empty($_SESSION['pseudo'])){  //Vérifier que la personne n'est pas déjà connectée
        //Afficher le bouton d'inscription si elle ne l'ai pas
        echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#inscription">Inscription</button>';
        //Tant qu'il n'a pas inscrit de données alors les variables ne prennent pas de valeurs
        if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['confpassword']) && !empty($_POST['confpassword'])){
            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confpassword = $_POST['confpassword'];
        }
        //Vérifier qu'il à bien remplit les "inputs"
        if(isset($pseudo) && isset($email) && isset($password)){
            if($password == $confpassword){
                $abonnement = 'normal';
                $ins=$bdd->prepare('INSERT INTO inscrit(pseudo,email,password,abonnement) VALUES(:pseudo, :email, :password, :abonnement)');
                $ins->execute(array('pseudo'=>$pseudo,'email' =>$email, 'password'=>$password, 'abonnement'=>$abonnement));
				
                $_SESSION['pseudo'] = $pseudo;
            
            }
            else{
                $inscription = 'Votre confirmation de mot de passe et votre mot de passe ne sont pas identiques';
            }
        }
	//Vérifier s'il y a une action faite et en cas d'action l'afficher
        if(isset($inscription) && !empty($inscription)){
            echo $inscription;
        }
    }
?>