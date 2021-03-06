<?php
    require '../assets/view/Header.php';
    require '../assets/view/Footer.php';
    require_once "../config.php";
    require_once ROOT."assets/php/autoload.php";
    $cd = basename($_SERVER['REQUEST_URI']);

    $db = new DataController($_MainDB);
    $id = NULL;
    foreach ($db->read() as $key => $val) {
        if ($val["name"] === "about") {
            $id = $val["id"];
            break;
        }
    }

    $getData = $db->selectId($id)["contents"];
    $raw = json_decode($getData, true);
    $data = $raw["blocks"];

    $raw_keywords = $db->selectId($id)["keywords"];
    $keywords = json_decode($raw_keywords, true);
    $keywordStr = "";
    for ($i = 0; $i < count($keywords); $i++) {
        if ($i != count($keywords) -1) {
            $keywordStr .= $keywords[$i]["value"] . ", ";
        } else {
            $keywordStr .= $keywords[$i]["value"];
        }
    }
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo $keywordStr ?>">
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

    <title>Über uns &bull; Immobilien Von Rehetobel AG</title>
</head>
<body class="d-flex flex-column min-vh-100">
    <?php new Header($cd) ?>

    <main class="container mt-5">
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
                } else if ($val["type"] == "list") {
                    if (count($val["data"]["items"]) > 50) {
                        $htmStr = '<div class="row">';
                        foreach ($val["data"]["items"] as $item) {
                            $htmStr .= '<div class="col-sm-3">' . $item["content"] . '</div>';
                        }
                        $htmStr .= "</div>";
                        echo $htmStr;
                    } else {
                        if ($val["data"]["style"] == "unordered") {
                            echo '<ul>';
                            foreach ($val["data"]["items"] as $item) {
                                echo "<li>" . $item["content"] . "</li>";
                            }
                            echo '</ul>';
                        } else {
                            echo '<ol>';
                            foreach ($val["data"]["items"] as $item) {
                                echo "<li>" . $item["content"] . "</li>";
                            }
                            echo '</ol>';
                        }
                    }
                }
            }
        ?>
    </main>

    <div class="mt-auto"><?php new Footer($cd) ?></div>

    <!-- JQuery -->
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" async></script>
</body>
</html>