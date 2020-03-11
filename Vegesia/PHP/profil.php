<?php
    $pseudo = $_SESSION['pseudo'];
    
    $ins=$bdd->prepare('SELECT * FROM inscrit WHERE pseudo = :pseudo');
    $ins->bindValue(':pseudo',$pseudo, PDO::PARAM_STR); //associer la valeur
    $ins->execute();
    $data=$ins->fetch();
?>

