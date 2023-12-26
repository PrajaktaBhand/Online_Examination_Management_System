<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:logout.php');
}
$con = mysqli_connect('localhost','root');
if ($con) {
	mysqli_select_db($con,'examination');
  //print_r($_POST);
  //exit;
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
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="assets/js/common.js" type="text/javascript"></script>
  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet"/>
  </head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="http://localhost/personalproject/"><span>Online Examination (SKNSITS)</span></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          

          <li class="get-started" style="margin: 10px">
            <h3>hey,<?php echo $_SESSION['username'];?></h3>
          </li>

          <li class="get-started" style="margin-right: 0px">
            <a href="logout.php" style="cursor: pointer;">logout</a>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
   <body>
    <br><br><br><br><br><br><br>
     <div class="container text-center">
      <h1>THANK YOU!!</h1>
      <table class="table text-center table-bordered table-hover">
      	<tr>
      		<th colspan="2" class="bg-success"> <h1 class="text-white"> Results </h1></th>
      		
      	</tr>
      	<tr>
		      	<td>
		      		Questions Attempted
		      	</td>
	         <?php
            $counter = 0;
            $result = 0;
            if(isset($_POST['Submit'])){
              //echo "if";
            if(!empty($_POST['quizcheck'])) {
              //echo "if2";
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            //echo $checked_count;
            ?>
        	  <td>
            <?php
            echo "Out of 5, You have attempt ".$checked_count." option."; ?>
            </td>
            <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];
            //print_r($selected);
            $q1= "select ans_id from questions";
            $query = mysqli_query($con,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($query)) {
              //print_r($rows);
              //echo $selected[$i];
              if(!empty($rows['ans_id']) && !empty($selected[$i])){
                $checked = ($rows['ans_id'] == $selected[$i]);
            			if(!empty($checked)){
            				// echo "correct ans is ".$rows['ans']."<br>";				
            				$counter++;
            				$result++;
            				 //echo "Well Done! your ". $counter ." answer is correct <br><br>";
            			}else{
            				$counter++;
            				 //echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
            			}					
            		  $i++;		
                }
            	}
              //echo $result;
            	?>
            	
    		
    		<tr>
    			<td>
    				Your Total score
    			</td>
    			<td colspan="2">
	    	<?php 
	            echo " Your score is ".$result.".";
	            }
	            else{
	            echo "<b>Please Select Atleast One Option.</b>";
	            }
	            } 
	          ?>
	          </td>
            </tr>

            <?php 

            $name = $_SESSION['username'];
            $finalresult = " insert into user(username,totalques,attempt_question, answerscorrect) values ('$name',5,'$checked_count','$result') ";
            $queryresult= mysqli_query($con,$finalresult); 
            // if($queryresult){
            // 	echo "successssss";
            // }
            ?>


      </table>
      <a href="userhome.php" class="btn btn-success"> EXIT </a>
      </div>
      <?php 
        require_once('common/footer.php');
       ?>
   </body>
</html>












