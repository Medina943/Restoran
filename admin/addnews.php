<?php
if(isset($_GET['rasm']) && isset($_GET['yangliklar']) && isset($_GET['sana']) &&  $_GET['rasm']!="" && $_GET['yangliklar']!="" &&
    $_GET['sana']!="") {

    $db = new PDO("mysql:host=localhost; dbname=restoran", 'root', '');

    $rasm = $_GET['rasm'];
    $yangliklar = $_GET['yangliklar'];
    $sana = $_GET['sana'];

    $sql = "INSERT INTO `news`(`rasm`,`yangliklar`,`sana`) VALUES('$rasm','$yangliklar','$sana')";
    $query = $db->prepare($sql);
    $query->execute();
    header('Location:news.php');
    exit;
}
else{
    echo "xatolik";
}


