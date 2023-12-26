<?php 
  require_once('../common/header.php');
 ?>
   <div class="container">
    <div class="height1"></div>
      <div class="box">
       <div class="logo mr-auto">
        <center>
          <h1 class="text-light"><a href="http://localhost/personalproject"><span>Savitribai Phule Pune University <br>Syllabus PDF </span></a></h1>
           <br><br>
           
          <form method='post' action='display_syllabus.php'>
          <label for="Course">Select Your Course</label>
            <select name="Course" id="Course">
            <option value="Computer">Computer</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Mechanical">Mechanical</option>
            <option value="Electrical">Electrical</option>
            <option value="E & TC">E & TC</option>
            </select>
          <br><br>


          <label for="Year">Select Your Year</label>
            <select name="Year" id="Year">
            <option value="firstyear">First Year</option>
            <option value="secondyear">Second Year</option>
            <option value="thirdyear">Third Year</option>
            <option value="fourthyear">Fourth Year</option>
            </select>
      </div>
        </center>
          <br><br>
          <center>
            <button name="button1"  type="submit" class="btn submit" data-toggle="modal"   data-target="#myModal">Submit</button>
          <center>
        </form>
     </div>
  </div>
</div>

