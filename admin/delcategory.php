<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $db=new PDO("mysql:host=localhost; dbname=restoran", 'root',  '');

    $query = $db->query('DELETE FROM kategoriya WHERE `id`='.$id);
    $query->execute();
    header('Location:kategoriya.php');
    exit;
}
else{
    header('Location:kategoriya.php');
    exit;
}

?>