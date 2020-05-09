<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $db=new PDO("mysql:host=localhost; dbname=restoran", 'root',  '');

    $query = $db->query('DELETE FROM porfoliya WHERE `id`='.$id);
    $query->execute();
    header('Location:portfolio.php');
    exit;
}
else{
    header('Location:portfolio.php');
    exit;
}

?>