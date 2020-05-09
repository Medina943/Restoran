<?php
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];

		$db=new PDO("mysql:host=localhost; dbname=restoran", 'root',  '');
		
		$query = $db->query('DELETE FROM Taomlar WHERE `id`='.$id);
   		$query->execute();	
		   header('Location:Taomlar.php');
		   exit; 
	}
	else{
			header('Location:Taomlar.php');
		   	exit;		
	}

?>