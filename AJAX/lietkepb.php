<?php
    if(isset($_POST['macongty'])) {
        include "connect.php";
        //$index = intval($_POST["index"]) + 1;
        $mact = $_POST["macongty"];
        $str = "select * from phongban where macongty = '$mact'";
        $rs = mysql_query($str, $conn);
        //header('Location: '."index.php");
        //$row = mysql_fetch_row($rs));
        $html = '<tbody id="js-list">';
        $index = 0;
        while($row = mysql_fetch_row($rs)) {
          $index++;
          $html .= "<tr>
            <td>$index</td>
            <td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td>
            <td>$row[3]</td>
          </tr>";
        }
        $html .= '</tbody>';
        $result = array(
          'success' => true,
          'html' => $html
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
