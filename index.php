<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "admin@phppot_samples.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>isaac Resume </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic|Raleway:400,300,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>






<body data-spy="scroll" data-offset="64" data-target="#section-topbar">

  <div id="section-topbar">
    <div id="topbar-inner">
      <div class="container">
        <div class="row">
          <div class="dropdown">
            <ul id="nav" class="nav">
              <li class="menu-item"><a class="smothscroll" href="#about" title="About"><i class="fa fa-user"></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#resume" title="Resume"><i class="fa fa-file-text-o"></i></a></li>
              <li class="menu-item"><a class="smothscroll" href="#contact" title="Contact"><i class="fa fa-envelope"></i></a></li>
            </ul>
            <!--/ uL#nav -->
          </div>
          <!-- /.dropdown -->

          <div class="clear"></div>
        </div>
        <!--/.row -->
      </div>
      <!--/.container -->

      <div class="clear"></div>
    </div>
    <!--/ #topbar-inner -->
  </div>
  <!--/ #section-topbar -->

  <div id="headerwrap">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-12">
          <h1>Isaac Akinyele</h1>
          <h3> UX/UI & Web Designer | isaacwondas@gmail.com</h3>
        </div>
        <!--/.col-lg-12 -->
      </div>
      <!--/.row -->
    </div>
    <!--/.container -->
  </div>
  <!--/.#headerwrap -->


  <section id="about" name="about">
    <div id="intro">
      <div class="container">
        <div class="row">

          <div class="col-lg-2 col-lg-offset-1">
            <h5>ABOUT</h5>
          </div>
          <div class="col-lg-6">
            <p>I'm web designer & UX/UI designer at Zuri Internship. I'm interested in all kinds of visual communication, but my major focus is on designing web, mobile & tablet interfaces. I also have skills in other fields like
              branding, icon design or web development.</p>
          </div>
          

        </div>
        <!--/.row -->
      </div>
      <!--/.container -->
    </div>
    <!--/ #intro -->
  </section>


  <section id="resume" name="resume">
    <!--EDUCATION DESCRIPTION -->
    <div class="container desc">
      <div class="row">

        <div class="col-lg-2 col-lg-offset-1">
          <h5>EDUCATION</h5>
        </div>
        <div class="col-lg-6">
          <p>
            <t>iNTERN </t><br/> @ Zuri.team <br/>
            <i>8 Month Programme</i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>ENDING IN 2022</sm><br/>
            <imp>
              <sm>IN PROGRESS</sm>
            </imp>
          </p>
        </div>

        <div class="col-lg-6 col-lg-offset-3">
          <p>
            <t>Degree in Computer Science</t><br/> TASUED <br/>
            <i>4 Years Course</i>
          </p>
        </div>
        <div class="col-lg-3">
          <p>
            <sm>JUNE 2019</sm>
          </p>
        </div>

      </div>
      <!--/.row -->
      <br>
      <hr>
    </div>
    <!--/.container -->
  </section>


  <!--WORK DESCRIPTION -->
  <div class="container desc">
    <div class="row">

      <div class="col-lg-2 col-lg-offset-1">
        <h5>WORK</h5>
      </div>
      <div class="col-lg-6">
        <p>
          <t>ICT instructor</t><br/> New Horizon Nigeria <br/>
        </p>
        <p>
          <more>isaac Akinyele is seasonal and smart learning ICT instructor at New Horizon Nigeria, Lagos branch taking Graphics, Scratch Programming for kids, with a vast Experience </more>
        </p>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>NOVEMBER 2021 - CURRENT</sm>
        </p>
      </div>

      <div class="col-lg-6 col-lg-offset-3">
        <p>
          <t>IT Support</t><br/> Federal Medical Center, Lokoja <br/>
        </p>
        <p>
          <more>i served at Federal Medical Center, Lokoja. for the mandatory NYSC Scheme, which i learnt about networking, and software management and customer care services which rally helped me in my new job </more>
        </p>
      </div>
      <div class="col-lg-3">
        <p>
          <sm>OCTOBER 2019 - OCTOBER 2021</sm>
        </p>
      </div>
    </div>
    <!--/.row -->
    <br>
    <hr>
  </div>
  <!--/.container -->


  

  <!--SKILLS DESCRIPTION -->
  <div id="skillswrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-lg-offset-1">
          <h5>SKILLS</h5>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="javascript" height="130" width="130"></canvas>
          <p>Javascript</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="bootstrap" height="130" width="130"></canvas>
          <p>Bootstrap</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="wordpress" height="130" width="130"></canvas>
          <p>Wordpress</p>
          <br>
        </div>

        <div class="col-lg-3 col-lg-offset-3 centered">
          <canvas id="html" height="130" width="130"></canvas>
          <p>HTML/CSS</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="photoshop" height="130" width="130"></canvas>
          <p>Photoshop</p>
          <br>
        </div>
        <div class="col-lg-3 centered">
          <canvas id="illustrator" height="130" width="130"></canvas>
          <p>Illustrator</p>
          <br>
        </div>

      </div>
      <!--/.row -->
      <br>
    </div>
    <!--/.container -->
  </div>
  <!--/ #skillswrap -->



  <section id="contact" name="contact">
    <!--FOOTER DESCRIPTION -->
    <div id="footwrap">
      <div class="container">
        <div class="row">

          <div class="col-lg-2">
            <h5>CONTACT</h5>
          </div>
          <div class="col-lg-4">
            <p>
              <t>Email</t><br/> isaacwondas@gmail.com <br/>
            </p>
            <p>
              <t>Adress</t><br/> No. 37 Fola Agoro <br/> Postal 23892 <br/> Lagos, Nigeria. <br/>
            </p>
            <p>
              <t>Phone</t><br/> +234 8182 522 718 <br/>
            </p>
            <p>
              <t>Social Links</t><br/>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
              <a href="#"><i class="fa fa-apple"></i></a>
            </p>
          </div>
          <div class="col-lg-6">
            <p>
              <sm>CONTACT FORM</sm>
            </p>




            <div class="contact-form php-mail-form">
              <form name="frmContact" id="" frmContact"" method="post"
                  action="" enctype="multipart/form-data"
                  onsubmit="return validateContactForm()">
      
                  <div class="form-group">
                      <label style="padding-top: 20px;">Name</label> <span
                          id="userName-info" class="info"></span><br /> <input
                          type="text" class="form-control" name="userName"
                          id="userName" />
                  </div>
                  <div class="form-group">
                      <label>Email</label> <span id="userEmail-info"
                          class="info"></span><br /> <input type="text"
                          class="form-control" name="userEmail" id="userEmail" />
                  </div>
                  <div class="form-group">
                      <label>Subject</label> <span id="subject-info"
                          class="info"></span><br /> <input type="text"
                          class="form-control" name="subject" id="subject" />
                  </div>
                  <div class="form-group">
                      <label>Message</label> <span id="userMessage-info"
                          class="info"></span><br />
                      <textarea name="content" id="content"
                          class="form-control" cols="60" rows="6"></textarea>
                  </div>
                  <div>
                    <div class="form-send">
                      <input type="submit" name="send" class="btn btn-large"
                          value="Send" />
                          </div>
      
                      <div id="statusMessage"> 
                              <?php
                              if (! empty($message)) {
                                  ?>
                                  <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                              <?php
                              }
                              ?>
                          </div>
                  </div>
              </form>
          </div>
      
          <script src="https://code.jquery.com/jquery-2.1.1.min.js"
              type="text/javascript"></script>
          <script type="text/javascript">
              function validateContactForm() {
                  var valid = true;
      
                  $(".info").html("");
                  $(".input-field").css('border', '#e0dfdf 1px solid');
                  var userName = $("#userName").val();
                  var userEmail = $("#userEmail").val();
                  var subject = $("#subject").val();
                  var content = $("#content").val();
                  
                  if (userName == "") {
                      $("#userName-info").html("Required.");
                      $("#userName").css('border', '#e66262 1px solid');
                      valid = false;
                  }
                  if (userEmail == "") {
                      $("#userEmail-info").html("Required.");
                      $("#userEmail").css('border', '#e66262 1px solid');
                      valid = false;
                  }
                  if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
                  {
                      $("#userEmail-info").html("Invalid Email Address.");
                      $("#userEmail").css('border', '#e66262 1px solid');
                      valid = false;
                  }
      
                  if (subject == "") {
                      $("#subject-info").html("Required.");
                      $("#subject").css('border', '#e66262 1px solid');
                      valid = false;
                  }
                  if (content == "") {
                      $("#userMessage-info").html("Required.");
                      $("#content").css('border', '#e66262 1px solid');
                      valid = false;
                  }
                  return valid;
              }
      </script>


          </div>
        </div>
        <!--row -->
      </div>
      <!--container -->
    </div>
    <!-- footer -->
  </section>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Wondas</strong>. All Rights Reserved
      </p>
      <div class="credits">
        
        Created by Isaac Wondas <a href="https://templatemag.com/">wondasMedia</a>
      </div>
    </div>
  </div>

  
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>
  <script src="lib/easing/easing.min.js"></script>

 
  <script src="js/main.js"></script>

</body>
</html>
