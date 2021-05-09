<?php

    error_reporting(0);
    ob_start();
    session_start();

    function giris_kontrol(){
        include("server.php");
        $admin = $_SESSION["iUserMail"];

        $adminsor = mysqli_query($conn, "select * from user where mail='$admin'");
        $adminsay = mysqli_fetch_array($adminsor);

        if($adminsay == '1'){
            header("location:login.php");
        }
    }

    function yetki_kontrol(){
        include("server.php");
        $admin = $_SESSION["iUserMail"];

        $adminsor = mysqli_query($conn, "select * from user where mail='".$admin."'and yetki_id = '1'");
        $adminsay = mysqli_fetch_array($adminsor);

        if($adminsay == '1'){
            header("location:login.php");
        }
    }

?>