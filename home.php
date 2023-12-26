<?php
   session_start();
   
   if(!isset($_SESSION['username'])){
   	header('location:index.php');
   }
   
   
   $con = mysqli_connect('localhost','root');
  
   	mysqli_select_db($con,'examination');
   
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
  <script type="text/javascript">
      $('input[name="option"]').change(function(){
   $('#result').val( this.value );
})
      var countdown = 30 * 60 * 1000;
var timerId = setInterval(function(){
  countdown -= 1000;
  var min = Math.floor(countdown / (60 * 1000));
  var sec = Math.floor((countdown - (min * 60 * 1000)) / 1000);
  if (countdown <= 0) {
     alert("30 min!");
     clearInterval(timerId);
  } else {
     $("#countTime").html(min + " : " + sec);
  }

}, 1000);
  </script>
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

      <?php 

      $page1 = $_POST['page'];

      if($page1=="" ||  $page1==1){
         $page1 = 0;
      } else{
         $page1 = (($page1 * 1)-1);

      }

      ?>

      <div>
         <div class="container">
            <div class=" col-lg-12 text-center">
               <h3> <a href="#" class="text-uppercase text-warning"> <?php echo $_SESSION['username']; ?>,</a> All the best!!! </h3>
            </div>
            <br>
            <div class="col-lg-8 d-block m-auto bg-light quizsetting ">
               <div class="card">
                  <p class="card-header text-center" > <?php echo $_SESSION['username']; ?>, Exam contain 50 Questions And 50 Min Time. <i class="fas fa-thumbs-up"></i>	 </p>
               </div>
               <br>
               <form action="checked.php" method="post">
                  <?php
                     for($i=1;$i<6;$i++){
                     $l = 1;
                  
                     $ansid = $i;

                     $sql1 = "SELECT * FROM `questions` WHERE `q_id` = $i ";
                     	$result1 = mysqli_query($con, $sql1);
                     		if (mysqli_num_rows($result1) > 0) {
                     						while($row1 = mysqli_fetch_assoc($result1)) {
                     	?>				
                  <br>
                  <div class="card">
                     <br>
                     <p class="card-header">  <?php echo $i ." : ". $row1['question']; ?> </p>
                    
                     <?php
                        $sql = "SELECT * FROM `answers` WHERE `q_id` = $i limit $page1, 1";
                        	$result = mysqli_query($con, $sql);
                        		if (mysqli_num_rows($result) > 0) {
                        						while($row = mysqli_fetch_assoc($result)) {
                        	?>	
                           
                     <div class="card-block">
                        <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $ansid; ?>" value="<?php echo $row['a_id']; ?>" > <?php echo $row['ans']; ?> 
                        <br>
                     </div>
                     <?php
                        
                        } } 
                        $ansid = $ansid + $l;
                        } }}
                        
                     ?>
                  </div>

                  <br>
                  <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
               </form>
               <p id="letc"></p>
            </div>
            <br>
            <a href="logout.php" class="btn btn-primary d-block m-auto text-white" > Logout </a> <br>
         </div>
         <
         
      


      <?php

      $startlimit  = 0;
      $q =" select q_id from answers";
      $query = mysqli_query($con,$q);
      $lastpage = mysqli_num_rows($query);

      $totalpage = ceil($lastpage / 2);
      ?>
      <div class="m-auto"><br>
         <ul class="pagination">
      <?php
      for($i=1; $i<=$totalpage; $i++){
         ?>
      
      <li class="float-left list-unstyled page-item" > <a href="home.php?page=<?php echo $i; ?>" class="page-link">  <?php  echo $i;  ?> </a> </li>
      
       <?php  
           }
        ?>
        </ul>
      </div>



   </body>
</html>
