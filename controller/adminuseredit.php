<?php

if (isset($_GET['adminuseredit']))
{
    echo $_GET['adminuseredit'];
    
    
    $id =  $_GET['adminuseredit'];


    $req = $bdd->query('SELECT * FROM users WHERE id='.$id);
    $user= $req->fetch();

    print_r($user);
?>
<div class="row justify-content-center">
    <div class="col-sm-9 col-sm-offset-6">

        <section>

            <h2 class="text-center mb-3 mt-3">Modifier le profile utilisateur : </h2>

                <form method="POST" action="index.php?admin" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" value="<?= $user['pseudo'];?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value = "<?= $user['email'];?>">
                    </div>

                    <input type="hidden" name="id" value= "<?= $id;?>" >

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary mb-3 mt-3" name="edit">Modifier</button>
                    </div>

                </form>

        </section>
    </div>
</div>

<?php
}
// Modification Utilisateur


?>