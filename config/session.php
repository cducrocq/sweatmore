<?php
// SESSION START
session_start();

// CHERCHER USER ID 
if (isset($_SESSION['user_id'])){

    $requete=$bdd->prepare("SELECT * FROM users WHERE id=:id");
    $requete->execute(array(
    'id' => $_SESSION['user_id']
    ));
    $user = $requete->fetch();

    // print_r($user);

    // echo $user['pseudo'];
}

?>