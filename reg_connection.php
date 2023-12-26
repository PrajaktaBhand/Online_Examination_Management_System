<?php 
	session_start();
	header('location:index.php');

	$con = mysqli_connect('localhost','root');

	if ($con) {
		echo"connection successfull";
	}else{
		echo "no connection";
	}

mysqli_select_db($con,'examination');
$name = $_POST['username'];
$email = $_POST['useremail'];
$number = $_POST['phoneno'];
$course_id = $_POST['course'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

$q = "select * from signin where username='$name' && password ='$pass'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);
 if ($num==1) {
 	echo "user exists";
 }else{
 	$qy="insert into signin(username,email,mobile_no,course_id,password,cpassword) values('$name','$email','$number','$course_id','$pass','$cpass')";
 	echo "user successfully register please login";
 	mysqli_query($con,$qy);
 }

 ?>