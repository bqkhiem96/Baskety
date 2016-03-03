<?php
    if(isset($_POST['macongty'])) {
        include "connect.php";

        $mact = $_POST["macongty"];
        $tenct = $_POST["tencongty"];

        $str = "insert into congty values ('$mact', '$tenct')";
        mysql_query($str, $conn);
        #header('Location: '."index.php");
    }
?>
