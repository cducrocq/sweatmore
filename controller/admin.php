<?php
// Je vais chercher les données dans le model
//require dirname(__DIR__).'/model/home.model.php';

// Je fais mes traitements
$message = "<h2 class='text-center'> Bonjour " .$user['pseudo']." ! </h2>";

// Je mets dans mon template
require dirname(__DIR__).'/templates/admin/admin.html.php';

if (isset($_POST['edit']))
{
    print_r($_POST);
    $req = $bdd->prepare('UPDATE users SET pseudo = :pseudo, email = :email WHERE id =:id');
    $req->execute(array(
        'pseudo' => $_POST['pseudo'],
        'email' => $_POST['email'],
        'id' => $_POST['id']
        ));

    header('Location:index.php?adminuser');
}
?>