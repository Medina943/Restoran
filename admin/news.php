<?php

$db=new PDO("mysql:host=localhost; dbname=restoran", 'root', '');
$news = $db->query("SELECT *  FROM news")->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

</head>
<body>
<h3 align="center">YANGLIKLAR</h3>
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
                            <li><a href="Taomlar.php">Taomlar</a></li>
                            <li><a href="portfolio.php">Portfoliya</a></li>
                            <li><a href="messages.php">xabarlar</a></li>
                            <li class="active"><a href="news.php">Yangliklar</a></li>
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
                    <th>Yangliklar</th>
                    <th>Sana</th>
                    <th>Amallar</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($news as $news): ?>
                    <tr>
                        <td><?php echo $news["id"]?></td>
                        <td><?php echo $news["rasm"]?></td>
                        <td><?php echo $news["yangliklar"]?></td>
                        <td><?php echo $news["sana"]?></td>
                        <td>
                            <a href="editfood.php?id=<?=$news['id']?>" class="btn btn-primary">Yangilash</a>
                            <a href="delnews.php?id=<?=$news['id']?>" class="btn btn-danger" onclick="del()" >O'chirish</a>

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
                <h4 class="modal-title">Yangilik qo'shish</h4>
            </div>
            <div class="modal-body">

                <div class="form">
                    <form action="addnews.php" method="get" enctype="multipart/form-data">
                        <label>Rasm </label>
                        <br>
                        <input type="file" name="rasm" class="form-control" placeholder="rsamni tanlang">
                        <br>
                        <label>Yangliklar </label>
                        <br>
                        <input class="form-control" type="text" name="yangliklar"  placeholder="yangliklarni kiriting">
                        <br>
                        <label >Sana </label>
                        <br>
                        <input class="form-control"  type="date" name="sana" placeholder="sanani tanlang">
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