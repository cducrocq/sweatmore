<?php
// Je vais chercher les données dans le model
// require dirname(__DIR__).'/model/login.model.php';

// Je fais mes traitements
if (isset($_POST['login'])){

    if (empty($_POST['pseudo']) || empty($_POST['pass'])) 
    {
        echo 'Le pseudo et le mot de passe ne sont pas inscrits';
    }

    $requete=$bdd->prepare("SELECT * FROM users WHERE pseudo= :pseudo");
    $requete->execute(array(
        'pseudo' => $_POST['pseudo']
    ));
    $resultat = $requete->fetch();

    if($resultat['pass'] == $_POST['pass'])
    {
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['user_id'] = $resultat['id'];

        header('Location: index.php?admin');
    }
    else 
    {
        $_SESSION['message'] = "Erreur login";
    }
}
elseif (isset($_GET['login']))
{
    // Je mets dans mon template
    require dirname(__DIR__).'/templates/admin/login.html.php';
}


