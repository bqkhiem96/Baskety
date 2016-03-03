<?php
    if(isset($_POST['maphong'])) {
        include "connect.php";

        $map = $_POST["maphong"];
        $manv = $_POST["manhanvien"];
        $tennv = $_POST["tennhanvien"];
        $hsl = $_POST["hesoluong"];
        $gt = $_POST["gioitinh"];

        $str = "insert into nhanvien values ('$manv', '$tennv', '$hsl', '$gt', '$map')";
        mysql_query($str, $conn);
        #header('Location: '."index.php");
    }
?>
