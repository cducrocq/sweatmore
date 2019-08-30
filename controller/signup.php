<?php
// Je vais chercher les données dans le model
require dirname(__DIR__).'/model/signup.model.php';

// Je fais mes traitements

if (isset($_POST['sign']))
{

    $requete=$bdd->prepare("INSERT INTO users(pseudo, email, pass, class) VALUES (:pseudo, :email, :pass, :class)");
    $requete->execute(array(
        'pseudo' => $_POST['pseudo'],
        'email' => $_POST['email'],
        'pass' => $_POST['pass'],
        'class' =>'user'
    ));	

    echo "<h2 class='text-center'> Votre inscription a bien été prise en compte! </h2>";
    
}

// Je mets dans mon template
require dirname(__DIR__).'/templates/admin/signup.html.php';
?>