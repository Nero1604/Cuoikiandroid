<?php   
    if(!isset($_SESSION))
    {
        session_start();
    }
    $idproduct="";
    $idcategory = "";
    $idhh = "";
    if(isset($_SESSION["id"])){
        $idproduct = $_SESSION["id"];   
    }
    if(isset($_SESSION["idcategory"])){
        $idcategory = $_SESSION["idcategory"]; 
    }
    if($_SESSION["id_cart"] != null){
        $idhh = $_SESSION["id_cart"];  
    }
        if($idproduct != null)
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                  
                $name = $_POST["name"];
                $price = $_POST["price"];
                $category = $_POST["category"];
                $detail = $_POST["detail"];
                $conn = mysqli_connect("localhost", "root", "", "aitechc2");
                $sql = "UPDATE `products` SET `name_product`='$name',`cost_product`='$price',`category`='$category',`detail_product`='$detail' WHERE id_product = $idproduct";
                $kq = mysqli_query($conn, $sql);   
                unset($_SESSION["id"]);
                echo'<script> window.location="sanpham.php"; </script> '; 
                mysqli_close($conn);   
            }   
        }  
        if($idcategory != null)
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                  
                $category = $_POST["category"];
               $conn = mysqli_connect("localhost", "root", "", "aitechc2");
                $sql = "UPDATE `categories` SET `category`='$category' WHERE id_category = $idcategory";
                $kq = mysqli_query($conn, $sql);   
                echo'<script> window.location="sanpham.php"; </script> '; 
                unset($_SESSION["idcategory"]);
                mysqli_close($conn);   
            }   
        }  

        if($idhh != null)
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                  
                $name = $_POST["name"];
                $price = $_POST["price"];
                $date = $_POST["date"];
                $payment = $_POST["cart_payment"];
                $conn = mysqli_connect("localhost", "root", "", "aitechc2");
                $sql = "UPDATE `cart_payments` SET `name_user`='$name',`cart_date`='$date',`cart_cost`='$price',`cart_payment`='$payment' WHERE id_cart = $idhh";
                $kq = mysqli_query($conn, $sql);   
                unset($_SESSION["idhh"]);
                echo'<script> window.location="donhang.php"; </script> '; 
                mysqli_close($conn);   
            }   
        }  
            ?>  