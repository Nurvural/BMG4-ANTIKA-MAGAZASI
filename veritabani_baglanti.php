<?php
    
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "antique";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        echo "baglanti basarili fethiye";

    }
    catch (Exception $e) {
        echo $e->getMessage();
    }

?>