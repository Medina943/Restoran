<?php
if( isset($_GET['rasmlar']) &&  $_GET['rasmlar']!="" ){

    $db=new PDO("mysql:host=localhost; dbname=restoran",'root','');

    $rasmlar=$_GET['rasmlar'];

    $sql ="INSERT INTO `porfoliya` (`rasmlar`) VALUES('$rasmlar')";
    $query = $db -> prepare($sql);
    $query->execute();
    header('Location:portfolio.php');
    exit;
}
else{
    echo "xatolik";
}
?>