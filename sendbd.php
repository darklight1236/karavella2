<?php
require_once 'connection.php';


$link = mysqli_connect($host, $user, $password, $database)
or die("Ошибка " . mysqli_error($link));

$org = $_POST['org'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['admin_email'];

$query = "INSERT INTO catalog VALUES (NULL, '$org', '$city', '$phone', '$email')";

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

?>