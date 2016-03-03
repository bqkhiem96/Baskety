<!-- &nbsp; (khoảng trắng) -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test ajax</title>
    <script type="text/javascript">
      function cauchao(hoten) {
        if (hoten.length == 0) {
          document.getElementById('loichao').innerHTML = "";
          return;
        }
        else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              document.getElementById('loichao').innerHTML = xmlhttp.responseText;
            }
          };
          xmlhttp.open("GET", "timnv.php?hoten=" + hoten, true);
          xmlhttp.send();
        }
      }
    </script>
  </head>
  <body>
    <div class="">
      <a href="index.php" style="text-decoration:none">Quay về trang admin</a>
    </div>
    <form class="" method="post">
      <table witdth="600" border="1" cellspacing="0" cellpadding="0" align="center">
        <caption><h3>
          Tìm nhân viên
        </caption>
        <tbody>
          <tr>
            <th>Nhập họ tên</th>
            <td><input type="text" name="txthoten" id="txthoten" onKeyUp="cauchao(this.value)"></td>
          </tr>
          <tr>
            <th>Kết quả tìm kiếm</th>
            <td><div id="loichao"></div></td>
          </tr>
        </tbody>
      </table>
    </form>
  </body>
</html>
