<?php
    require '../assets/view/Header.php';
    require '../assets/view/Footer.php';
    $cd = basename($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <title>404 &bull; Immobilien Von Rehetobel AG</title>
</head>
<body class="d-flex flex-column min-vh-100"> <!-- provide class to push the footer to the bottom -->
    <div class="container mt-5">
        <h1>404 Seite nicht gefunden</h1>
        <h3>Leider konnte die angefragte Seite nicht gefunden werden.</h3>
        <div class="mt-5">
            <p><a href="../"><i class="era-home1"></i> Nach Hause</a></p>
        </div>
    </div>

    <div class="mt-auto"><?php new Footer($cd) ?></div> <!-- wrap footer into div so it can be placed at the bottom -->

    <!-- JQuery -->
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>