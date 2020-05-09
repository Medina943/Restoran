<?php
if (!isset($_GET['id'])){
    die("Noto'g'ri murojat");
}
?>
<!DOCTYPE>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->  <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">

</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Yangilash</div>

        <div class="card-body">
            <div class="form">
                <form action="editfood.php" method="get" enctype="multipart/form-data">
                    <label>Rasm </label>
                    <br>
                    <input type="file"  name="rasm" class="form-control" value="<?=$values["rasm"] ?>" placeholder="rsamni tanlang" >
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
                    <input class="form-control" type="text" name="nomi" value="<?=$values["nomi"] ?>" placeholder="taom nomini kiriting">
                    <br>
                    <label >Tafsiloti </label>
                    <br>
                    <textarea class="form-control" cols="22" rows="1" name="tafsiloti" value="<?=$values["tafsiloti"] ?>" placeholder="taom tafsilotini kiriting"></textarea>
                    <br>
                    <label>Miqdori </label>
                    <br>
                    <input class="form-control" type="text" name="miqdori" value="<?=$values["miqdori"] ?>"  placeholder="miqdorini kiriting">
                    <br>
                    <label>Narxi </label>
                    <br>
                    <input type="text" name="narxi" class="form-control" value="<?=$values["narxi"] ?>" placeholder="narxini kiriting">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Bekor qilish</button>
            <button type="submit" class="btn btn-primary" >Saqlash</button>
        </div>
        </form>
<!--
                v> -->
        </div>
    </div>
</div>
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
<!-- Bootstrap core JavaScript-->

</body>

</html>
