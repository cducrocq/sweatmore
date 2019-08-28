<!-- Pour inscription !-->

<?php

    if (isset($_POST['sign']))
    {
    
        $requete=$bdd->prepare("INSERT INTO sweatmore(pseudo, email, pass) VALUES (:pseudo, :email, :pass)");
        $requete->execute(array(
            'pseudo' => $_POST['pseudo'],
            'email' => $_POST['email'],
            'pass' => $_POST['pass']
        ));	

        echo "<h2> Vous êtes bien inscrits </h2>";
        
    }	

    else if(isset($_POST['login']))
    {
        session_start();

        if (empty($_POST['pseudo']) || empty($_POST['pass'])) 
        {
            echo 'Le pseudo et le mot de passe ne sont pas inscrits';
        }

        $requete=$bdd->prepare("SELECT * FROM sweatmore WHERE pseudo= :pseudo");
        $requete->execute(array(
            'pseudo' => $_POST['pseudo']
        ));
        $resultat = $requete->fetch();

        if($resultat['pass'] == $_POST['pass'])
        {
            $_SESSION['pseudo'] = $_POST['pseudo'];
            $_SESSION['id'] = $resultat['id'];

            echo "Bonjour" .$_POST['pseudo'];
        }

        else 
        {
            echo "<h2> Vous n'etes pas connectes </h2>";
        } 

    }
					
?>