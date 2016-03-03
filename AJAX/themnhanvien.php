<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thêm nhân viên</title>

  </head>
  <body>
    <a href="index.php" style="text-decoration:none">Quay về trang admin</a>
    <form class="aaa" id="js-form" method="post" action="">
      <table witdth="600" border="1" cellspacing="0" cellpadding="0" align="center">
        <caption> <h3>
          Thêm nhân viên
        </caption>
        <tbody align="center">
          <tr>
            <td><b>Tên phòng ban</td>
            <td>
              <select name="maphong" id="js-maphong">
                <?php
                  include "connect.php";
                  $result = mysql_query("SELECT * FROM phongban", $conn) or die(mysql_error());
                  while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
                  {
                ?>
                  <option value="<?php echo $row['maphong'] ?>">
                    <?php echo $row['tenphong'] ?>
                  </option>
                <?php
                  };
                ?>
              </select>
            </td>
          </tr>
          <tr>
            <td><b>Mã nhân viên</td>
            <td><input type="text" name="manhanvien" id=""></td>
          </tr>
          <tr>
            <td><b>Tên nhân viên</td>
            <td><input type="text" name="tennhanvien" id=""></td>
          </tr>
          <tr>
            <td><b>Hệ số lương</td>
            <td><input type="text" name="hesoluong" id=""></td>
          </tr>
          <tr>
            <td><b>Giới tính</td>
            <td>
              <input type="checkbox" name="gioitinh" value="1">Nam
              <input type="checkbox" name="gioitinh" value="0">Nữ
            </td>
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
        $(document).on('click', '#js-submit', function(e){
            e.preventDefault();

            //alert('aaa');
            //DOM document
            //DOM element

            var formData = $('#js-form').serialize();
            $.ajax({
                type: 'POST',
                url: "themnv.php",
                data: formData,
                // success: function(data) {
                //   if(data.success) {
                //     toastr.success(data.message);
                //   } else {
                //     toastr.error(data.message);
                //   }
                // },
            }).done(function() {
                alert('Da them nhan vien');
                //window.location.href = 'index.php';
            });
        });
    </script>
  </body>
</html>
