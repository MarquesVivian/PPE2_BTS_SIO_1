<!--<nav class="navbar navbar-black bg-success">
    <a href="index.php" class="navbar-brand font-weight-bold text-light">
        <img src="images/Vegesia.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Vegesia
    </a>-->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a href="index.php" class="navbar-brand font-weight-bold text-light">
        <img src="images/Vegesia.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Vegesia
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <button type="button" class="btn btn-success">Produits de saison </button>
      </li>
      <li class="nav-item active">
        <button type="button" class="btn btn-success">Fruits </button>
      </li>
      <li class="nav-item active">
        <button type="button" class="btn btn-success">Légumes </button>
      </li>
      <li class="nav-item active">
        <button type="button" class="btn btn-success">Autres produits </button>
      </li>
      <li class="nav-item active">
        <?php require_once 'PHP/inscription.php'; ?>
      </li>
    </ul>   
            
            <?php
                if(!isset($_SESSION['pseudo']) && empty($_SESSION['pseudo'])){
                    echo'<form class="form-inline my-2 my-lg-0" method="POST" action="PHP/connexion.php">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Pseudo" name="pseudo">
                                <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-outline-light">Connexion</button>
                                </div>
                            </div>
                        </form>';
                }
                else {
                    echo '  <form class="form-inline my-2 my-lg-0">                        
                                <div class="input-group mb-3">
                                    <a class="navbar-brand text-white" href="Profil.php">Profil</a>
                                </div>
                                <div class="input-group mb-3">
                                    <a href="PHP/deconnexion.php" class="btn btn-outline-light my-2 my-sm-0" role="button" aria-pressed="true">Déconnexion</a>
                                </div>
                            </form>';
                }
            ?>
    </div>
        </nav>