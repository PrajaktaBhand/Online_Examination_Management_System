<script type="text/javascript">
  $(document).ready(function() { 
     $("#syallbus").submit(function(event) {
          /* stop form from submitting normally */
          event.preventDefault();
          /* get some values from elements on the page: */
          var postData = $(this);
          /* Send the data using post */
           $.ajax({
            type: "post",
            url: "http://localhost/personalproject/services/display_syllabus.php",
            data: postData.serialize(),
            success: function(data) {
               var result = jQuery.parseJSON(data);
               window.location.href=result['url'];
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        })
      });
     $("#timetable").submit(function(event) {
          /* stop form from submitting normally */
          event.preventDefault();
          /* get some values from elements on the page: */
          var postData1 = $(this);
          /* Send the data using post */
           $.ajax({
            type: "post",
            url: "http://localhost/personalproject/services/display_timetable.php",
            data: postData1.serialize(),
            success: function(dataresponse) {
              
               var result = jQuery.parseJSON(dataresponse);
               window.location.href=result['url'];
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        })
      });

  });
</script>
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Provide pleasure as deserving</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Online examination system provides digital platform for student as well as teachers to provide essential study material and easy to conduct exam.It is beneficial to display the result of exammination.
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Through the vision of Teachers</h4>
                <p>It is easy for any Teacher to provide syllabus or to take online Examination.</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Through the vision of Students</h4>
                <p>Students can easily get soft copies of study material and give exam  as per instruction given by teacher.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Check out the great services we offer</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-laptop"></i></div>
              <h4 class="title"><a href="services/step.php">Online Exam</a></h4>
              <p class="description">Here you can get stpes to complete online exam.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a data-toggle="modal" data-target="#syllabusmodel" style="cursor: pointer;">Syllabus</a></h4>
              <p class="description">Here you can get syllabus as per current year and course.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Notification About Exam</a></h4>
              <p class="description">Here you can get notification about current and next exam activities. </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a data-toggle="modal" data-target="#timetablemodel" style="cursor: pointer;">Timetable as per course</a></h4>
              <p class="description">Here you can get Timetable of subjects as per current year and course.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Our team is always here to help</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/team/ajay.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ajay Yashod</h4>
                  <span>Frontend Developer</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/team/aishwarya.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Aishwarya Gharat</h4>
                  <span>Frontend Developer</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/team/nikhil1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nikhil Caudhari</h4>
                  <span>Backend Developer</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="member">
              <img src="assets/img/team/Prajakta.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Prajakta Bhand</h4>
                  <span>Frontend Developer</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    
    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
          <p>Contact us the get started</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Sinhagad campus, Kusgaon, Lonavala, Maharashtra 410401</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>sknsits@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+912114673393</p>
              </div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15114.331360307364!2d73.4288267!3d18.7274856!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7d950c2be2c7fdd8!2sSKN%20SINHGAD%20INSTITUTE%20OF%20TECHNOLOGY%20AND%20SCIENCE%20-%5BSKNSITS%5D%20LONAVALA%2C%20PUNE!5e0!3m2!1sen!2sin!4v1599719856259!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              <!--iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe-->
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  <div class="modal fade" id="syllabusmodel" role="dialog" style="">
    <div class="modal-dialog modal-sm-4">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center">Syllabus</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        
      <form id="syallbus" class="form-horizontal" method="POST">
    
          <div class="form-group" id="courseid">
            <label for="course" class="col-sm-4 control-label">Select Course:</label>
            <div class="col-sm-6">

               <select id="course" name="course" class="form-control" required>
                <option value="Select Course" selected>Select Course</option>
          <?php
            $con = mysqli_connect('localhost','root');

          mysqli_select_db($con,'examination');

          $q = "select id,Course_name from course";

          $result = mysqli_query($con,$q);
          
          $num = mysqli_num_rows($result);

          if ($num>0) {
              while ($ans=$result->fetch_array(MYSQLI_ASSOC)) 
              {
                $id= $ans['id'];
                $Course_name= $ans['Course_name'];
          ?>
              <option value="<?php echo trim($id);?>"><?php echo trim($Course_name);?></option>    
          <?php
            }
          
        } else {
              echo "0 results";
        }
        ?>
            </select>
            </div>
            <span class="error" ></span>
        </div>

         <div class="form-group" id="courseid">
            <label for="year" class="col-sm-4 control-label">Select Year:</label>
            <div class="col-sm-6">

               <select id="year" name="year" class="form-control" required>
                <option value="Select Year" selected>Select Year</option>
                <option value="First Year" >First Year</option>
                <option value="Second Year" >Second Year</option>
                <option value="Third Year" >Third Year</option>
                <option value="Fourth Year">Fourth Year</option>
            </select>
            </div>
            <span class="error" ></span>
        </div>

        <div class="form-group">
        <div class="col-sm-4"></div>
        <div class="col-sm-6">
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-submit" id="reset" >Reset</button>

        </div></div>
      </form>
    </div>
        
        </div>
      </div>
    </div>

  <div class="modal fade" id="timetablemodel" role="dialog" style="">
    <div class="modal-dialog modal-sm-4">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center">Timetable</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        
      <form id="timetable" class="form-horizontal" method="POST">
    
          <div class="form-group" id="courseid">
            <label for="course" class="col-sm-4 control-label">Select Course:</label>
            <div class="col-sm-6">

               <select id="course" name="course" class="form-control" required>
                <option value="Select Course" selected>Select Course</option>
          <?php
            $con = mysqli_connect('localhost','root');

          mysqli_select_db($con,'examination');

          $q = "select id,Course_name from course";

          $result = mysqli_query($con,$q);
          
          $num = mysqli_num_rows($result);

          if ($num>0) {
              while ($ans=$result->fetch_array(MYSQLI_ASSOC)) 
              {
                $id= $ans['id'];
                $Course_name= $ans['Course_name'];
          ?>
              <option value="<?php echo trim($id);?>"><?php echo trim($Course_name);?></option>    
          <?php
            }
          
        } else {
              echo "0 results";
        }
        ?>
            </select>
            </div>
            <span class="error" ></span>
        </div>

         <div class="form-group" id="courseid">
            <label for="semester" class="col-sm-4 control-label">Select Semester:</label>
            <div class="col-sm-6">

               <select id="semester" name="semester" class="form-control" required>
                <option value="Select sem" selected>Select semester</option>
                <option value="sem I" >Sem I</option>
                <option value="sem II" >Sem II</option>
                <option value="sem III" >Sem III</option>
                <option value="sem IV">Sem IV</option>
                <option value="sem V">Sem V</option>
                <option value="sem VI">Sem VI</option>
                <option value="sem VII">Sem VII</option>
                <option value="sem VIII">Sem VIII</option>
            </select>
            </div>
            <span class="error" ></span>
        </div>

        <div class="form-group">
        <div class="col-sm-4"></div>
        <div class="col-sm-6">
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-submit" id="reset" >Reset</button>

        </div></div>
      </form>
    </div>
        
        </div>
      </div>
    </div>
  </main><!-- End #main -->



