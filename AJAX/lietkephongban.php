<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thêm phòng ban</title>
  </head>
  <body>
    <a href="index.php" style="text-decoration:none">Quay về trang admin</a>
    <center><h3>
      Liệt kê phòng ban trong công ty
    </h3>
    <form class="aaa" id="js-form" method="post" action="">
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
    <br>

    <table  border='1' cellspacing='0'>
      <caption>
        Danh sách phòng ban trong công ty
      </caption>
      <tr>
        <th>STT</th>
        <th>Mã phòng ban</th>
        <th>Tên phòng ban</th>
        <th>Số nhân viên</th>
        <th>Mã công ty</th>
      </tr>
      <tbody id="js-list">
      </tbody>
    </table>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
        //$('#js-submit').click(function(e){
        $(document).on('change', '#js-form', function(e){
            e.preventDefault();

            //var index = $('#js-list').children().last().children().first().text();

            var formData = $('#js-form').serialize();
            //formData = formData + '&index=' + index;
            $.ajax({
                type: 'POST',
                url: "lietkepb.php",
                data: formData,
                success: function(result) {
                  if (result.success) {
                    //alert('đã thêm phòng ban');
                    $('#js-list').replaceWith(result.html);
                  } else {
                    alert(result.message);
                  }
                },
            }).done(function() {

            });
        });
    </script>
  </body>
</html>
