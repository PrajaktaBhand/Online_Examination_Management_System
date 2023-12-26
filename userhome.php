<?php 
  session_start();
  if (!isset($_SESSION['username'])) {
  	header('location:logout.php');
  }
  $con = mysqli_connect('localhost','root');

	if ($con) {
		mysqli_select_db($con,'examination');

      $q = "select c.Course_name from signin s inner join course c on s.course_id=c.id where s.id='".$_SESSION['id']."'";

      $result = mysqli_query($con,$q);

      $num = mysqli_num_rows($result);

     if ($num==1) {
      while ($ans=$result->fetch_array(MYSQLI_ASSOC)) {
        $data[]=$ans;
      }
      $course= $data[0]['Course_name'];
      
     }
     $s = "select s.id,s.sem_name from semster s inner join signin c on s.sem_course_id=c.course_id where c.id='".$_SESSION['id']."'";
      $res = mysqli_query($con,$s);

      $number = mysqli_num_rows($res);

     if ($number>0) {
      while ($answer=$res->fetch_array(MYSQLI_ASSOC)) {
        $data1[]=$answer;
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
  </header><!-- End Header -->
  		<section id="services" class="services section-bg" style="margin-top: 45px">

      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Select the semster of <?php echo $course;  ?> </h2>
          
        </div>

        <div class="row">
        <?php for($i=0;$i<count($data1);$i++)
          {
          ?>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <?php $sem_id = $data1[$i]['id'];?>
              <h4 class="title"><a href="usersubject.php?sem_id=<?php echo $sem_id;?>"><?php echo $data1[$i]['sem_name'];?></a></h4>
       		 </div>
          </div>
        <?php }?>
        </div>

        </div>

      </div>
    </section><!-- End Services Section -->
  </div>
  	<!-- ======= Footer ======= -->
  <?php
    require_once('common/footer.php');

    ?>