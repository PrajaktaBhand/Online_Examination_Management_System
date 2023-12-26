<?php 
  $con = mysqli_connect('localhost','root');

  if ($con) {
    mysqli_select_db($con,'examination');

    $course1 = $_POST['course'];
    $sem1 = $_POST['semester'];

    $sql= "select image from class_timetable where class=$course1 and sem='$sem1'";
    
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
    // output data of each row
    $row = $result->fetch_assoc();
    //echo $row;
    $path['url']=$row['image'];
    echo json_encode($path);
    
    } else {
    echo "  0 results";
    }

    }else{
    echo "no connection";
    }
?>


