<?php
if( isset($_GET['nomi']) &&  $_GET['nomi']!="" ){

    $db=new PDO("mysql:host=localhost; dbname=restoran",'root','');

    $nomi=$_GET['nomi'];

    $sql ="INSERT INTO `kategoriya` (`k_nomi`) VALUES('$nomi')";
    $query = $db -> prepare($sql);
    $query->execute();
    header('Location:kategoriya.php');
    exit;
}
else{
    echo "xatolik";
}
?>