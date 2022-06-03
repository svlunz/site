<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/PHPMailer.php";

    $mail = new PHPMailer(true);
	
    $mail->CharSet = "UTF-8";
    $mail->IsHTML(true);

    $name = $_POST["name"];
    $email = $_POST["email"];
	$phone = $_POST["phone"];
    $message = $_POST["message"];
	$email_template = "template_mail.html";

    $body = $name . ' '. $email . ' ' . $phone . ' ' . $message;
    $theme= "[Заявка с формы]";

    $mail->addAddress("nmolostvova17@mail.ru");
    $mail->Subject = $theme;
    $mail->body=$body;

    $mail->send();


?>