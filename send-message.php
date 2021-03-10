<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "alessandrobelotti.work@gmail.com";
    $subject = "Nuovo messaggio dal form belottidigital.com";

    $sender_name = $_POST["name"];
    $sender_email = $_POST["email"];
    $message = "<strong>Numero di telefono: </strong><p>" . $_POST["phone Number"] . "</p>\n<strong>Serivizi: </strong><p>" . $_POST["service"] . "</p>\n<strong>Obiettivi: </strong>" . $_POST["goals"] . "</p>";

    $headers = "From: " . $sender_name . " <" . $sender_email . ">\r\n";
    $headers = "Content-type: text/html\r\n";

    mail($to, $subject, $message, $headers);
}