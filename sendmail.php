<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('ru', 'phpmailer/language/');
    $mail=>IsHTML(true);

    $mail->setForm('karavella@karavella.online', 'Каравелла');
    $mail->addAddress('newhub1236@yandex.ru');
    $mail->Subject = 'Привет! Это тестовое сообщение';

    $body = '<h1>TITLE</h1>';




    
    $mail->Body = $body;
    if(!$mail->send()){
        $message = 'Ошибка отправки';
    }else{
        $message = 'Отправленно на почту';
    }

    $response = ['message' => $message];
    header('Content-Type: application/json');
    echo json_encode($response);

?>