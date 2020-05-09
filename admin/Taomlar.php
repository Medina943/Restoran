<?php

$db=new PDO("mysql:host=localhost; dbname=restoran", 'root', '');
$Taomlar = $db->query("SELECT t.*, k.k_nomi  FROM Taomlar t LEFT JOIN kategoriya k ON t.kategoriya_id=k.id ")->fetchAll();

$query2 = $db->query('SELECT id,k_nomi FROM kategoriya');
$r = $query2->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

</head>
<body>
<h3 align="center">TAOMLAR</h3>
<div class="container">
    <div class="row">
        <div class="col-sm-12" >
<p class="text-right">
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addForm">Qo'shish</button>
</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Bosh sahifa</a></li>
                        <li><a href="kategoriya.php">Kategoriya</a></li>
                        <li class="active"><a href="Taomlar.php">Taomlar</a></li>
                        <li><a href="portfolio.php">Portfoliya</a></li>
                        <li><a href="messages.php">xabarlar</a></li>
                        <li><a href="news.php">Yangliklar</a></li>
                    </ul
                    <ul class="nav navbar-nav navbar-right">
                        <form class="navbar-form navbar-left">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
</div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12" >
                    <table class="table table-bordered" id="mainTable">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Rasm</th>
                            <th>Kategoriya</th>
                            <th>Nomi</th>
                            <th>Tafsiloti</th>
                            <th>Miqdori</th>
                            <th>Narxi</th>
                            <th>Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($Taomlar as $taom): ?>
                            <tr>
                                <td><?php echo $taom["id"]?></td>
                                <td><?php echo $taom["rasm"]?></td>
                                <td><?php echo $taom["k_nomi"]?></td>
                                <td><?php echo $taom["t_nomi"]?></td>
                                <td><?php echo $taom["tafsiloti"]?></td>
                                <td><?php echo $taom["miqdori"]?></td>
                                <td><?php echo $taom["narxi"]?></td>
                                <td>
                                    <a href="editfood.php?id=<?=$taom['id']?>" class="btn btn-primary">Yangilash</a>
                                    <a href="delTaom.php?id=<?=$taom['id']?>" class="btn btn-danger" onclick="del()" >O'chirish</a>

                                </td>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


                <!-- Modal -->
                <div id="addForm" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->


                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Yangi taom qo'shish</h4>
                            </div>
                            <div class="modal-body">

                                <div class="form">
                                    <form action="new_food.php" method="get" enctype="multipart/form-data">
                                        <label>Rasm </label>
                                        <br>
                                        <input type="file" name="rasm" class="form-control" placeholder="rsamni tanlang">
                                        <br><label>Kategoriya</label>
                                        <br>
                                        <!-- <input name="kategory_id"  placeholder="kategoriyani tanlang"> -->
                                            <!-- <option value=""></option> -->

                                             <select name="kategory_id" class="form-control" id="select1"> 
						                      <?php foreach($r as $array):?>
						                        <option value="<?=$array['id']?>">
						                          <?=$array['k_nomi']?>
						                        </option>
						                      <!-- type="text" id="inputPassword" class="form-control" placeholder="Password" required="required"> -->
						                   <!--  <label for="select1">Categoriya</label> -->
						                      <?php endforeach;?>
                    						</select>

                                        <br>
                                        <label>Nomi </label>
                                        <br>
                                        <input class="form-control" type="text" name="nomi"  placeholder="taom nomini kiriting">
                                        <br>
                                        <label >Tafsiloti </label>
                                        <br>
                                        <input class="form-control"  name="tafsiloti" placeholder="taom tafsilotini kiriting">
                                        <br>
                                        <label>Miqdori </label>
                                        <br>
                                        <input class="form-control" type="text" name="miqdori"  placeholder="miqdorini kiriting">
                                        <br>
                                        <label>Narxi </label>
                                        <br>
                                        <input type="text" name="narxi" class="form-control"  placeholder="narxini kiriting">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
                                <button type="submit" class="btn btn-primary" >Saqlash</button>
                            </div>
                        </form>
                        </div>

                    </div>
                </div>
                <script src="js/jquery.min.js" type="text/javascript"></script>
                <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

</body>
</html>