<?php 
  session_start();
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
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet"/>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#myModal').modal('hide');
      $('input[name="option"]').change(function(){
        $('#myModal').modal('hide');
        $('#result').val( this.value );
    })
    var countdown = 30 * 60 * 10;
    var timerId = setInterval(function(){
    countdown -= 10;
    var min = Math.floor(countdown / (60 * 10));
    var sec = Math.floor((countdown - (min * 60 * 10)) / 10);
    if (countdown <= 0) {
    $('#myModal').modal('show');
    clearInterval(timerId);

  } else {
     $('#myModal').modal('hide');
     $("#countTime").html(min + " : " + sec);
  }
    }, 10);

    /*var form1 = document.getElementById("question1");
     form1.onsubmit = function(){
      alert('123');
    event.preventDefault(); // avoid to execute the actual submit of the form.
    //alert('123');
    $( "form#question" ).submit(); 
    var form = $("#question");
    
    alert(form);
    alert(form.serialize());
    //console.log(form);
    $.ajax({
           type: "POST",
           url: 'http://localhost/personalproject/checked.php',
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           {
            alert(data);
            return false;
           }
         });
  };*/
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



<div id="page-wrap" style="margin-top: 80px;margin-left: 0px">
        <div style="text-align: center;background-color:green;margin-left: -50px">
            <h1 style="color: white"><u>ALL THE BEST</u></h1>
            <span id="countTime" style="font-size:30px;font-weight: bold;color: red"></span>

        </div >
        <div class="container">
          <div class="card m-auto d-block">
            <div style="text-align: center;border:2px solid black; width:30%;margin-left: 33%">
            <h2>**INSTRUCTIONS**</h2>
              <p style="text-align: left;margin-left: 30px">1.All questions are compulsory<br>2.you have 30 min to solve.</p>
            </div>
                <form id="question" class="form-horizontal" method="POST" action="checked.php">
                  <?php
                  if(!empty($course_id)){
                    $sub_id = $_POST['subject'];
                    $unit_id = $_POST['units'];
                    if(!empty($sub_id) && !empty($unit_id)){
                      for($i=1;$i<51;$i++){
                     $l = 1;
                  
                     $ansid = $i;

                     $sql1 = "SELECT * FROM `questions` WHERE `id` = $i and sub_id='".$sub_id."' and unit_id='".$unit_id."' ";
                      $result1 = mysqli_query($con, $sql1);
                        if (mysqli_num_rows($result1) > 0) {
                                while($row1 = mysqli_fetch_assoc($result1)) { 
                     
                      ?>        
                  <br>
                
                  <div class="card">
                     <br>
                     <p class="card-header">  <?php echo $i ." : ". $row1['question']; ?> </p>
                    
                     <?php
                        $sql = "SELECT * FROM `answers` WHERE `ans_id` = $i ";
                          $result = mysqli_query($con, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                      $ansid = $row['ans_id'];
                          ?>  
                           
                     <div class="card-block">
                        <input type="radio" name="quizcheck[<?php echo $ansid; ?>]" id="<?php echo $ansid; ?>" value="<?php echo $row['aid']; ?>" > <?php echo $row['answer']; ?> 
                        <br>
                     </div>
                     <?php 
                        } 
                      } 
                        $ansid = $ansid + $l;
                        } }}
                      }}
                        
                     ?>
                  </div>

                  <br>
                  <input type="submit" name="Submit" value="Submit" class="btn btn-success m-auto d-block"/>
                  <br>
               </form>
             
             
        </div>
      </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form id="question1" class="form-horizontal" method="POST" action="checked.php">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Warning!!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        Your Time Is Up.Please Sumbit Exam.
      </div>
      <div class="modal-footer">
        <button type="submit" name="Submit1"  class="btn btn-success" id="submit" value="Submit">Submit</button>
      </div>
    </form>
      </div>
  </div>
</div>
  </div>
</div> </div></div>
            

</div>            



    
        





