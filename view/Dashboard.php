<?php
include_once'../repository/laptopRepository.php';
include_once'../repository/porosiaRepository.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body{
            width:100%;
            display:flex;
            flex-wrap:wrap;
            justify-content:space-evenly;
        }
        .show{
            margin-top:10px;
            width:25%;
            border: 1px solid blue;
            text-align:center;
        }
        .add{
            margin-top:10px;
            width:25%;
            height:400px;
            border: 1px solid blue;
            text-align:center;
        }
        input{
            width:200px;
        }
        .delete{
            margin-top:10px;
            width:25%;
            height:400px;
            border: 1px solid blue;
            text-align:center;
        }
        .edit{
            margin-top:10px;
            width: 25%;
            height:400px;
            border: 1px solid blue;
            text-align:center;
        }
        .editporosia{
            margin-top:10px;
            width: 25%;
            height:500px;
            border: 1px solid blue;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="show">
        <h1>SHOW ARTIKUJT</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <input type="submit" value="Show All" name="showA">
            <?php
            if(isset($_POST['showA'])){
                $showLaptopi = new LaptopRepository;
                $showLaptopi->showArticle();
            }
            ?>
        </form>
    </div>
    <div class="add">
        <h1>ADD ARTIKUJT</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="id"><br><br>
            <input type="text" name="description"><br><br>
            <input type="text" name="price"><br><br>
            <input type="submit" value="ADD" name="addA">
        </form>
        <?php
            if(isset($_POST['addA'])){
                $id = $_POST['id'];
                $description = $_POST['description'];
                $price = $_POST['price'];

                $addLaptopi = new LaptopRepository;
                $addLaptopi->addArticle($id,$description,$price);
            }
        ?>
    </div>
    <div class="delete">
        <h1>DELETE ARTIKUJT</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="id"><br><br>
            <input type="submit" value="Delete" name="deleteA">
        </form>
        <?php
            if(isset($_POST['deleteA'])){
                $id = $_POST['id'];

                $deleteLaptopi = new LaptopRepository;
                $deleteLaptopi->removeArticleByID($id);
            }
        ?>
    </div>
    <div class="edit">
        <h1>EDIT ARTIKUJT</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            ID e produktit qe do te editohet: <input type="text" name="idvjeter"><br><br>
            ID e re: <input type="text" name="id"><br><br>
            Description i produktit:<input type="text" name="description"><br><br>
            Price i produktit:<input type="text" name="price"><br><br>
            <input type="submit" value="Edit" name="editA">
        </form>
        <?php
            if(isset($_POST['editA'])){
                $idvjeter = $_POST['idvjeter'];
                $id = $_POST['id'];
                $description = $_POST['description'];
                $price = $_POST['price'];

                $editLaptopi = new LaptopRepository;
                $editLaptopi->addArticle($idvjeter,$id,$description,$price);
            }
        ?>
    </div>
    <div class="show">
        <h1>SHOW POROSITE</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
        <input type="submit" value="Show All" name="show">
            <?php
            if(isset($_POST['show'])){
                $showPorosine = new PorosiaRepository;
                $showPorosine->showPorosia();
            }
            ?>
        </form>
    </div>
    <div class="add">
        <h1>ADD POROSITE</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="id"><br><br>
            <input type="text" name="emri"><br><br>
            <input type="text" name="mbiemri"><br><br>
            <input type="text" name="menyraPageses"><br><br>
            <input type="text" name="ccnr"><br><br>
            <input type="text" name="sc"><br><br>
            <input type="text" name="ce"><br><br>
            <input type="submit" value="ADD" name="add">
        </form>
        <?php
            if(isset($_POST['add'])){
                $id = $_POST['id'];
                $emri = $_POST['emri'];
                $mbiemri = $_POST['mbiemri'];
                $menyraPageses = $_POST['menyraPageses'];
                $ccnr = $_POST['ccnr'];
                $sc = $_POST['sc'];
                $ce = $_POST['ce'];


                $addPorosia = new PorosiaRepository;
                $addPorosia->addPorosia($id,$emri,$mbiemri,$menyraPageses,$ccnr,$sc,$ce);
            }
        ?>
    </div>
    <div class="delete">
        <h1>DELETE POROSITE</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <input type="text" name="id"><br><br>
            <input type="submit" value="Delete" name="delete">
        </form>
        <?php
            if(isset($_POST['delete'])){
                $id = $_POST['id'];

                $deletePorosia = new PorosiaRepository;
                $deletePorosia->removePorosiaByID($id);
            }
        ?>
    </div>
    <div class="editporosia">
        <h1>EDIT POROSITE</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            ID e porosise qe do te editohet: <input type="text" name="idvjeter"><br><br>
            ID e re: <input type="text" name="id"><br><br>
            Emri i klientit:<input type="text" name="emri"><br><br>
            Miemri i Klientit:<input type="text" name="mbiemri"><br><br>
            Menyra e pageses: <input type="text" name="menyraPageses"><br><br>
            Credit Card Nr:<input type="text" name="ccnr"><br><br>
            Security code:<input type="text" name="sc"><br><br>
            Card Expiration:<input type="text" name="ce"><br><br>
            <input type="submit" value="Edit" name="edit">
        </form>
        <?php
            if(isset($_POST['edit'])){
                $idvjeter = $_POST['idvjeter'];
                $id = $_POST['id'];
                $emri = $_POST['emri'];
                $mbiemri = $_POST['mbiemri'];
                $menyraPageses = $_POST['menyraPageses'];
                $ccnr = $_POST['ccnr'];
                $sc = $_POST['sc'];
                $ce = $_POST['ce'];

                $editLaptopi = new LaptopRepository;
                $editLaptopi->editPorosia($idvjeter,$id,$emri,$mbiemri,$menyraPageses,$ccnr,$sc,$ce);
            }
        ?>
    </div>
</body>
</html>