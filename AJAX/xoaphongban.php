<!doctype html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Xóa phòng ban</title>
  </head>
  <body>
    <a href="index.php" style="text-decoration:none">Quay về trang admin</a>
    <table border='1' cellspacing='0' align="center">
      <caption> <h3>
        Xóa phòng ban
      </caption>
      <tr>
        <th>STT</th>
        <th>Mã phòng ban</th>
        <th>Tên phòng ban</th>
        <th>Số nhân viên</th>
        <th>Mã công ty</th>
        <th>Xóa phòng ban</th>
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
            <!-- <form method="post">
              <input type="hidden" name="maphong" value="<?php #echo $row[0] ?>"> -->
              <button style="color:red" class="js-delete" data-id="<?php echo $row[0] ?>">Xóa</button>
            <!-- </form> -->
          </td>
        </tr>
      <?php
      $i++;
      }
      ?>
    </table>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript">
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
