<!--<?php 
 /* session_start();
  if (!isset($_SESSION['username'])) {
  	header('location:logout.php');
  }
  print_r($_POST);
  exit();
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
  <script src="assets/js/common.js" type="text/javascript"></script>
  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet"/>
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

*/


  <?php
session_start();

   $con = mysqli_connect('localhost','root');
    // if($con){
    //  echo"connection";
    // }
    mysqli_select_db($con,'examination');
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
  .animateuse{
      animation: leelaanimate 0.5s infinite;
    }

@keyframes leelaanimate{
      0% { color: red },
      10% { color: yellow },
      20%{ color: blue }
      40% {color: green },
      50% { color: pink }
      60% { color: orange },
      80% {  color: black },
      100% {  color: brown }
    }
</style>

   </head>
   <body>
     <div class="container text-center" >
      <br><br>
      <h1 class="text-center text-success text-uppercase animateuse" > ThapaTechnical Quiz World</h1>
      <br><br><br><br>
      <table class="table text-center table-bordered table-hover">
        <tr>
          <th colspan="2" class="bg-dark"> <h1 class="text-white"> Results </h1></th>
          
        </tr>
        <tr>
            <td>
              Questions Attempted
            </td>

           <?php
         $counter = 0;
         $Resultans = 0;
            if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            // print_r($_POST);
            ?>

          <td>
            <?php
            echo "Out of 5, You have attempt ".$checked_count." option."; ?>
            </td>
        
            
            <?php
            // Loop to store and display values of individual checked checkbox.
            $selected = $_POST['quizcheck'];
            
            $q1= " select ans from questions ";
            $ansresults = mysqli_query($con,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) {
              // print_r($rows);
              $flag = $rows['ans'] == $selected[$i];
              
                  if($flag){
                    // echo "correct ans is ".$rows['ans']."<br>";        
                    $counter++;
                    $Resultans++;
                    // echo "Well Done! your ". $counter ." answer is correct <br><br>";
                  }else{
                    $counter++;
                    // echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
                  }         
                $i++;   
              }
              ?>
              
        
        <tr>
          <td>
            Your Total score
          </td>
          <td colspan="2">
        <?php 
              echo " Your score is ". $Resultans.".";
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
            $finalresult = " insert into usersession(name,u_q_id, u_a_id) values ('$name','5','$Resultans') ";
            $queryresult= mysqli_query($con,$finalresult); 
            // if($queryresult){
            //  echo "successssss";
            // }
            ?>


      </table>

        <a href="logout.php" class="btn btn-success"> LOGOUT </a>
      </div>
   </body>
</html>










 

<?php

session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

 $con = mysqli_connect('localhost','root');
    if($con){
      echo"connection";
    }
   
    mysqli_select_db($con,'quizdatabases');


    if(isset($_POST['submit'])){

      if(!empty($_POST['quizcheck'])){

        $count = count($_POST['quizcheck']);
          echo "you count is". $count;

          $selected = $_POST['quizcheck'];
          print_r($selected);

          $q = " select * from question ";
          $query = mysqli_query($con,$q);

          $result = 0;
          $i = 1;
          while ( $rows = mysqli_fetch_array($query)) {
            
              print_r($rows['ans_id']);

              $stored  = $rows['ans_id'] == $selected[$i];

              if($stored){

                $result++;

              }

              $i++;

          }

          echo $result;

      }

    }


?> 
