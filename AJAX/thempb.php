<?php
    if(isset($_POST['maphong'])) {
        include "connect.php";
        $index = intval($_POST["index"]) + 1;
        $map = $_POST["maphong"];
        $tenp = $_POST["tenphong"];
        $sonv = $_POST["sonhanvien"];
        $mact = $_POST["macongty"];
        $str = "insert into phongban values ('$map', '$tenp', '$sonv', '$mact')";
        mysql_query($str, $conn);
        //header('Location: '."index.php");

        $result = array(
          'success' => true,
          'html' => "<tr>
            <td>$index</td>
            <td>$map</td>
            <td>$tenp</td>
            <td>$sonv</td>
            <td>$mact</td>
            <td><button style='color:red' class='js-delete' data-id='$map'>Xóa</button></td>
          </tr>"
        );

        header('Content-type: application/json');
        echo json_encode($result);
    } else {
      $result = array(
        'success' => false,
        'message' => 'Thiếu dữ liệu'
      );

      header('Content-type: application/json');
      echo json_encode($result);
    }
?>
