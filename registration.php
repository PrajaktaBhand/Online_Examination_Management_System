<div class="modal fade" id="registratiomodel" role="dialog" style="">
<div class="modal-dialog modal-sm-4">
<?php
mysqli_select_db($con,'examination');
if(isset($_POST['submit']))
{
	
$name = $_POST['username'];
$email = $_POST['useremail'];
$number = $_POST['phoneno'];
$course_id = $_POST['course'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];
 
$token = bin2hex(random_bytes(15));

$q = "select * from signin where username='$name' && password ='$pass'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);
 if ($num==1) {
 	echo "user exists";
 }else{
 	$qy="insert into signin(username,email,mobile_no,course_id,password,cpassword,token) values('$name','$email','$number','$course_id','$pass','$cpass','$token')";
 	echo "user successfully register please login";
 	mysqli_query($con,$qy);
 }
}
 ?>
      <div class="modal-content">
        <div class="modal-header">
        	<h4 class="modal-title text-center">Registration</h4>
          	<button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
			<form id="Registration" class="form-horizontal" method="POST" action="" >
				<div class="form-group">
					<label class="col-sm-3 control-label" for="username">Username:</label>
					<div class="col-sm-8">
						<input class="form-control" type="text" name="username" required id="username" autocomplete="off">
						<span  id="usernames" ></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="email">Email:</label>
					<div class="col-sm-8">
						<input class="form-control" name="useremail" id="useremail" type="text" required>
						<span class="error" id="useremails"></span>
				</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="phone no">Mobile No:</label>
					<div class="col-sm-8">
						<input type="text" maxlength="10" pattern="\d{10}" class="form-control" name="phoneno" id="phoneno"  required>
						<span class="error" id="phonenos"></span>
					</div>
				</div>
			    <div class="form-group" id="courseid">
				    <label for="course" class="col-sm-3 control-label">User Course:</label>
				    <div class="col-sm-8">

				       <select id="course" name="course" class="form-control" required>
				       	<option value="Select Course" selected>Select Course</option>
		    	<?php
	    			$con = mysqli_connect('localhost','root');

					mysqli_select_db($con,'examination');

					$q = "select id,Course_name from course";

					$result = mysqli_query($con,$q);
					
					$num = mysqli_num_rows($result);

					if ($num>0) {
							while ($ans=$result->fetch_array(MYSQLI_ASSOC)) 
							{
								$id= $ans['id'];
								$Course_name= $ans['Course_name'];
		  		?>
			    		<option value="<?php echo trim($id);?>"><?php echo trim($Course_name);?></option>    
		    	<?php
		    		}
	  			
				} else {
	  					echo "0 results";
				}
		    ?>
				    </select>
				    <span class="error" id="courses"></span>
				    </div>
				  </div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="password">Password:</label>
					<div class="col-sm-8">
						<input class="form-control" type="password"  name="password" required id="password">
						<span class="error" id="passwords" ></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label" for="confirm password">Confirm Password:</label>
					<div class="col-sm-8">
						<input class="form-control" type="password" name="cpassword" required id="cpassword">
						<span class="error" id="cpasswords" ></span>
					</div>
				</div>
				<div class="form-group">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
				<button  type="login" class="btn btn-login" id="login" data-toggle="modal" data-target="#loginmodel" >Login</button>
				<button name="submit" type="submit" class="btn btn-success" id="submit">Submit</button>
				<button type="reset" class="btn btn-submit" id="reset" >Reset</button>

				</div></div>
			</form>
		</div>
        
        </div>
      </div>
    </div>

    