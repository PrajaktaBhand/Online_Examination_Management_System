<?php 
	require_once('common/header.php');
	session_start();
	$con = mysqli_connect('localhost','root');

	if ($con) {
		echo"connection successfull";
	}else{
		echo "no connection";
	}
	//print_r($_POST);exit;
	mysqli_select_db($con,'examination');
	if (isset($_POST['submit'])) {
		$email = $_POST['useremail'];
		$emailquery = "select * from signin where email='$email'";
		$query = mysqli_query($con,$emailquery);
		$emailcount = mysqli_num_rows($query);
		if ($emailcount) {
			$userdata = mysqli_fetch_array($query);
			$username = $userdata['username'];
			$token = $userdata['token'];
			$subject = "Email Activation";
			$body = "hii, $username. click here to change your password .http://localhost/personalproject/reset_password.php?token=$token";
			$sender_email = "From: chaudharin550@gmail.com";

			if (mail($email,$subject,$body,$sender_email)) {
				$_SESSION['msg'] = "check your email to activate account $email";
				header("location:http://localhost/personalproject/recover_email.php");
			}else{
				echo "email sending fail";
			}
			
			}else{
				echo "no email found";
			}
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


 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#msg').css('display','none');
 		$('#submit').click(function(){
 			$('#msg').css('display','block');
 		});
 	});
 </script>
 <span id="msg">
 	<?php if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
				}else{
					echo "";
				}?>

 </span>
 		
	<div class="container"  style="margin-top: 70px" id="recovermodel" role="dialog">
    <div class="modal-dialog modal-sm-4">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" style="margin-left: -337px">Forgot Password</h4>
        </div>
        <div class="modal-body">
			<form id="recover" class="form-horizontal" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
				
				<div class="form-group">
					<label class="col-sm-3 control-label" for="email">Email:</label>
					<div class="col-sm-8">
						<input class="form-control" name="useremail" id="email" type="email" required>
					</div>
					<span class="error" ></span>
				</div>
				<div class="form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<button type="submit" class="btn btn-success" id="submit" name="submit" >Send Email</button>
				<button type="reset" class="btn btn-primary" id="reset" >Reset</button>

				</div></div>
			</form>
		</div>
        
        </div>
      </div>
    </div>
<?php 
	require_once('common/footer.php');
 ?>

	

