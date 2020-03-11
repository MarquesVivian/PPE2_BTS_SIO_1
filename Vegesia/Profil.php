<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Profil</title>
        <meta charset="utf-8" />        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/Vegesia.svg" />
    </head>
    <body>
        <?php require_once 'PHP/bdd.php';?>
        <?php require_once 'PHP/header.php';?>  
        <?php require_once 'PHP/profil.php';?>
        
        <div class="container">
            <!--Partie profil-->
            <div class="row mt-3">
                <div class="col"></div>
                <div class="card border-success " style="width: 60rem;">
                    <div class="card-header text-light bg-success"><h4>Profil</h4></div>              
                    <form method='POST' action="PHP/modifier1.php">              
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Image de profil
                                <img src="images/Vegesia.png" class="img-thumbnail rounded-circle float-right" alt="...">
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Pseudo</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-plaintext" value="<?php echo $data['pseudo'];?>" name="pseudo">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Nom</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-plaintext" value="<?php echo $data['nom'];?>" name="nom">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Prenom</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control-plaintext" value="<?php echo $data['prenom'];?>" name="prenom">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Anniversaire</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control-plaintext" value="<?php echo $data['dateNaissance'];?>" name="date">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <a class="col-sm-2 col-form-label text-dark" data-toggle="collapse" href="#modifierMdp" role="button" aria-expanded="false" aria-controls="collapseExample">Mot de passe</a>
                                    <div class="col-sm-10">
                                        <input type="password" readonly class="form-control-plaintext" value="<?php echo $data['password'];?>" name="mdp">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="collapse" id="modifierMdp">
                            <div class="modal-body">                               
                                <div class="form-row">
                                    <input type="password" class="form-control" placeholder="Mot de passe actuel" name="mdp">
                                    <input type="password" class="form-control" placeholder="Nouveau mot de passe" name="newMdp">
                                    <input type="password" class="form-control" placeholder="Confirmer nouveau mot de passe" name="confMdp">
                                </div>
                            </div>
                        </div>
                    <div class="card-footer text-light bg-success">
                        <button href="PHP/modifier.php" type="submit" class="btn btn-outline-light my-2 my-sm-0" role="button" aria-pressed="true">Modifier</button>
                    </div>
                    </form>
                </div>
                
                <div class="col"></div>
            </div>
            
            <!--Partie Abonnement-->
            <div class="row mt-3 mb-3">
                <div class="col"></div>
                <div class="card border-success" style="width: 60rem;">
                    <div class="card-header text-light bg-success"><h4>Abonnement</h4></div>
                    <form>              
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <?php require_once 'PHP/premium.php';?>                                    
                                </div>                               
                            </li>
                        </ul>
                    </form>          
                </div>               
                <div class="col"></div>
            </div>
            
            <!--Partie Coordonnées-->
            <div class="row mt-3">
                <div class="col"></div>
                <div class="card border-success" style="width: 60rem;">
                    <div class="card-header text-light bg-success"><h4>Coordonnées</h4></div>              
                    <form method='POST' action="PHP/modifier2.php">              
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Adresse mail</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control-plaintext" value="<?php echo $data['email'];?>" name="email">
                                    </div>
                                </div>                               
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Téléphone</label>
                                    <div class="col-sm-10">
                                        <input type="tel" class="form-control-plaintext" value="<?php echo $data['tel'];?>" name="tel">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    <div class="card-footer text-light bg-success">
                        <button href="PHP/modifier.php" type="submit" class="btn btn-outline-light my-2 my-sm-0" role="button" aria-pressed="true">Modifier</button>
                    </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
            
            <!--Partie supprimer le compte-->
            <div class="row mt-3 mb-3">
                <div class="col"></div>
                <div class="card border-success" style="width: 60rem;">             
                    <form method='POST' action="PHP/supp_compte.php">              
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Supprimer le compte</label>                                    
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalSupprimer">Supprimer</button>
                                    </div>
                                </div>                               
                            </li>
                        </ul>
                    </form>          
                </div>
                
                <!--Fenêtre modal confirmation suppression compte-->
                <div class="modal fade" id="ModalSupprimer" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Confirmer que vous voulez supprimer votre compte</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method='POST' action="PHP/supp_compte.php">                               
                                    <div class="form-row">
                                        <input type="password" class="form-control" placeholder="Mot de passe" name="password2">
                                        <input type="password" class="form-control" placeholder="Confirmer mot de passe" name="confpassword2">
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-sucess">Confirmer</button>
                                    </div>                                    
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
        
        <!-- Chargement des javascript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    </body>
</html>