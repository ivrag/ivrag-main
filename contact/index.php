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

    <title>Home &bull; Immobilien Von Rehetobel AG</title>
</head>
<body>
    <?php new Header($cd) ?>

    <main class="container mt-5">
        <div class="mb-5">
            <h2>Kontakt</h2>
            <h5>Möblierte Ferienwohnungen für Freizeit und Business</h5>
        </div>
        <div class="row">
            <div class="col-md-6 pt-2">
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="https://www.wohnung28.ch/src/images/drone/md/drone_1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.wohnung28.ch/src/images/flat/md/flat_16.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="https://www.wohnung28.ch/src/images/drone/md/drone_1.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 pt-1">
                <p>Die Wohnung 28 ist ein Projekt der Firma Immobilien Von Rehetobel AG welches von einem jungen Team betrieben wird. Das Konzept hinter dem Projekt ist es Möblierte Wohnungen für Familien und Geschäftsreisende zur Verfügung zu stellen.</p>
                <p>Durch die modernen und stylischen Einrichtungen unserer Wohnungen wird eine angenehme Atmosphäre geschafft. Alle Einrichtungen wurden mit viel Liebe zum Detail designt. Neben den Einrichtungen gibt es verschiedene Raumaccessoires, die Ihren Aufenthalt noch angenehmer gestalten.</p>
                <p>Mit dem Projekt Wohnung 28 möchten wir unseren Kunden einen unvergesslichen Aufenthalt bieten, den Sie nie wieder vergessen werden.</p>
                <p>Die staunenden Blicke und positive Rückmeldungen unserer Gäste motivieren uns, aus diesem Projekt etwas einzigartiges zu erschaffen.</p>
            </div>
        </div>

        <div class="mt-5 mb-3">
            <h2>Frisch eingerichtete Wohnung</h2>
            <h5>4.5 Zimmer Wohnung mit neuwertiger Möblierung</h5>
        </div>
        <div class="row">
            <div class="col-md-6 pt-1">
                <p>Gerne präsentieren wir Ihnen die neu eingerichtete 4.5 Zimmer Ferienwohnung, die in einem klassisch modernen Stil eingerichtet wurde und nun bereit ist Gäste zu empfangen.</p>
            </div>
            <div class="col-md-6 pt-2">
                <img src="../lib/images/placeholder/placeholder.svg" class="d-block w-100" alt="...">
            </div>
        </div>
    </main>

    <?php new Footer($cd) ?>

    <!-- JQuery -->
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>