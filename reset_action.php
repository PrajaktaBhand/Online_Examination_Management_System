<?php 
	require_once('common/header.php');
	session_start();
	$con = mysqli_connect('localhost','root');

	if ($con) {
		mysqli_select_db($con,'examination');
		//print_r($_POST);exit;
		if (isset($_POST['submitPassword'])) {
			echo $_GET['token'];exit;
			if (isset($_GET['token'])) {
				$token = $_GET['token'];
				$newpassword = $_POST['password'];
				$cpassword = $_POST['cpassword'];
				//print_r($_POST);exit;
					if ($newpassword == $cpassword) {
						$updatequery = "update signin set password ='$newpassword' where token = '$token'";
						echo $updatequery;
						exit();
						$iquery = mysqli_query($con,$updatequery);
						if ($iquery) {
							$_SESSION['msg'] = "Your password has been updated";
						}else{
							$_SESSION['passmsg'] = "Your password is not updated";
							header('location:reset_password.php');
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