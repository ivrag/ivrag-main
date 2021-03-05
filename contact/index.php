<?php
    require '../assets/view/Header.php';
    require '../assets/view/Footer.php';
    $cd = basename($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Immobilien Von Rehetobel AG, IVRAG, ivr, IVR, Rehetobel, Von, Immobilien, rehetobel, immobilien, von, Wohnung 28, Ferienwohnung, 5.5 Zimmer Wohnung, 5.5 Zimmer Ferienwohnung, Ferienwohnung Eschenz, Wohnung 28 Eschenz, 5.5 Zimmer Ferienwohnung Eschenz, Ferien Eschenz, Wohnung Eschenz, Ferien Bodensee, Wohnung Bodensee, Bodensee Ferienwohnung, Wohnung Stein am Rhein, Ferienwohnung Stein am Rhein, wohnpark eschenz, eschenz, wohnpark, 8264 Eschenz, Ferienwohnung am Bodensee, Untersee und Rhein, Ferienwohnung Untersee, Ferienwohnung Rhein, Wohnung Untersee, Wohnung Rhein, 5.5 Zimmer Wohnung Rhein, 5.5 Zimmer Ferienwohnung Untersee, Unterkunft, Unterkunft Eschenz, Unterkunft Stein am Rhein, Unterkunft Bodensee, Unterkunft Untersee, Ferienwohnung 28, Wohnung-28, Wohnung_28, i-v-r-a-g, I-V-R, Immobilien_Von_Rehetobel_AG, Immobilien-Von-Rehetobel-AG, immobilien von rehetobel ag, immobilien von rehetobel AG, immobilien-von-rehetobel, immobilien-von-rehetobel-ag, Immobilienunternehmen, immobilienunternehmen, Immobilienfirma, immobilienfirma, Immobilien-Unternehmen, Immobilien-Firma, immobilien-Unternehmen, immobilien-Firma, Immobilien-unternehmen, Immobilien-firma, Eschenz, Stein am Rhein, 8264, 8260, Wagenhausen, Frauenfeld, Immobilienunternehmen in Eschenz, Immobilienunternehmen Thurgau, Immobilienunternehmen Frauenfeld">
    <meta name="description" content="Immobilien Von Rehetobel AG, Immobilienunternehmen, Immobilienfirma">
    <meta name="author" content="Immobilien Von Rehetobel AG">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="../lib/favicon/favicon.svg" sizes="any">

    <!-- Icons -->
    <link rel="stylesheet" href="../lib/icns/css/icons.css">

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Default -->
    <link rel="stylesheet" href="../assets/default/css/default.style.css">

    <link rel="stylesheet" href="./css/style.css">

    <title>Kontakt &bull; Immobilien Von Rehetobel AG</title>
</head>
<body>
    <?php new Header($cd) ?>

    <main class="container mt-5">
        <div class="mb-5">
            <h3>Kontakt</h3>
            <div class="card" style="width: 18rem;">
                <img src="../lib/logo/logo-gray.svg" class="card-img-top" alt="Immobilien Von Rehetobel AG Logo">
                <div class="card-body">
                    <div class="card-text">
                        <div><strong>Immobilien Von Rehetobel AG</strong></div>
                        <div>Hauptstrasse 52</div>
                        <div>8264 Eschenz</div>
                        <div class="mt-1"><a href="tel:0041765550015">+41 76 555 00 15</a></div>
                        <div class="mt-1"><a href="mailto:info@ivrag.ch">info@ivrag.ch</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h3>Kontaktformular</h3>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div>
                            <label for="customer-title">Anrede</label>
                            <select id="customer-title" class="form-control">
                                <option value="">Anrede</option>
                                <option value="Herr">Herr</option>
                                <option value="Frau">Frau</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <label for="customer-name">Name</label>
                            <input id="customer-name" type="text" class="form-control" placeholder="Name*">
                        </div>
                        <div class="mt-3">
                            <label for="customer-company">Firma</label>
                            <input id="customer-company" type="text" class="form-control" placeholder="Firma (optional)">
                        </div>
                        <div class="mt-3">
                            <label for="customer-address">Adresse</label>
                            <input id="customer-address" type="text" class="form-control" placeholder="Adresse">
                        </div>
                        <div class="mt-3">
                            <label for="customer-city">PLZ/Ort</label>
                            <input id="customer-city" type="text" class="form-control" placeholder="PLZ/Ort">
                        </div>
                        <div class="mt-3">
                            <label for="customer-email">E-Mail</label>
                            <input id="customer-email" type="text" class="form-control" placeholder="E-Mail*">
                        </div>
                        <div class="mt-3">
                            <label for="customer-phone">Telefon</label>
                            <input id="customer-phone" type="text" class="form-control" placeholder="Telefon*">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div>
                            <label for="customer-message">Mitteilung</label>
                            <textarea id="customer-message" class="form-control"></textarea>
                        </div>
                        <div class="mt-3 pl-4">
                            <input id="privacy-checkbox" type="checkbox" class="form-check-input">
                            <label for="privacy-checkbox" class="form-check-label">Ich habe die <a href="../privacy" target="_blank" rel="noopener noreferrer nofollow">Datenschutzerklärung</a> gelesen und akzeptiere sie hiermit.</label>
                        </div>
                        <div class="mt-3">
                            * Bitte füllen Sie die Pflichtfelder aus.
                            <button id="form-submit-button" type="submit" class="btn btn-primary btn-md float-right">Senden!</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <?php new Footer($cd) ?>

    <!-- JQuery -->
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>