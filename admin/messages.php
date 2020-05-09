<?php

$db=new PDO("mysql:host=localhost; dbname=restoran", 'root', '');
$messages = $db->query("SELECT * FROM messages ")->fetchAll();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

</head>
<body>
<h3 align="center">XABARLAR</h3>
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
                            <li class="active"><a href="messages.php">xabarlar</a></li>
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
                    <th>FIO</th>
                    <th>E-mail</th>
                    <th>Tel raqami</th>
                    <th>Xabarlar</th>
                    <th>Vaqti</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach ($messages as $mess): ?>
                    <tr>
                        <td><?php echo $mess["id"]?></td>
                        <td><?php echo $mess["name"]?></td>
                        <td><?php echo $mess["email"]?></td>
                        <td><?php echo $mess["phone"]?></td>
                        <td><?php echo $mess["message"]?></td>
                        <td><?php echo $mess["dtime"]?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

</body>
</html>