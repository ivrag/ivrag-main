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

    <title>Impressum &bull; Immobilien Von Rehetobel AG</title>
</head>
<body class="d-flex flex-column min-vh-100"> <!-- provide class to push the footer to the bottom -->
    <?php new Header($cd) ?>

    <main class="container mt-5">
        <div class="mb-5">
            <h2>Impressum</h2>
        </div>

        <div class="row mb-5">
            <div class="col-sm-6 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Anschrift</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Immobilien Von Rehetobel AG</h6>
                        <div class="card-text">
                            <div>Hauptstrasse 52</div>
                            <div>8264 Eschenz</div>
                            <div><a href="mailto:info@ivrag.ch">info@ivrag.ch</a></div>
                            <div><a href="tel:0041525550015">+41 52 555 00 15</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Domizil</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Immobilien Von Rehetobel AG</h6>
                        <div class="card-text">
                            <div>Bälisteigstrasse 2</div>
                            <div>8264 Eschenz</div>
                            <div><a href="mailto:info@ivrag.ch">info@ivrag.ch</a></div>
                            <div><a href="tel:0041525550015">+41 52 555 00 15</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="mt-auto"><?php new Footer($cd) ?></div> <!-- wrap footer into div so it can be placed at the bottom -->

    <!-- JQuery -->
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>