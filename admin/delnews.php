<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $db=new PDO("mysql:host=localhost; dbname=restoran", 'root',  '');

    $query = $db->query('DELETE FROM news WHERE `id`='.$id);
    $query->execute();
    header('Location:news.php');
    exit;
}
else{
    header('Location:news.php');
    exit;
}

?>