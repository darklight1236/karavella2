<?
require_once 'PHPMailer/PHPMailerAutoload.php';

$admin_email = array();
foreach ( $_POST["admin_email"] as $key => $value ) {
	array_push($admin_email, $value);
}

$form_subject = trim($_POST["form_subject"]);

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';



$c = true;

$message = "Спасибо что выбрали нас, в ближайшее время наш менеджер свяжется с вами! С Уважением к Вам и Вашему бизнесу, Специалист отдела продаж МФ КАРАВЕЛЛА Березина Виктория 8-987-943-80-48.";

// От кого
$mail->setFrom('info@' . $_SERVER['HTTP_HOST'], 'Каравелла');
 

// Кому
foreach ( $admin_email as $key => $value ) {
	$mail->addAddress($value);
}
// Тема письма
$mail->Subject = $form_subject;
 
// Тело письма
$body = $message;
// $mail->isHTML(true);  это если прям верстка
$mail->msgHTML($body);


$mail->send();

?>