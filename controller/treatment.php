<!-- Pour inscription !-->

<?php

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

    else if(isset($_POST['login']))
    {
        session_start();

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
            $_SESSION['id'] = $resultat['id'];

            echo "<h2 class='text-center'> Bonjour " .$_POST['pseudo']." ! </h2>";
        }

        else 
        {
            echo "<h2> Vous n'etes pas connectes </h2>";
        } 

    }
					
?>