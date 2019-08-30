<?php

// Liste des articles

if(isset($_GET['adminarticles']))
{?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-9 col-sm-offset-6">
        		<section>

                    <h2 class="text-center mb-3 mt-3">Liste des articles</h2>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">taille</th>
                                <th scope="col">Couleur</th>
                                <th scope="col">Images</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Description</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            
            <?php
            $reponse = $bdd->query('SELECT * FROM articles');

            while ( $user = $reponse->fetch ()) {

            echo '<tr>';

            echo '<th class="align-middle">' .$user['name'] .'</th>';
            echo '<th class="align-middle">' .$user['taille'] .'</th>';
            echo '<td class="align-middle">' .$user['couleur'] .'</td>';
            echo '<td class="align-middle">' .$user['images'] .'</td>';
            echo '<td class="align-middle">' .$user['genre'] .'</td>';
            echo '<td class="align-middle">' .$user['description'] .'</td>';
            echo '<td class="align-middle"><a href="index.php?editarticles=' . $user['id'] . '">Modifier</a></td>';
            echo '<td class="align-middle"><a href="index.php?delarticles=' .$user['id'] . '">Supprimer</a></td>';
            
            echo '</tr>';

}

$reponse -> closeCursor();


?>                 
                        </tbody>
                    </table>
    

                </section>	
        </div>
    </div>
</div>
<?php
}

?>