<?php
      if (isset($_POST['ADD'])) {
          include 'connectdb.php';

          $name = mysql_escape_string($_POST['NAME']);
          $username = mysql_escape_string($_POST['USERNAME']);
          $email = $_POST['EMAIL'];
          $vemail = $_POST['VEMAIL'];
          $pass = $_POST['PASSWORD'];
          $vpass = $_POST['VPASSWORD'];
          $add = $_POST['ADDRESS'];
          $dob = $_POST['DOB'];

          if (empty($_POST['NAME']) || empty($_POST['USERNAME']) || empty($_POST['EMAIL']) || empty($_POST['PASSWORD']) || empty($_POST['VPASSWORD']) || empty($_POST['ADDRESS']) || empty($_POST['DOB'])) {
              ?>
              <script type="text/javascript">
              alert("Please don't leave any blank");

              </script>
              <?php

          }

          $result = mysql_query("SELECT * FROM users WHERE USERNAME ='$username'", $conn);
          if (mysql_num_rows($result) > 0) {
              while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
                  if ($row['USERNAME'] == $username) {
                      ?>
                    <script type="text/javascript">
                      alert("USERNAME EXISTS");
                    </script>
                  <?php

                  }
              }
          } elseif ($email != $vemail) {
              ?>
              <script type="text/javascript">
                alert("EMAIL DID NOT MATCH");
              </script>
              <?php

          } elseif ($pass != $vpass) {
              ?>
              <script type="text/javascript">
                alert("PASSWORD DID NOT MATCH");
              </script>
              <?php

          } else {
              $str = "insert into users values ('','$name','$username','$email','$pass','$add','$dob')";
              mysql_query($str, $conn);
              ?>
              <script type="text/javascript">
              alert("NICE & THANK YOU");
              </script>
              <?php

          }
      }
  ?>
