<?php
$con = mysqli_connect('localhost','root');

	if ($con) {
	mysqli_select_db($con,'examination');
    $q = "select id,unit_name,url from unit where unit_sub_id='".$_POST['id']."'";
		 //echo $q;
     //exit;
		$result = mysqli_query($con,$q);

		$num = mysqli_num_rows($result);

		 if ($num>0) {
		 	while ($ans=$result->fetch_array(MYSQLI_ASSOC)) {
			$data2[]=$ans;
		}
     // print_r($data2);
    $path['result']=$data2;
    echo json_encode($path);
    
 	}
 }
?>