<?php 
    $idsp = $_GET["idsp"];
    $idcategory = $_GET["idcategory"];
    $iduser = $_GET["iduser"];
    $idship =$_GET["idship"];
    $iddh = $GET["iddh"];

    if($idsp != null){
    
    $conn = mysqli_connect("localhost","root","","aitechc2");
    $sql = "DELETE FROM `products` WHERE `id_product`='$idsp'";
    $kq = mysqli_query($conn,$sql);
    echo '<script>location.replace("sanpham.php")</script>';
    unset($_SESSION['idsp']);
    }
    if($idcategory!=null){
        
    $conn = mysqli_connect("localhost","root","","aitechc2");
    $sql = "DELETE FROM `categories` WHERE `id_category`='$idcategory'";
    $kq = mysqli_query($conn,$sql);
    echo '<script>location.replace("sanpham.php")</script>';
    unset($_SESSION['idcategory']);
    }
    if($iduser!=null){
    $conn = mysqli_connect("localhost","root","","aitechc2");
    $sql = "DELETE FROM `users` WHERE `id`='$iduser'";
    $kq = mysqli_query($conn,$sql);
    echo '<script>location.replace("tables.php")</script>';
    unset($_SESSION['iduser']);
    }

    if($iddh!=null){
        $conn = mysqli_connect("localhost","root","","aitechc2");
        $sql = "DELETE FROM `cart_payments` WHERE `id_cart`='$iddh'";
        $kq = mysqli_query($conn,$sql);
        echo '<script>location.replace("tables.php")</script>';
        unset($_SESSION['iddh']);
        }
    if($idship!=null){
        $conn = mysqli_connect("localhost","root","","aitechc2");
        $sql = "DELETE FROM `shipping` WHERE `id_shipping`='$idship'";
        $kq = mysqli_query($conn,$sql);
        echo '<script>location.replace("tables.php")</script>';
        unset($_SESSION['idship']);
        }

?>