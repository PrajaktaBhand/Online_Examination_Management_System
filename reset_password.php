<?php 
	
	session_start();
	$con = mysqli_connect('localhost','root');

	if ($con) {
		mysqli_select_db($con,'examination');
		//print_r($_POST);exit;
		if (isset($_POST['submitPassword'])) {
			if (isset($_POST['token'])) {
				$token = $_POST['token'];
				$newpassword = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				//print_r($_POST);exit;
					if ($newpassword == $cpassword) {
						$updatequery = "update signin set password ='$newpassword',cpassword='$cpassword' where token = '$token'";
				
						$iquery = mysqli_query($con,$updatequery);
						if ($iquery) {
							$_SESSION['passmsg'] = "Your password has been updated";
							header('location:index.php');
						}else{
							$_SESSION['passmsg'] = "Your password is not updated";	
						}
					}else{
						echo "password is not matching";
					}			
			}
		}
	}else{
		echo "no connection";
	}
 ?>

 	<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Examination</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.jpg" rel="icon">
  <link href="assets/img/logo1.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!--script src="assets/js/validation.js" type="text/javascript"></script-->

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>


 	<header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="http://localhost/personalproject/index.php"><span>Online Examination (SKNSITS)</span></a></h1>
      </div>
	</div>
  </header><!-- End Header -->
	<div class="container"  style="margin-top: 70px" id="resetmodel" role="dialog">
    <div class="modal-dialog modal-sm-4">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="margin-left: -337px">Reset Password</h4>
        </div>
        <div class="modal-body">
			<form class="form-horizontal" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
				<p><?php if(isset($_SESSION['passmsg'])){
					echo $_SESSION['passmsg'];
				}else{
					echo "";
				}?></p>
				
				<div class="form-group">
					<label class="col-sm-4 control-label" for="password">New Password:</label>
					<div class="col-sm-8">
						<input class="form-control" name="password" id="password" type="password" required>
					</div>
					<span class="error" ></span>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label" for="cpaasword">Confirm Password</label>
					<div class="col-sm-8">
						<input class="form-control" name="cpassword" id="cpassword" type="password" required>
					</div>
					<span class="error" ></span>
				</div>
				<div class="form-group">
				<div class="col-sm-4"></div>
				<div class="col-sm-5">
				<input class="form-control" name="token" id="token" type="hidden" value="<?php echo $token = (!empty($_GET['token']))? $_GET['token'] : '';?>">
				<button type="submit" class="btn btn-success" name="submitPassword" value="submitPassword">Submit</button>
				<button type="reset" class="btn btn-primary" >Reset</button>

				</div></div>
			</form>
		</div>
        
        </div>
      </div>
    </div>
<?php 
	require_once('common/footer.php');
 ?>

	

