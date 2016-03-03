<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thêm phòng ban</title>
  </head>
  <body>
    <a href="index.php" style="text-decoration:none">Quay về trang admin</a>
    <table  border='1' cellspacing='0'>
      <caption> <h3>
        Danh sách phòng ban trong công ty
      </caption>
      <tbody id="js-list">
        <tr>
          <th>STT</th>
          <th>Mã phòng ban</th>
          <th>Tên phòng ban</th>
          <th>Số nhân viên</th>
          <th>Mã công ty</th>
          <th>
            Xóa
          </th>
        </tr>
        <?php
        include "connect.php";

        $str = "select * from phongban";
        $rs = mysql_query($str, $conn);
        $i = 1;

        while($row = mysql_fetch_row($rs)) {
        ?>
          <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <td align='center'>
                <button style="color:red" class="js-delete" data-id="<?php echo $row[0] ?>">Xóa</button>
            </td>
          </tr>
        <?php $i++;
        } ?>

      </tbody>
    </table>

    <form id="js-form" method="post">
      <table witdth="600" border="1" cellspacing="0" cellpadding="0" align="center">
        <caption> <h3>
          Thêm phòng ban
        </caption>
        <tbody align="center">
          <tr>
            <td><b>Tên công ty</td>
            <td>
              <select name="macongty">
                <?php
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
          <tr>
            <td><b>Mã phòng ban</td>
            <td><input type="text" name="maphong"></td>
          </tr>
          <tr>
            <td><b>Tên phòng ban</td>
            <td><input type="text" name="tenphong"></td>
          </tr>
          <tr>
            <td><b>Số nhân viên</td>
            <td><input type="text" name="sonhanvien"></td>
          </tr>
          <tr>
            <td colspan="2">
              <button id="js-submit" >Thêm</button>
              <button type="reset" value="Reset">Reset</button>
            </td>
          </tr>
        </tbody>
      </table>
    </form>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
        //$('#js-submit').click(function(e){
        $(document).on('click', '#js-submit', function(e){
            e.preventDefault();

            var index = $('#js-list').children().last().children().first().text();

            var formData = $('#js-form').serialize();
            formData = formData + '&index=' + index;
            $.ajax({
                type: 'POST',
                url: "thempb.php",
                data: formData,
                success: function(result) {
                  if (result.success) {
                    //alert('đã thêm phòng ban');
                    $('#js-list').append(result.html);
                  } else {
                    alert(result.message);
                  }
                },
            }).done(function() {

            });
        });
        $(document).on('click', '.js-delete', function(e){
            e.preventDefault();

            var mp = $(this).attr('data-id');
            var tr = $(this).parent().parent();

            //var formData = $('#js-form').serialize();
            $.ajax({
                type: 'POST',
                url: "xoapb.php",
                data: {
                  maphong: mp,
                },
                success: function(abc) {
                  //console.log(data);
                  if (abc.success) {
                    tr.remove();
                  } else {
                    alert(abc.message);
                  }
                },
            }).done(function() {
                //console.log(data);
                //tr.remove();
                //alert('Da xoa phong ban');
                //window.location.href = 'xoaphongban.php';
            });
        });
    </script>
  </body>
</html>
