<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="KOBEDB";
    $conn=mysql_connect($server,$username,$password);
    if(!$conn)
    {
      die("Khong ket noi duoc voi MySQL sever").error(conn);
    }
    mysql_query("SET NAMES 'utf8'");
    mysql_select_db($dbname,$conn);
    ?>
  </body>
</html>
