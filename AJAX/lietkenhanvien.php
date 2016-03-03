<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thêm phòng ban</title>
  </head>
  <body>
    <a href="index.php" style="text-decoration:none">Quay về trang admin</a>
    <center><h3>
      Liệt kê nhân viên trong công ty
    </h3>
    <form class="aaa" id="js-form1" method="post" action="">
      <table witdth="600" border="1" cellspacing="0" cellpadding="0" align="center">
        <tbody align="center">
          <tr>
            <td><b>Tên công ty</td>
            <td>
              <select name="macongty">
                <?php
                  include "connect.php";
                  $result = mysql_query("SELECT * FROM congty", $conn) or die(mysql_error());
                  while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
                  {
                ?>
                  <option value="<?php echo $row['macongty'] ?>">
                    <?php echo $row['tencongty'] ?>
                  </option>
                <?php
                  };
                ?>
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </form>

    <form class="aaa" id="js-form2" method="post" action="">
      <table witdth="600" border="1" cellspacing="0" cellpadding="0" align="center">
        <tbody align="center">
          <tr>
            <td><b>Tên phòng ban</td>
            <td>
              <select name="maphong" id="maphong">
              </select>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
    <br>

    <table  border='1' cellspacing='0'>
      <caption>
        Danh sách nhân viên trong phòng ban
      </caption>
      <tr>
        <th>STT</th>
        <th>Mã nhân viên</th>
        <th>Tên nhân viên</th>
        <th>Hệ số lương</th>
        <th>Giới tính</th>
        <th>Mã phòng</th>
      </tr>
      <tbody id="js-list">
      </tbody>
    </table>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
        //$('#js-submit').click(function(e){
        $(document).on('change', '#js-form1', function(e){
            e.preventDefault();
            //var index = $('#js-list').children().last().children().first().text();
            var formData = $('#js-form1').serialize();
            //formData = formData + '&index=' + index;
            $.ajax({
                type: 'POST',
                url: "lietkenv.php",
                data: formData,
                success: function(result1) {
                  if (result1.success) {
                    //alert('đã thêm phòng ban');
                    $('#maphong').replaceWith(result1.html);
                  } else {
                    alert(result1.message);
                  }
                },
            }).done(function() {
            });
        });

        $(document).on('change', '#js-form2', function(e){
            e.preventDefault();
            //var index = $('#js-list').children().last().children().first().text();
            var formData = $('#js-form2').serialize();
            //formData = formData + '&index=' + index;
            $.ajax({
                type: 'POST',
                url: "lietkenv.php",
                data: formData,
                success: function(result2) {
                  if (result2.success) {
                    //alert('đã thêm phòng ban');
                    $('#js-list').replaceWith(result2.html);
                  } else {
                    alert(result2.message);
                  }
                },
            }).done(function() {
            });
        });
    </script>
  </body>
</html>
