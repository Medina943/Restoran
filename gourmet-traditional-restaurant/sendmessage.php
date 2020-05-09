<?php


if($_GET) {
    $db = new PDO("mysql:host=localhost; dbname=restoran", 'root', '');

    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $message = $_GET['message'];
    $dtime = $_GET['dtime'];

    $sql = "INSERT INTO `messages`(`name`,`email`,`phone`,`message`, `dtime`) VALUES('$name','$email','$phone','$message', '$dtime')";
    $query = $db->prepare($sql);
    $query->execute();
    header('Location:contacts.php');
    exit;
}
else{
    echo "xatolik";
}

