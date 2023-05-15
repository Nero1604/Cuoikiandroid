<?php 
if(!isset($_SESSION)){
    session_start();
}
    unset($_SESSION['iduser']);
    // header("location: authentication-login.php");
    header("location: \DACS2\authentication-login.php");
?>