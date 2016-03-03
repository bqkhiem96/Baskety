    <?php
    	include "connect.php";
        $hoten = $_REQUEST["hoten"];
        //echo "Chào bạn $hoten";
        //$server = mysql_connect("localhost", "root", "");
        //$csdl = mysql_select_db("qlnhanvien");
        $kq = mysql_query("select * from nhanvien where tennhanvien like '%$hoten%'", $conn);
        if(mysql_num_rows($kq) > 0) {
        	echo "<table width='600px' border='1'>";
        	echo "<tr><td>Mã Nhân Viên</td><td>Họ Tên</td></tr>";
        	while($nv = mysql_fetch_row($kq)) {
        		echo "<tr><td>$nv[0]</td><td>$nv[1]</td></tr>";
        	}
        	echo "</table>";
        }
    ?>
