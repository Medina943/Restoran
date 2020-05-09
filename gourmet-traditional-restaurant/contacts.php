<?php

$db=new PDO("mysql:host=localhost; dbname=restoran", 'root', '');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gourmet Traditional Restaurant | Contacts</title>
<meta charset="utf-8">
    <link rel="stylesheet" href="../admin/bootstrap-3.3.7/css/bootstrap.min.css">
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/form.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/sForm.js"></script>
<script src="js/Forms.js"></script>
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
              <li><a href="news.php">Yangliklar</a></li>
              <li class="current"><a href="contacts.php">Biz bilan aloqa</a></li>
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
      <div class="grid_6">
        <h2>Bizning manzil</h2>
        <div class="map">
          <figure class="img_inner">
            <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
          </figure>
          <address>
          <dl>
            <dt>
              <p>Murojat uchun:</p>
            </dt>
            <dd><span>Telephone:</span>+99895 555 60 35</dd>
            <dd><span>FAX:</span>+1 800 889 9898</dd>
          </dl>
          </address>
        </div>
      </div>
      <div class="grid_5 prefix_1">
        <h2>Biz bilan aloqa</h2>
          <form action="sendmessage.php" method="get" enctype="multipart/form-data">
              <label>Name</label>
              <br>
              <input type="text" name="name" class="form-control" placeholder="ismingizni yozing">
              <br>
              <label>E-mail</label>
              <br>
              <input class="form-control" type="text" name="email"  placeholder="e-mail ni kiriting">
              <br>
              <label >Phone</label>
              <br>
              <input class="form-control"  name="phone" placeholder="Raqamingizni kiriting">
              <br>
              <label>Message</label>
              <br>
              <textarea class="form-control" name="message"  placeholder="Xabarni yozing:"></textarea>
              <br>
              <label>Date </label>
              <br>
              <input type="date" name="dtime" class="form-control"  placeholder="narxini kiriting">
              <br>
    </div>
        <br>
      <div class="modal-footer" align="right">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Bekor qilish</button>
          <button type="submit" class="btn btn-primary" >Jo'natish</button>
      </div>
      </form>
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
                  <li><a href="news.php">Yangliklar</a></li>
                  <li class="current"><a href="contacts.php">Biz bilan aloqa</a></li>
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
<script src="../admin/bootstrap-3.3.7/js/bootstrap.min.js"></script>
</body>
</html>