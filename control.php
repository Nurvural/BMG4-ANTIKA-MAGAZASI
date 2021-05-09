<?php

include("server.php");
include("settings.php");

giris_kontrol();
yetki_kontrol();

$admin = $_SESSION["iUserMail"];

$adminsor = mysqli_query($conn, "select * from user where mail='$admin'");
$admincek = mysqli_fetch_array($adminsor);

?>