<?php
    require '../assets/view/Header.php';
    require '../assets/view/Footer.php';
    require_once "../config.php";
    require_once ROOT."assets/php/autoload.php";
    $cd = basename($_SERVER['REQUEST_URI']);

    $db = new DataController($_MainDB);
    $id = NULL;
    foreach ($db->read() as $val) {
        if ($val["name"] === "contact") {
            $id = $val["id"];
            break;
        }
    }

    $getData = $db->selectId($id)["contents"];
    $raw = json_decode($getData, true);
    $data = $raw["blocks"];
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
    <link rel="stylesheet" href="../lib/icns/css/icons.min.css">

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway&display=swap">

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
                    <?php
                        foreach ($data as $val) {
                            if ($val["type"] == "image") {
                                echo '<div class="row mb-5">
                                        <div class="col-md-6 pt-2">
                                            <div class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img src="' . $val["data"]["file"]["url"] . '" class="d-block w-100" alt="Drohnenaufnahme">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pt-1">
                                            ' . $val["data"]["caption"] . '
                                        </div>
                                    </div>';
                            } else if($val["type"] == "header") {
                                if ($val["data"]["level"] == "1") {
                                    echo '<div class="mt-5">
                                        <h1>' . $val["data"]["text"] . '</h1>
                                    </div>';
                                } else if ($val["data"]["level"] == "2") {
                                    echo '<div class="mt-5">
                                        <h2>' . $val["data"]["text"] . '</h2>
                                    </div>';
                                } else if ($val["data"]["level"] == "3") {
                                    echo '<div class="mt-5">
                                        <h3>' . $val["data"]["text"] . '</h3>
                                    </div>';
                                } else if ($val["data"]["level"] == "4") {
                                    echo '<div class="mt-5">
                                        <h4>' . $val["data"]["text"] . '</h4>
                                    </div>';
                                } else if ($val["data"]["level"] == "5") {
                                    echo '<div class="mt-5">
                                        <h5>' . $val["data"]["text"] . '</h5>
                                    </div>';
                                }
                            } else if($val["type"] == "paragraph") {
                                echo '<p>' . $val["data"]["text"] . '</p>';
                            } else if ($val["type"] == "raw") {
                                echo $val["data"]["html"];
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h3>Kontaktformular</h3>
            <div id="contact-form-wrapper">
                <form id="contact-form">
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
                                <label for="customer-name">Name <span class="text-danger font-weight-bold">*</span></label>
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
                                <label for="customer-email">E-Mail <span class="text-danger font-weight-bold">*</span></label>
                                <input id="customer-email" type="text" class="form-control" placeholder="E-Mail*">
                                <div id="invalid-email-feedback" class="invalid-feedback"></div>
                            </div>
                            <div class="mt-3">
                                <label for="customer-phone">Telefon <span class="text-danger font-weight-bold">*</span></label>
                                <input id="customer-phone" type="text" class="form-control" placeholder="Telefon*">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div>
                                <label for="customer-message">Mitteilung <span class="text-danger font-weight-bold">*</span></label>
                                <textarea id="customer-message" class="form-control" placeholder="Ihre Mitteilung an uns ..."></textarea>
                            </div>
                            <div class="mt-3 pl-4">
                                <input id="privacy-checkbox" type="checkbox" class="form-check-input">
                                <label for="privacy-checkbox" class="form-check-label">Ich habe die <a href="../privacy" target="_blank" rel="noopener noreferrer nofollow">Datenschutzerklärung</a> gelesen und akzeptiere sie hiermit.</label>
                            </div>
                            <div class="mt-3">
                                * Bitte füllen Sie die Pflichtfelder aus
                                <button id="form-submit-button" type="submit" class="btn btn-primary btn-md float-right">Senden!</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="send-success">
                <p class="text-success"><strong>Vielen Dank für Ihre Kontaktaufnahme !</strong></p>
                <p>Das Formular hat uns erfolgreich erreicht.</p>
                <p>Wir werden so rasch als Möglich mit Ihnen in Kontakt treten.</p>
            </div>
            <div class="send-error">
                <p class="text-danger">Senden Fehlgeschlagen</p>
                <p>Leider konnte Ihr Formular aufgrund eines Fehlers nicht an uns gesandt werden.</p>
                <p>Bitte versuchen Sie es nach einer Weile erneut oder kontaktieren Sie uns telefonisch unter <a href="tel:0041765550015">+41 76 555 00 15</a> oder per E-Mail über <a href="mailto:info@ivrag.ch">info@ivrag.ch</a>.</p>
            </div>
        </div>
    </main>

    <?php new Footer($cd) ?>

    <!-- JQuery -->
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" async></script>
    <!-- xhr -->
    <script src="../assets/js/xhr/xhr.min.js"></script>

    <script type="text/javascript" src="./js/main.js"></script>
</body>
</html>