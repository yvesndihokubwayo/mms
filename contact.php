<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yvesnickylirf@gmail.com';
    $mail->Password = 'pekynegozzlhxkex';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('yvesnickylirf@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = "Name: " . $_POST["name"] . "<br>Message: " . $_POST["message"];

    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->Debugoutput = function ($str, $level) {
        echo "Debug level $level; message: $str\n";
    };

    if ($mail->send()) {
        echo "
        <script>
        alert('Your email has been sent. Thank you!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Error: Unable to send email. Please try again later.');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>
