<?php $title = "Kontakt - Ceris udruženje"; include("head.php") ?>

<body id="kontakt">

<?php include("header.php") ?>

    <main class="contact">

        <div class="container">

            <h2>Pišite nam</h2>

            <!-- Poruka -->
            <div class="alert alert-success" style="display: none;">

                <strong>Poruka je uspešno prosleđena!</strong> Hvala na interesovanju
            </div>
            <!-- Forma -->
            <div class="row">
                <form action="_send-email.php" method="post" id="contact-form">
                    <div class="form-group col-sm-8 col-sm-offset-2">
                        <label for="SenderName">Ime</label>
                        <input type="text" name="SenderName" class="form-control" id="SenderName" required>
                    </div>
                    <div class="form-group col-sm-8 col-sm-offset-2">
                        <label for="SenderEmail">E-mail</label>
                        <input type="email" name="SenderEmail" class="form-control" id="SenderEmail" required>
                    </div>

                    <div class="form-group col-sm-8 col-sm-offset-2">
                        <label for="SenderMessage">Poruka</label>
                        <textarea name="SenderMessage" id="SenderMessage" class="form-control" required></textarea>
                    </div>
                    <div class="form-group col-sm-2 col-sm-offset-5">
                    <button class="btn btn-primary">Pošalji</button>
                    </div>
                </form>
            </div>



            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <img class="img-responsive center-block donacije" src="img/katarina/donacije.png" alt="donacije">
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-0 col-sm-6">
                    <article>
                        <h3>Posetite nas</h3>
                        <p>Branka Krsmanovića 3, Beograd</p>
                        <p>Telefon: 064/3026-799</p>
                        <p>Matični broj: 28191090<br>
                            PIB: 109330851<br>
                            Tekući račun: 205-228655-10</p>
                    </article>
                </div>
            </div>
        </div>
    </main>

<?php include("footer.php") ?>