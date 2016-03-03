<?php
  if (isset($_POST['maphong'])) {
    include "connect.php";
    $maphong = $_POST['maphong'];
    $query = "delete from phongban where maphong = '$maphong'";
    mysql_query($query, $conn);

    $result = array(
      'success' => true,
      'data' => array(
        'name' => 'hung'
      )
    );

    header('Content-type: application/json');
    echo json_encode($result);
  } else {
    $result = array(
      'success' => false,
      'message' => 'Không có mã phòng',
      //'abc' => 'xyz'
    );

    header('Content-type: application/json');
    echo json_encode($result);
  }

?>
