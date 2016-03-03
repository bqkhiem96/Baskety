<?php
$SERVER = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "qlnhanvien";
$conn = mysql_connect($SERVER, $USERNAME, $PASSWORD);
if(!$conn) {
	die("Không kết nối được vào MySQL server");
}
mysql_query("SET NAMES 'utf8'");
mysql_select_db($DBNAME, $conn);
/*mysql_close($conn);
mysql_select_db($DBNAME, $conn) or die ("Không thể chọn được CSDL: ".mysql_error($conn));
$sql = "SELECT * FROM User";
$result = mysql_query($sql, $conn);
echo "<table border = 1>";
echo "<tr>";
echo "<th> user name </th>";
echo "<th>password</th>";
echo "</tr>";
while($row = mysql_fetch_row($result)) {
	echo "<tr>";
	echo "<td>$row[0]</td>";
	echo "<td>$row[1]</td>";
	echo "</tr>";
}
echo "</table>";*/
?>
