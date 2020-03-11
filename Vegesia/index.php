<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Vegesia</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/png" href="images/Vegesia.svg" />
</head>
<body>
    <?php require_once 'PHP/header.php';?>  
        
        <?php require_once 'PHP/erreurConnexion.php';?>               

        <!-- Fenêtre inscription-->
        <div class="modal fade" id="inscription" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title">Inscription</h1>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='POST' action="index.php">                               
                            <div class="form-row">    <!--Type-->
                                <div class="form-group col-sm-12">
                                    <label for="inputState">Type</label>
                                    <input type="text" class="form-control" placeholder="Pseudo" name="pseudo">
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                    <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                                    <input type="password" class="form-control" placeholder="Confirmer mot de passe" name="confpassword">
                                    <br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-sucess">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            
        
    
        <div class="container">
            <div class="legume card mt-3">
                <div class="text-center col-12">
                    <h3><a href="Accueil.php">Nouvelles recettes</a></h3>
                </div>
                <div class="row mr-lg-3 p-2 col">
                    <div class="row ml-lg-3">
                        <div class="col-lg-3">
                            <div class="card bg-success" style="width: 16rem;">
                                <img class="card-img-top" src="Img/Salade.jpg" alt="SALADE">                                   
                            </div>
                        </div>
                    </div>
                    <div class="row  ml-lg-3 col">
                        <p>Metuentes igitur idem latrones Lycaoniam magna parte campestrem cum se inpares 
                            nostris fore congressione stataria documentis frequentibus scirent, tramitibus 
                            deviis petivere Pamphyliam diu quidem intactam sed timore populationum et caedium, 
                            milite per omnia diffuso propinqua, magnis undique praesidiis conmunitam.
                        Metuentes igitur idem latrones Lycaoniam magna parte campestrem cum se inpares 
                            nostris fore congressione stataria documentis frequentibus scirent, tramitibus 
                            deviis petivere Pamphyliam diu quidem intactam sed timore populationum et caedium, 
                            milite per omnia diffuso propinqua, magnis undique praesidiis conmunitam.</p>
                    </div>                            
                </div>
            </div>
            <div class="legume card mt-3">
                <div class="row mt-lg-3">
                    <div class="text-center col-12">
                        <h3><a href="Accueil.php">Légumes</a></h3>
                    </div>
                    <div class="row mr-lg-3 p-2">
                        <div class="row ml-lg-3">
                            <div class="col-lg-3">
                                <div class="card bg-success" style="width: 16rem;">
                                    <img class="card-img-top" src="Img/Brocolis.jpg" alt="BROCOLIS">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Brocolis</h5>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card bg-success" style="width: 16rem;">
                                    <img class="card-img-top" src="Img/Carottes.jpg" alt="CAROTTES">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Carottes</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card bg-success" style="width: 16rem;">
                                    <img class="card-img-top" src="Img/Courgettes.jpg" alt="COURGETTES">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Courgettes</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card bg-success" style="width: 16rem;">
                                    <img class="card-img-top" src="Img/Haricot_Vert.png" alt="HARICOTS">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Haricots verts</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Fruit card mt-3 p-2">
                <div class="row mt-lg-3">
                    <div class="text-center col-12">
                        <h4><a href="/Pages/BoutiqueFruit">Fruits</a></h4>
                    </div>
                    <div class="row mr-lg-3">
                        <div class="row ml-lg-3">
                            <div class="col-lg-3">
                                <div class="card bg-success" style="width: 16rem;">
                                    <img class="card-img-top" src="Img/Tomates_Cerise_BIO.jpg" alt="BROCOLIS">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Tomates cerises</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card bg-success" style="width: 16rem;">
                                    <img class="card-img-top" src="Img/Tomates_Cerise_BIO.jpg" alt="BROCOLIS">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Tomates cerises</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card bg-success" style="width: 16rem;">
                                    <img class="card-img-top" src="Img/Tomates_Cerise_BIO.jpg" alt="BROCOLIS">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Tomates cerises</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card bg-success" style="width: 16rem;">
                                    <img class="card-img-top" src="Img/Tomates_Cerise_BIO.jpg" alt="BROCOLIS">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Tomates cerises</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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