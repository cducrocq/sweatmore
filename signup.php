<div class="col-md-9">
    <section>

        <h2>S'inscrire</h2>

        <form method="POST" action="admin.php" enctype="multipart/form-data">

            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Insérez votre pseudo">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Insérez votre email">
            </div>

            <div class="form-group">
                <label for="pass">mot de passe</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Renseignez votre mot de passe">
            </div>

            <div class="form-group">
                <label for="pass_confirm">Confirmez votre mot de passe</label>
                <input type='password' class="form-control" id="pass_confirm" name="pass_confirm" placeholder="Confirmez votre mot de passe">
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary" name="signup">Inscription</button>
            </div>

        </form>

    </section>	
</div>