<?php
   try {
    $servername = "localhost";
    $username = "root";
    $password = "nurvural123";
    $dbname = "antika";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //echo "baglanti basarili";

}
catch (Exception $e) {
    echo $e->getMessage();
}

?>
 

