<?php



  if(isset($_GET['rasm']) && isset($_GET['nomi']) && isset($_GET['kategory_id']) && isset($_GET['tafsiloti']) &&
      isset($_GET['miqdori']) && isset($_GET['narxi']) && $_GET['rasm']!="" && $_GET['nomi']!="" &&
      $_GET['kategory_id']!="" && $_GET['tafsiloti']!="" && $_GET['miqdori']!="" && $_GET['narxi']!="") {

      $db = new PDO("mysql:host=localhost; dbname=restoran", 'root', '');

      $rasm = $_GET['rasm'];
      $kategory_id = $_GET['kategory_id'];
      $nomi = $_GET['nomi'];
      $tafsiloti = $_GET['tafsiloti'];
      $miqdori = $_GET['miqdori'];
      $narxi = $_GET['narxi'];

      $sql = "INSERT INTO `Taomlar`(`rasm`,`kategoriya_id`,`t_nomi`,`tafsiloti`,`miqdori`,`narxi`) VALUES('$rasm','$kategory_id','$nomi','$tafsiloti','$miqdori','$narxi')";
      $query = $db->prepare($sql);
      $query->execute();
      header('Location:Taomlar.php');
      exit;
  }
      else{
        echo "xatolik";
    }





