<?php
require_once 'connection.php';


$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$org = $_POST['org'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['email_copy'];

$query = "INSERT INTO catalog VALUES (NULL, '$org', '$city', '$phone', '$email', NOW())";

$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result){
    $org = null;
    $city = null;
    $phone = null;
    $email = null;
}
mysqli_close($link);

if(!$result){
    $message = 'Ошибка отправки';
}else{
    $message = 'Отправленно на почту';
}

$response = ['message' => $message];
echo json_encode($response);


$email_double = array();
foreach ( $_POST["email_double"] as $key => $value ) {
	array_push($email_double, $value);
}

$form_subject = trim($_POST["form_subject"]);

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

// -------------------------------------------

$c = true;
$message = '';
foreach ( $_POST as $key => $value ) {
	if ( $value != ""  && $key != "email_double" && $key != "form_subject" ) {
		if (is_array($value)) {
			$val_text = '';
			foreach ($value as $val) {
				if ($val && $val != '') {
					$val_text .= ($val_text==''?'':', ').$val;
				}
			}
			$value = $val_text;
		}
		$message .= "
		" . ( ($c = !$c) ? '<tr>':'<tr>' ) . "
		<td style='padding: 10px; width: auto;'><b>$key:</b></td>
		<td style='padding: 10px;width: 100%;'>$value</td>
		</tr>
		";
	}
}
$message = "<table style='width: 50%;'>$message</table>";


// От кого
$mail->setFrom('adm@' . $_SERVER['HTTP_HOST'], 'Каравелла');
 

// Кому
foreach ( $email_double as $key => $value ) {
	$mail->addAddress($value);
}
// Тема письма
$mail->Subject = $form_subject;
 
// Тело письма
$body = $message;
// $mail->isHTML(true);  это если прям верстка
$mail->msgHTML($body);

// Приложения
if ($_FILES){
	foreach ( $_FILES['file']['tmp_name'] as $key => $value ) {
		$mail->addAttachment($value, $_FILES['file']['name'][$key]);
	}
}
$mail->send();


?>