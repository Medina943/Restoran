<?php
$db=new PDO("mysql:host=localhost; dbname=restoran", 'root', '');
$news = $db->query("SELECT *  FROM news")->fetchAll();
$cats = $db->query("SELECT *  FROM kategoriya")->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ummon Restaurant | Menu</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/sForm.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body>
<div class="main">
    <header>
        <div class="container_12">
            <div class="grid_12">
                <!--<h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>-->
                <p style="font-size: 30pt"> UMMON RESTAURANT</p>
                <div class="menu_block">
                    <nav>
                        <ul class="sf-menu">
                            <li><a href="index.php">Bosh sahifa</a></li>
                                <ul>
                                    <li><a href="#"> Pishiriqlar</a></li>
                                    <li><a href="#">Dam olish joylari</a></li>
                                    <li><a href="#">Xizmatlar</a></li>
                                </ul>
                            </li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="portfolio.php">Portfoliya</a></li>
                            <li class="current"><a href="news.php">Yangliklar</a></li>
                            <li><a href="contacts.php">Biz bilan aloqa</a></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="container_12">
            <div class="grid_7">
                <h2 class="head2">Yangliklar</h2>
                <?php foreach($news as $new): ?>
                    <div class="news"> <img style="height: 150px; width: 150px;" src="images/<?=$new['rasm']?>" alt="" class="img_inner fleft">
                        <p><?=$new['sana']?></p>
                        <div class="extra_wrapper">
                            <p><?=$new['yangliklar']?></p>
                            <a href="#" class="btn">More</a> </div>
                    </div>
                <?php endforeach;?>
            </div>
            <div class="grid_3 prefix_2">
                <h2 class="head2">Kategoriya</h2>
                <ul class="list l1">
                    <?php foreach ($cats as $cat):?>
                    <p><?=$cat['k_nomi']?></p>
                </ul>
                <?php endforeach;?>

            </div>
            <div class="clear"></div>
            <div class="bottom_block">
                <div class="grid_6">
                    <h3>Follow Us</h3>
                    <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
                    <nav>
                        <ul>
                            <li><a href="index.php">Bosh sahifa</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="portfolio.php">Portfoliya</a></li>
                            <li class="current"><a href="news.php">Yangliklar</a></li>
                            <li><a href="contacts.php">Biz bilan aloqa</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="grid_6">
                    <h3>Email ni yangilash</h3>
                    <p class="col1">Bizning sahifamizga qo'shiling va<br>
                        yangliklardan birinchi bo'lib xabardor bo'ling</p>
                    <form id="newsletter" action="#">
                        <div class="success">O'z fikringizni bildiring!</div>
                        <label class="email">
                            <input type="email" value="Enter e-mail address" >
                            <a href="#" class="btn" data-type="submit">Tasdiqlash</a> <span class="error">*This is not a valid email address.</span> </label>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<footer>
    <div class="container_12">
        <div class="grid_12"> Ummon Restaurant &copy; 2019  </div>
        <div class="clear"></div>
    </div>
</footer>
</body>
</html>