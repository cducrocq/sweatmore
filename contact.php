<div class="container">
    <section class="mb-4">
        <h2 class="h1-responsive font-weight-bold text-center mt-3 my-4">Contacter nous</h2>
        <hr>

        <form id="contact-form" name="contact-form" action="index.php" method="POST">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="md-form mb-0">
                        <label for="name" class="">Nom</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>
                </div>

                <div class="col-sm-12 col-md-6">
                    <div class="md-form mb-0">
                        <label for="email" class="">Email</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-sm-12">
                    <div class="md-form">
                        <label for="message">Votre message</label>
                        <textarea type="text" id="message" name="message" rows="10" class="form-control md-textarea"></textarea>
                    </div>
                </div>
            </div>

            <div class="row  mt-3 text-center text-md-right">
                <div class="col-sm-12">
                    <a class="btn btn-primary">Envoyer</a>
                </div>
            </div>
        </form>

    </section>
</div>