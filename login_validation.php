<?php 
	session_start();
	$con = mysqli_connect('localhost','root');

	if ($con) {
		echo"connection successfull";
	}else{
		echo "no connection";
	}

mysqli_select_db($con,'examination');
$email = $_POST['useremail'];
$pass = $_POST['password'];
$q = "select * from signin where email='$email' && password ='$pass'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);
 if ($num==1) {
 	while ($ans=$result->fetch_array(MYSQLI_ASSOC)) {
		$data[]=$ans;
	}
	$_SESSION['id']= $data[0]['id'];
 	$_SESSION['username']= $data[0]['username'];
 	
 	header('location:userhome.php');
 }else{
 	
 	header('location:index.php');
 }

 ?>