<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlentities($_POST['title']);
    $name = htmlentities($_POST['name']);                                               // *
    $company = htmlentities($_POST['company']);
    $address = htmlentities($_POST['address']);
    $city = htmlentities($_POST['city']);
    $email = htmlentities($_POST['email']);                                             // *
    $phone = htmlentities($_POST['phone']);                                             // *
    $message = htmlentities($_POST['message']);                                         // *
    $privacy = filter_var(htmlentities($_POST['privacy']), FILTER_VALIDATE_BOOLEAN);    // *

    $rsp = [];

    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($privacy) {
                require '../../vendor/autoload.php';

                $emailBody =    '<!DOCTYPE html>'.
                                '<html lang="de">'.
                                '<head>'.
                                '<meta charset="UTF-8">'.
                                '<title>Internetanfrage Immobilien Von Rehetobel AG</title>'.
                                '<style>body {font-family: Arial, Helvetica, sans-serif;}table {border-collapse: collapse; width: 450px;}td {border: 1px solid #dddddd;text-align: left;padding: 8px;}</style>'.
                                '</head>'.
                                '<body>'.
                                '<p>Sehr geehrtes IVRAG - Team</p>'.
                                '<p>Soeben hat jemand über das Internetformular eine Kontaktaufnahme geschickt!</p>'.
                                '<h2>Hier die Angaben</h2>'.
                                '<table>'.
                                '<tr><td>Anrede</td><td>' . $title . '</td></tr>'.
                                '<tr><td>Name</td><td>' . $name . '</td></tr>'.
                                '<tr><td>Firma</td><td>' . $company . '</td></tr>'.
                                '<tr><td>Adresse</td><td>' . $address . '</td></tr>'.
                                '<tr><td>PLZ/Ort</td><td>' . $city . '</td></tr>'.
                                '<tr><td>E-Mail</td><td>' . $email . '</td></tr>'.
                                '<tr><td>Telefon</td><td>' . $phone . '</td></tr>'.
                                '<tr><td>Nachricht</td><td>' . $message . '</td></tr>'.
                                '</table>'.
                                '</body>'.
                                '</html>';

                try {
                    $dotenv = Dotenv\Dotenv::createImmutable('../../');
                    $dotenv->load();

                    $mail = new PHPMailer(true);
                    //Server settings
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp-mail.outlook.com';                //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = $_ENV['MAIL_USERNAME'];                 //SMTP username
                    $mail->Password   = $_ENV['MAIL_PASSWORD'];                  //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    $mail->setFrom($_ENV['SEND_EMAIL'], $_ENV['SEND_EMAIL_NAME']);
                    $mail->addAddress($_ENV['MAIL_RECIPIENT']);                 //Add a recipient
                    $mail->addReplyTo($email);

                    //Content
                    $mail->isHTML(true);                                        //Set email format to HTML
                    $mail->CharSet = 'UTF-8';
                    $mail->Subject = 'Internetanfrage - ' . $name;
                    $mail->Body    = $emailBody;
                    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                    if ($mail->send()) {
                        $rsp['status'] = true;
                    } else {
                        $rsp['status'] = false;
                        $rsp['error'] = 'emailInternal';
                    }

                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            } else {
                $rsp['status'] = false;
                $rsp['error'] = 'privacy';
            }
        } else {
            $rsp['status'] = false;
            $rsp['error'] = 'email';
        }
    } else {
        $rsp['status'] = false;
        $rsp['error'] = 'empty';
        $rsp['fields'] = [];
        if (empty($name)) {
            array_push($rsp['fields'], 'name');
        }
        if (empty($email)) {
            array_push($rsp['fields'], 'email');
        }
        if (empty($phone)) {
            array_push($rsp['fields'], 'phone');
        }
        if (empty($message)) {
            array_push($rsp['fields'], 'message');
        }
    }

    echo json_encode($rsp);
}