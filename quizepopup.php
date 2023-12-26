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
        //print_r($ans);
        $data2[]=$ans;
      }
      $course_id= $data2[0]['course_id'];
      if(!empty($course_id)){
        
            $q2 = "select s.id,s.sub_name from relational_table r left join subject s on r.sub_id=s.id where r.sub_id IN (select id from semster where sem_course_id='".trim($course_id)."')";
            $result2 = mysqli_query($con,$q2);

            $num2 = mysqli_num_rows($result2);

          if ($num2>0) {
          while ($ans2=$result2->fetch_array(MYSQLI_ASSOC)) {
            
            $data3[$ans2['id']]=$ans2['sub_name'];
          }
        }
        
      }
    
     }
  }else{
    echo "no connection";
  }
  ?>  
  
<div class="modal fade" id="unitmodel" role="dialog" style="">
    <div class="modal-dialog modal-sm-4">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center">Select Unit</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
      <form id="unit" class="form-horizontal" method="POST" action="http://localhost/personalproject/quize.php">
        <div class="form-group">
          <label class="col-sm-3 control-label" for="unit">select subject</label>
          <div class="col-sm-8">
            <span  id="error" ></span>
            <select name="subject" id="subject" class="form-control" required>
              <option value="" selected>Select Subject</option>
            <?php
              foreach($data3 as $key=>$val){
            ?>
              <option value="<?php echo $key;?>"><?php echo $val;?></option>
            <?php }?>
            </select>
          </div>
            <!--input class="form-control" type="hidden" name="unit" required id="unit" autocomplete="off"-->
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label" for="unit">select unit</label>
          <div class="col-sm-8">
            <span  id="error" ></span>
            <select name="units" id="units" class="form-control" required>
            <option value="" selected>Select Unit</option>
            <option value="1">Unit 1</option>
            <option value="2">Unit 2</option>
            <option value="3">Unit 3</option>
            <option value="4">Unit 4</option>
            <option value="5">Unit 5</option>
            <option value="6">Unit 6</option>
            </select>
          </div>
            <!--input class="form-control" type="hidden" name="unit" required id="unit" autocomplete="off"-->
        </div>
        
        <div class="form-group">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
        
        <button type="submit" class="btn btn-success" id="submit">Submit</button>
        <button type="reset" class="btn btn-submit" id="reset" >Reset</button>

          </div>
        </div>
      </form>
    </div>
        
        </div>
      </div>
    </div>

    