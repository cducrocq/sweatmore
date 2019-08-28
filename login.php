<?php
    
?>

<div class="col-md-9">
    <section>

        <h2>Se connecter</h2>

        <form method="POST" action="admin.php" enctype="multipart/form-data">

            <div class="form-group">
                <label for="pseudoregi">Pseudo</label>
                <input type="text" class="form-control" id="pseudoregi" name="pseudoregi" placeholder="Insérez votre pseudo">
            </div>

            <div class="form-group">
                <label for="pass">password</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Renseignez votre mot de passe">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary" name="login">Connexion</button>
            </div>

        </form>


    </section>	
</div>