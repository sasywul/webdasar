<?php
session_start();
if(isset($_SESSION["username"])){
    echo"<h1>Selamat Datang," . $_SESSION["username"];
}else{
    header("Location:login.php");
}
?>























