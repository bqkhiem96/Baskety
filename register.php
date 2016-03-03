<!doctype html>
<html>
<?php include 'CORE/head.php'; ?>

<style media="screen">
	#bloc-0{
		padding-top: 100px;
	}
	body{
		background: url(IMG/register.jpg);
	}
	.panel-default {

 	/*margin-top:30px;
 	width: 450px;*/
	margin: auto;
	width: 400px;
 	padding-left: 20px;
 	padding-right: 20px;
}
.form-group.last {
 margin-bottom:0px;
}
label{
	color: black;
}
</style>
<body>
	<?php require 'CORE/navbar.php'; ?>
	<?php require_once 'validation.php'; ?>


<div class="page-container">
<div class="bloc l-bloc bgc-white" id="bloc-0">
	<div class="container bloc-lg">
		<div class="row">
			<div class="col-sm-4">
				<span class="empty-column"></span>
			</div>
			<div class="col-sm-4">
				<!-- FORM INPUT -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>REGISTER FORM</strong>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" role="form" method="post" onsubmit="return checkform()" name="reg">

							<div class="form-group">
								<label>
									Name
								</label>
								<input name="NAME"  class="form-control"  />
							</div>

							<div class="form-group">
								<label>
									Username
								</label>
								<input name="USERNAME"  class="form-control"  />
							</div>

							<div class="form-group">
								<label>
									Email
								</label>
								<input name="EMAIL"  class="form-control" type="email"  />
							</div>

							<div class="form-group">
								<label>
									Verify Email
								</label>
								<input name="VEMAIL"  class="form-control" type="email"  />
							</div>

							<div class="form-group">
								<label>
									Password
								</label>
								<input name="PASSWORD"  class="form-control" type="password"  />
							</div>

							<div class="form-group">
								<label>
									Verify Password
								</label>
								<input name="VPASSWORD"  class="form-control" type="password"  />
							</div>


						<div class="form-group">
								<label>
									Address
								</label>
								<input name="ADDRESS"  class="form-control" type="text"  />
							</div>

							<div class="form-group">
								<label>
									Date of birth
								</label>
								<input name="DOB"  class="form-control" type="date"  />
							</div>

							<div class="text-center">
								<button class="btn btn-success" type="submit" name="ADD">
									Submit
								</button>
							</div>
						</form>
					</div>
				</div>
				<!--  -->
			</div>
			<div class="col-sm-4">
				<span class="empty-column"></span>
			</div>
		</div>
	</div>
</div>
</div>

</body>

</html>
