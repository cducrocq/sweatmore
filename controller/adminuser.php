<?php

//listes des utilisateurs

if(isset($_GET['adminuser']))
{?>
     <div class="row justify-content-center">
        <div class="col-sm-9 col-sm-offset-6">
        		<section>

                    <h2 class="text-center mb-3 mt-3">Liste d'utilisateurs</h2>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pseudo</th>
                                <th scope="col">email</th>
                                <th scope="col">Modifier</th>
                                <th scope="col">Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            
            <?php
            $reponse = $bdd->query('SELECT * FROM users');

            while ( $user = $reponse->fetch ()) {

            echo '<tr>';

            echo '<th class="align-middle">' .$user['id'] .'</th>';
            echo '<th class="align-middle">' .$user['pseudo'] .'</th>';
            echo '<td class="align-middle">' .$user['email'] .'</td>';
            echo '<td class="align-middle"><a href="index.php?adminuseredit=' . $user['id'] . '">Modifier</a></td>';
            echo '<td class="align-middle"><a href="index.php?adminuserdel=' .$user['id'] . '">Supprimer</a></td>';
            
            echo '</tr>';

}

$reponse -> closeCursor();


?>                 
                </tbody>
            </table>
    

        </section>	
    </div>
</div>
<?php
}

