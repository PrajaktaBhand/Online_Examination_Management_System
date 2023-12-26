<?php 
  require_once('quizepopup.php');
  //session_start();
  if (!isset($_SESSION['username'])) {
  	header('location:logout.php');
  }
  $con = mysqli_connect('localhost','root');
  
	if ($con) {
		mysqli_select_db($con,'examination');
    $q = "select course_id from signin where id='".$_SESSION['id']."'";
		
		$result = mysqli_query($con,$q);

		$num = mysqli_num_rows($result);

		 if ($num>0) {
		 	while ($ans=$result->fetch_array(MYSQLI_ASSOC)) {
				$data2[]=$ans;
			}
      $course_id= $data2[0]['course_id'];

      if(!empty($course_id) && $_GET['sem_id']){
            $q2 = "select s.id,s.sub_name from subject s join relational_table r on r.sub_id=s.id where r.sem_id IN (select id from semster where sem_course_id='".trim($course_id)."' and id='".trim($_GET['sem_id'])."')";
          
            $result2 = mysqli_query($con,$q2);

            $num2 = mysqli_num_rows($result2);
          if ($num2>0) {
            $ans2=array();
            $data3=array();
          while ($ans2=$result2->fetch_array(MYSQLI_ASSOC)) {
            $data3[] = $ans2;
            
          }
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
  <script src="assets/js/common.js" type="text/javascript"></script>
  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet"/>
  <script type="text/javascript">

         function myFunction() {
  var txt;
  var r = confirm("Exam Contain 50 Questions And 30 Min Time \r\n Are You Ready For Exam?");

  if (r == true) {
    window.location.href="http://localhost/personalproject/quize.php";
  } else {
   return false;
  }
}

     $(document).ready(function(){
      $(".btn-info").click(function(){
        var result = $(this).attr('id');
        $.ajax({
                 type: "POST",
                 url: 'http://localhost/personalproject/unit.php',
                  data: "id="+result+"",
                 success: function(data)
                 {
                  //console.log(data);=
                     var result = jQuery.parseJSON(data);
                     if(result['result'] != "" || result['result'] !=undefined){
                        $("#link").css('display','block');
                        //$("#onlineexambtn").css('display','block');
                        //console.log(result['result']);
                        var str = "<h3 style='margin-top:-5px;margin-left:138px;width:50px;font-weight:bold'>PPT's:</h3><ul>";
                        $.each( result['result'], function( key, value ) {
                          str +="<li>";
                          var new_str = value['unit_name'].charAt(0).toUpperCase() + value['unit_name'].slice(1);
                          str +="<a href='"+value['url']+"'><img src='http://localhost/personalproject/assets/img/ppt_icon.jpg' height='20px' width='20px'/>"+new_str+"</a>";
                          str +="</li>";
                        });
                        str +="</ul>";
                        str +="<span id='onlineexambtn1' class='btn btn-success'><a data-toggle='modal' data-target='#unitmodel' style='cursor: pointer;margin-left: 45px;font-weight: bold;''><img src='http://localhost/personalproject/assets/img/enroll.png' style='padding:0px 15px 5px 5px;' height='35px' weight='35px'/>Enroll Exam Now</a> </span>";
                        $("#link").html(str);

                     }
                     
                 }
               });

      });
      
  });  
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




<section id="hero" class="d-flex align-items-center" style="overflow: auto;">

    <div class="container" style="margin-top: -47px;">
      <div class="col-lg-6">
        <h3 ><img src="http://localhost/personalproject/assets/img/tenor.gif" height="100px" width="100px" />&nbsp;&nbsp;&nbsp;<b><u>Walkthorugh our Subjects</u></b></h3>
      <?php
        foreach($data3 as $key=>$val){
      ?>
          <button class="btn btn-info" id="<?php echo $val['id'];?>" style="cursor: pointer;margin-top: 10px"><?php echo $val['sub_name'];?></button><br>
        <?php }?>
      </div>
       <div class="col-lg-6" style="margin-top: 80px;text-align: center;font-size: 20px;" >
        <form action="home.php" method="POST">
          
          <div class="row" id="link" style="display:none;">
            
          </div>
              <!--div class="row" id="onlineexambtn" style="display:block;position:fixed;margin-top: 10%;">
               
                <span id="onlineexambtn1" class="btn btn-success"><a data-toggle="modal" data-target="#unitmodel" style="cursor: pointer;margin-left: 45px;font-weight: bold;"><img src="http://localhost/personalproject/assets/img/enroll.png" style="padding:0px 15px 5px 5px;" height='35px' weight='35px'/>Enroll Exam Now</a> </span>
                 
              </div-->
        </form>
        </div>
      </div>
     

    </div>
    </div>
   
  </section>

  <?php 

  	require_once('common/footer.php');

   ?>p