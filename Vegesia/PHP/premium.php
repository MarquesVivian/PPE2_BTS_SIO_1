<?php
    $pseudo = $_SESSION['pseudo'];
    
    $inst=$bdd->prepare('SELECT abonnement FROM inscrit WHERE pseudo = :pseudo');
    $inst->bindValue(':pseudo',$pseudo, PDO::PARAM_STR); //associer la valeur
    $inst->execute();
    $data2=$inst->fetch();
    
    $abonnement = $data2['abonnement'];
    
    if($abonnement == 'normal'){
        echo '  <label for="staticEmail" class="col-sm-2 col-form-label">Membre Premium</label>
                <div class="col-sm-10">
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ModalPremium">Devenir Premium</button>
                </div>

                <!--Fenêtre modal "devenir premium"-->
                <div class="modal fade" id="ModalPremium" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Devenir membre premium</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="Profil.php">                               
                                    <div class="form-row">
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-sucess">Confirmer</button>
                                    </div>                                    
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>';
    }
    elseif ($abonnement == 'premium') {
        echo '<label for="staticEmail" class="col-sm-5 col-form-label">Vous êtes déjà un membre premium</label>';    
    }
    
    
?>

