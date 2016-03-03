<!DOCTYPE html>
<html>
  <?php require 'CORE/head.php'; ?>
  <head>
    <style media="screen">
      table, th, tr, td {
        margin: auto;
        margin-top: 100px;
        border: 2px solid white;
      }
      th{
        width: 100px;
        text-align: center;
      }
      tr:nth-child(even) {
        background-color: rgb(32, 124, 21);
        color: rgb(244, 183, 0);
      }
    </style>
  </head>
  <body>
    <?php
      include 'CORE/navbar.php';
      include 'CORE/connectdb.php';
      $sql = "SELECT * FROM schedule ";
      $result = mysql_query($sql, $conn);
      echo '<table>';
      echo '<tr>';
      echo '<th>GAME</th><th>HOME</th><th>GUESS</th><th>DATE</th><th>TIME</th><th>RESULT</th><th>SCORE-H</th><th>SCORE-G</th>';
      echo '</tr>';
      $i = 1;
      while ($row = mysql_fetch_row($result)) {
          echo '<tr>';
          //echo "<td>$i</td>";
          echo "<td>$row[0]</td>";
          echo "<td>$row[1]</td>";
          echo "<td>$row[2]</td>";
          echo "<td>$row[3]</td>";
          echo "<td>$row[4]</td>";
          echo "<td>$row[5]</td>";
          echo "<td>$row[6]</td>";
          echo "<td>$row[7]</td>";
          echo '</tr>';

          ++$i;
      }
      echo '</table>';
    ?>
  </body>
</html>
