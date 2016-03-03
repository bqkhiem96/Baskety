<html>
  <?php
  session_start();
  error_reporting(0);
  require 'CORE/head.php';
  $username = $_POST['USERNAME'];
  $password = $_POST['PASSWORD'];

  if (isset($_POST['Submit'])) {
      if ($username == ('admin') & $password == ('admin')) {
          $_SESSION['USERNAME'] = 'USERNAME';
          $_SESSION['PASSWORD'] = 'PASSWORD';
         header('location: admin.php');
      } else{
        echo "<script>alert('Wrong username and password')</script>";
      }
  }



  ?>

  <head>
    <style media="screen">
        body{
          background: url(IMG/register.jpg);
          background-size: cover;
        }
        .panel-default {

        margin: auto;
        margin-top: 200px;
        width: 450px;
        padding-left: 20px;
        padding-right: 20px;
        }
    </style>
  </head>

  <body>
    <?php include 'CORE/navbar.php'; ?>
    <!-- <div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">
		    <h3 class="form-signin-heading">Greeting! Please Sign In</h3>
			  <hr class="colorgraph"><br>

			  <input type="text" class="form-control" name="USERNAME" placeholder="Username" id="uname" />
			  <input type="password" class="form-control" name="PASSWORD" placeholder="Password" id="pass"/>

			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit" onclick="validate()">Login</button>
		</form> -->

    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>Welcome back</strong>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" role="form" method="post" name="Login_Form">
          <div class="form-group">
            <label>
              Username
            </label>
            <input type="text" class="form-control" name="USERNAME" placeholder="Username" id="uname"  />
          </div>
          <div class="form-group">
            <label>
              Password
            </label>
            <input type="password" class="form-control" name="PASSWORD" placeholder="Password" id="pass"  />
          </div>
          <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit" onclick="validate()">Login</button>
        </form>
      </div>
    </div>
	</div>
</div>
  </body>
</html>
