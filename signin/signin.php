<?php
session_start();
require_once '../connect/connect.php';

$login=$_POST['login'];
$password=md5($_POST['password']);

$checkuser=mysqli_query($connect,"SELECT * FROM `staff` WHERE `login` = '$login' AND `password`='$password'");
if (mysqli_num_rows($checkuser) > 0) {
    $user = mysqli_fetch_assoc($checkuser);

    $_SESSION['user'] = [
        "id_staff" => $user['id_staff'],
        "full_name" => $user['full_name'],
        "picture" => $user['picture'],
        "number" => $user['number']
    ];

    header('Location: ../staff_page.php');
}
else {
    $_SESSION['message']= 'Неверный логин или пароль';
    header('Location: ../index.php');
}
?>