<?php

$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userPhone = $_POST['userPhone'];


//Load Composer's autoloader
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php'; 
require 'phpmailer/Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'leshtesting11@gmail.com';                     // (Адрес Отпраляющего)
    $mail->Password   = 'passwordwhichisknown';                        // (пароль Отпраляющего)
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('leshtesting11@gmail.com', 'Алексей'); // (Адрес Отпраляющего)
    $mail->addAddress('aleksei.03@mail.ru');     //Add a recipient (Адрес заказчика)

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Это новая заявка сайта';
    $mail->Body    = "Имя пользователя ${userName}, его телефон: ${userPhone}, его почта: ${userEmail}";

    if($mail->send()) {
        header('Location: index.html');
    } else {
        echo "Письмо не отправлено, есть ошибка. Код ошибка: {$mail->ErrorInfo}";
    }

} catch (Exception $e) {
    echo "Письмо не отправлено, есть ошибка. Код ошибка: {$mail->ErrorInfo}";
}