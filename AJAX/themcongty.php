<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thêm công ty</title>
  </head>
  <body>
    <a href="index.php" style="text-decoration:none">Quay về trang admin</a>
    <?php
        if(isset($_POST['them'])) {
            include "connect.php";
            $mact = $_POST["macongty"];
            $tenct = $_POST["tencongty"];
            $str = "insert into congty values ('$mact', '$tenct')";
            mysql_query($str, $conn);
            //header('Location: '."index.php");
        }
    ?>
    <form class="" method="post" id="js-form">
      <table witdth="600" border="1" cellspacing="0" cellpadding="0" align="center">
        <caption> <h3>
          Thêm công ty
        </caption>
        <tbody align="center">
          <tr>
            <td><b>Mã công ty</td>
            <td><input type="text" name="macongty" id=""></td>
          </tr>
          <tr>
            <td><b>Tên công ty</td>
            <td><input type="text" name="tencongty" id=""></td>
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
                url: "themct.php",
                data: formData,
                // success: function(data) {
                //   if(data.success) {
                //     toastr.success(data.message);
                //   } else {
                //     toastr.error(data.message);
                //   }
                // },
            }).done(function() {
                alert('Da them cong ty');
                //window.location.href = 'index.php';
            });
        });
    </script>
  </body>
</html>
