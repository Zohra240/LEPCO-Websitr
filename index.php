<?php


/**
	PatientName
	email
	CONTACT_NO
	comment
	submit
	
	**/
 


include("db.php");
if (isset($_POST['submit'])) {
    $userName = $_POST['PatientName'];
    $email = $_POST['email'];
    $contact = $_POST['CONTACT_NO'];
    $department= $_POST['depar'];
    $date = $_POST['DATE'];
    $time = $_POST['time'];
    $gender = $_POST['Gender'];
    $patient= $_POST['Patient'];
    $comment= $_POST['comment'];
	$flag = true;


    
	
	
	
		if(empty($userName))
		{
			echo "<script>alert('please enter your name!'); </script>";
			$flag = false;
		}
		if(!preg_match("/^[a-zA-Z\s]+$/" ,$userName))
		{
			echo "<script>alert('please enter only string'); </script>";
			$flag = false;
		}
		if(strlen($userName)>15)
		{
			echo "<script>alert('Your name is invalid'); </script>";
			$flag = false;
		}
		if(!preg_match('/^[0-9]*$/' , $contact))
		{
			echo "<script>alert('Only Mobile Number are allowed!'); </script>";
			$flag = false;
		}
		if(strlen($contact)>10)
		{
			echo "<script>alert('Your mobile number is too large please enter valid..'); </script> ";
			$flag = false;
		}
		if(strlen($email)>25)
		{
			echo "<script>alert('Your email address is too large! please enter a valid email..'); </script>";
			$flag = false;
		}
		if($flag){
			$query = "INSERT INTO appointment(name ,email, contact, department, date , time , gender , patient, comment) VALUES (
			'$userName' , '$email', '$contact', '$department', '$date' , '$time' , '$gender ', '$patient', '$comment')";
			$result = mysqli_query($conn, $query);
			if ($result > 0)
			{
				echo '<script> alert("You have successfully taken an appointment ") </script>';
			} else {
				echo '<script> alert("appointment failed ") </script>';
			}
		}
	}



		
  
  
  
  
  ?>







<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>LEPCO</title>
	<link href="img/title.png" rel="icon">

	<script src="js/jquery.slim.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="css/index.css" />


	 <!---<link href="remixicon/remixicon.css" rel="stylesheet"> -->
 
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

	
	
	
	<link rel="stylesheet" href="bootstrap/dist/css/animate.css" />
	<script type="text/javascript" src="bootstrap/dist/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


<style type="text/css"> 


/*==================== 
	contact 
====================== */


.contact .info {
  width: 100%;
  background: #fff;
}

.contact .info i {
  font-size: 20px;
  color: #1977cc;
  float: left;
  width: 44px;
  height: 44px;
  background: #d6e9fa;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #2c4964;
}

.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #4b7dab;
}

.contact .info .email, .contact .info .phone {
  margin-top: 40px;
}

.contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i {
  background: #1977cc;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  background: #fff;
}

.contact .php-email-form .form-group {
  padding-bottom: 8px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: left;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .error-message br + br {
  margin-top: 25px;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form input {
  height: 44px;
}

.contact .php-email-form textarea {
  padding: 10px 12px;
}

.contact .php-email-form button[type="submit"] {
  background: #1977cc;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #1c84e3;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}




.carousel-control-next, .carousel-control-prev{
	height:40px;
	width:40px;
	padding:12px;
	top:50%; 
	bottom:auto;
	transform:translateY(-50%); 
	background-color: #f47735; 
	}


.socials a:nth-child(1) {
background:#4169E1;
}
.socials a:nth-child(2) {
background:#1E90FF;
}


</style>



</head>

<body style="background-color:white;">
<div class="container">


<nav class="navbar navbar-expand-md bg-white" id="mynav">
  <div class="container">
   <a class="navbar-brand mylogo" href="index.php">
          <img src="img/1.png"   alt="" id="logo">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "  style="border-bottom:2px solid blue;"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><img src="img/home.png" alt=""  style="width:40px; height:30px;"/></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICES
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item text-primary" href="Touberclouse.php">About Touberclouse</a>
			<div class="dropdown-divider"></div>
            <a class="dropdown-item text-primary" href="Leprosy.php">About Leprosy</a>

          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          BRANCHES
          </a>
          <div class="dropdown-menu bg-white" >
            <a class="dropdown-item  text-primary" href="branches.php">Kabul Office</a>
			<div class="dropdown-divider"></div>
            <a class="dropdown-item  text-primary" href="branches.php">Mazar-e-sharif</a>
            <div class="dropdown-divider "></div>
            <a class="dropdown-item  text-primary" href="branches.php">Jaghory</a>
			<div class="dropdown-divider"></div>
            <a class="dropdown-item  text-primary" href="branches.php">Sharistan</a>
			<div class="dropdown-divider"></div>
            <a class="dropdown-item  text-primary" href="branches.php">Yakowlang</a>
			<div class="dropdown-divider"></div>
            <a class="dropdown-item  text-primary" href="branches.php">Panjaw</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About.php">ABOUT</a>
        </li>


  <form class="form-inline" action="action_page.php" style="padding-left:10px; margin-bottom: 18px;">

    
    
    <a class="btn btn-primary" data-toggle="modal" href="#" data-target="#myModal" name="check" id="btn" style="color:black;"><b>Check YourSelf</b></a>
	
		<!-- The Modal -->
	<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body center">
                Do you have any account??
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button class="btn btn-primary"><a href="login.php"  style="text-decoration:none;  color:white;">Yes</a></button>
				<button class="btn btn-primary"><a href="account.php"  style="text-decoration:none;  color:white;">No</a></button>
            </div>

        </div>
    </div>
</div>
</form>
<!-- the modal -->


      </ul>
    </div>
  </div>
</nav>

</div>


 <h2 class="text-center" style="margin-bottom:25px; margin-top:40px;  font-weight: 700;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">Welcome to<span style="border-bottom: 3px solid #1977cc; padding-bottom:9px"> LEPCO</span> WEBSITE</span></h2>
         <p class="text-center" style=" font-weight: 600;">Lepco does care about you and your family</p>

<!-- carousel -->
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" style="background-attachment:url(../img/slider1.jpeg)">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Protect our life <br>
               with  LEPCO   Clinic</h4>
              <p> LEPCO (Leprosy Control) is a dynamic website that will provide you services and <br>
					information about Tuberculosis and Leprosy diseases and its clinics.</p>
              </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="image/header.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Protect our life <br>
               with  LEPCO   Clinic</h4>
              <p> LEPCO (Leprosy Control) is a dynamic website that will provide you services and <br>
					information about Tuberculosis and Leprosy diseases and its clinics.</p>
            </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="img/branch/s2.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Protect our life <br>
               with  LEPCO   Clinic</h4>
                           <p> LEPCO (Leprosy Control) is a dynamic website that will provide you services and <br>
					information about Tuberculosis and Leprosy diseases and its clinics.</p>
              </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="image/slider1.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" style=" background-color: #1977cc;" > <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" style="background-color: #1977cc;"> <span class="carousel-control-next-icon" aria-hidden="true" ></span> <span class="sr-only">Next</span> </a> </div>
<!--End of slide show-->





<section id="why-us" class="why-us">
      <div class="container">

        <div class="row" style="padding-left:4%; padding-right:4%;"> 
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content" >
              <h4>How and when does Lepco starts its services in Afghanistan?</h4>
              <p>
During the 1980 large number of afghan refugees arrived in Pakistan because of the war in Afghanistan.
Among these refugees there were many lepers, the majority form one ethnic group, the Hazaras. The Hazaras are originally from Hazarajat, an isolated and mountainous area in central Afghanistan and makes up an estimate of 25% of the total population of Afghanistan.
              </p>
              <div class="text-center">
                <a href="Branches.php" class="more-btn">Learn More <i class="carousel-control-next-icon"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-test-tube"></i>
                    <h4>Touberclouse</h4>
                              <p> TB ( Tuberculosis )
Tuberculosis is a infectious disease caused by mycobacterium tuberculosis</p>
    <div class="text-center">
	  <a href="Touberclouse.php" style="color:#4169E1;">Learn more<i class="bx bx-chevron-right" style="color:#4169E1;"></i></a>
      </div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-paralysis-disability"></i>
                    <h4>Leprosy</h4>
                    <p>Leprosy is a chronic infectious disease caused by Mycrobacterium Leprae.</p>
					    <div class="text-center">
                 <a href="Leprosy.php" style="color:#4169E1;">Learn more<i class="bx bx-chevron-right" style="color:#4169E1;"></i></a>
        </div>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="icofont-injection-syringe"></i>
                    <h4>COVID(19)</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
					    <div class="text-center">
               <a href="Touberclouse.php" style="color:#4169E1;">Learn more<i class="bx bx-chevron-right" style="color:#4169E1;"></i></a>
     </div>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->





<!-------------------------------------------------------------------------------------->
	 <!-- ======= Doctors Section ======= -->
   	<div class="container" style="padding-left:5%; padding-right:5%;">
	 <div class="Doctors-title">
          <h2 class="text-center" id="doctor"  style="margin-bottom:25px;  font-weight: 700;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;"> Do<span style="border-bottom: 3px solid #1977cc; padding-bottom:9px">ct</span>ors </span></h2>
          <p style="text-align:center;">Now more about our experienced doctors:</p>
        </div>


	<div class="docprofile">
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="image/freshta.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Dr. Freshta</h4>
						<h6 style="margin-bottom:25px; color:#1977cc;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">Do<span style="border-bottom: 3px solid #41cbd4; padding-bottom:9px">ct</span>or</span></h6>
							<p class="card-text">Female doctor in Touberclouse section. <br /> Expert In Touberclouse and Leprosy Disease.</p>
					<div class="socials">
                        <a href="https://www.facebook.com/WHOAfghanistan/"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
				</div>
			</div>
		</div>
			<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="image/nawroz.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Dr. Nawroz Ali Hussainy</h4>
					<h6 style="margin-bottom:25px; color:#1977cc;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">Head <span style="border-bottom: 3px solid #41cbd4; padding-bottom:9px">M</span>aster</span></h6>
							<p class="card-text">Doctor of Touberclouse and Leprosy disease. <br /> Expert In Touberclouse and Leprosy Disease.</p>
					<div class="socials">
                        <a href="https://m.facebook.com/USAIDAfghanistan/"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
				  </div>
				</div>
			</div>
				<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="image/D3.JPG" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Dr. Jawid Hashemy</h4>
						<h6 style="margin-bottom:25px; color:#1977cc;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">Do<span style="border-bottom: 3px solid #41cbd4; padding-bottom:9px">ct</span>or</span></h6>
							<p class="card-text">Male doctor of Touberclouse and Leprosy disease. <br /> Expert In Touberclouse and Leprosy Disease.</p>
					<div class="socials">
                        <a href="https://m.facebook.com/USAIDAfghanistan/"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
 </div>
</div>

 <!-- ====== End Doctors Section =====-->


 <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" style="padding-left:5%; padding-right:5%;">

        <div class="section-title">
          <h2 class="text-center" style="margin-bottom:25px;  font-weight: 700;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">Se<span style="border-bottom: 3px solid #1977cc; padding-bottom:9px">rvic</span>es</span></h2>
          <p style="text-align:center;">You can exploit our services by thes .</p>
        </div>

        <div class="row">
		
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont-heart-beat"></i></div>
              <h4><a href="">Medical Service</a></h4>
			  <h6>Which Service Does LEPCO Offer?</h6>
              <p>In the first option of the LEPCO website, users can receive information about Tuberculosis and leprosy diseases.</p>
            </div>
          </div>

		  <a href="#appointment">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-autism"></i></div>
              <h4><a href="">Making Appointment</a></h4>
              <p>LEPCO web site allow authorized users to get an appointment from any doctors that register on this web site, and select a date according to the doctor’s schedule. </p>
            </div>
          </div>
		  </a>
		  
		  <a href="account.php">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-login"></i></div>
              <h4><a href="">Rigestration</a></h4>
              <p>The users who are patients can register themselves in the website’s database and the patient can get an appointment from doctors.</p>
            </div>
          </div>
		</a>
		  
		  <a href="#doctor">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon" ><i class="icofont-heartbeat"></i>
			  </div>
              <h4><a href="">Online Advisement</a></h4>
              <p>Website will include an option for users to ask from a doctor for online advisement. In online advisement, doctor will have a user-friendly video call communication with their patients.</p>
            </div>
          </div>
</a>
		  
		  <a href="login.php">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <div class="icon"><i class="icofont-check-circled"></i></div>
              <h4><a href="">Check Your Self</a></h4>
              <p>Patients who think they are addicted to Tuberculosiscle or leprosy they can test and check themselves in the website. </p>
            </div>
          </div>
		</a>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box"  name="check">
              <div class="icon"><i class="icofont-drug"></i></div>
              <h4><a href="">Free Treatment</a></h4>
              <p>Patients who think they are addicted to Tuberculosiscle or leprosy they can test and check themselves in the website. </p>


            </div>
          </div>
      </div>
    </section><!-- End Services Section -->



<!-------------------------------------------------------------------------------------->
	 <!-- ======= Branches Section ======= -->
   	<div class="container" style="padding-left:5%; padding-right:5%;">
	 <div class="Doctors-title">
          <h2 class="text-center" style="margin-bottom:25px;  font-weight: 700;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;"> Br<span style="border-bottom: 3px solid #1977cc; padding-bottom:9px">anch</span>es </span></h2>
          <p style="text-align:center;">Information about LEPCO Clinic branches in diffrent district of Afghanistan.</p>
        </div>


	<div class="docprofile">
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="img/branch/m1.jpg" class="card-img-top" alt="..." style="height:250px;">
                  <div class="card-body">
                    <h4 class="card-title">Kabul</h4>
						<h6 style="margin-bottom:25px; color:#1977cc;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">O<span style="border-bottom: 3px solid #41cbd4; padding-bottom:9px">ff</span>ice</span></h6>
							<p class="card-text">The performance of the office staff was quite good, and the daily work and the work during the supervisory tours went well.</p>

					<a href="branches.php"><button class="btn btn-primary">Read More</button></a>
				</div>
			</div>
		</div>
			<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="img/first.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-title">Mazar-e-sharif</h4>
					<h6 style="margin-bottom:25px; color:#1977cc;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">C<span style="border-bottom: 3px solid #41cbd4; padding-bottom:9px">lini</span>c</span></h6>
							<p class="card-text">The clinics were functioning well during 2006-2009. The clinics received usual monitoring team from the LEPCO central office. </p>
					<a href="branches.php"><button class="btn btn-primary">Read More</button></a>
				  </div>
				</div>
			</div>
				<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="img/2nd.jpg" class="card-img-top" alt="..." style="height:250px;">
                  <div class="card-body">
                    <h4 class="card-title">Jaghory</h4>
						<h6 style="margin-bottom:25px; color:#1977cc;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">C<span style="border-bottom: 3px solid #41cbd4; padding-bottom:9px">lini</span>c</span></h6>
							<p class="card-text">The overall performance of the clinic was good 67 TB were treated and 11,176 general patients received treat in 2006 for TB patient.</p>
					<a href="branches.php"><button class="btn btn-primary">Read More</button></a>
				  </div>
				</div>
			</div>
		</div>
	</div>
 </div>
</div>



<!---------------- Branches  --------------->



	<div class="docprofile" >
        <div class="container" style="padding-left:6%; padding-right:6%;">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="img/branch/pic3.jpg" class="card-img-top" alt="..." style="height:250px;">
                  <div class="card-body">
                    <h4 class="card-title">Sharistan</h4>
						<h6 style="margin-bottom:25px; color:#1977cc;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">c<span style="border-bottom: 3px solid #41cbd4; padding-bottom:9px">lini</span>c</span></h6>
							<p class="card-text">The clinic was functioning very well during 2006-2009. The clinic received usual monitoring team from the lepco central office. </p>
					<a href="branches.php"><button class="btn btn-primary">Read More</button></a>
				</div>
			</div>
		</div>
			<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="img/branch/pic2.jpg" class="card-img-top" alt="..." style="height:250px;">
                  <div class="card-body">
                    <h4 class="card-title">Yakowlang</h4>
					<h6 style="margin-bottom:25px; color:#1977cc;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">c<span style="border-bottom: 3px solid #41cbd4; padding-bottom:9px">lini</span>c</span></h6>
							<p class="card-text">The number of TB patients increased to 186 cases in the year 2006. The Afghan Association Development (AADA), a local NGO receiving fund from USAID for... </p>
					<a href="branches.php"><button class="btn btn-primary">Read More</button></a>
				  </div>
				</div>
			</div>
				<div class="col-md-6 col-lg-4">
                <div class="card mx-30">
                  <img src="img/branch/pic4.jpg" class="card-img-top" alt="..." style="height:250px;">
                  <div class="card-body">
                    <h5 class="card-title">Panjaw</h4>
						<h6 style="margin-bottom:25px; color:#1977cc;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">c<span style="border-bottom: 3px solid #41cbd4; padding-bottom:9px">lini</span>c</span></h6>
							<p class="card-text">The clinic received WFP food for TB patients regularly during 2006-2009.The clinic received usual monitoring team from the Lepco central office. </p>
					<a href="branches.php"><button class="btn btn-primary">Read More</button></a>
				  </div>
				</div>
			</div>
		</div>
	</div>
 </div>
</div>

 <!-- ====== End Branches Section =====-->

	<!--Library-->
	<!--------- Who support us ------------>


<div class="container" id="supporters">
 <h2 class="text-center" style="margin-bottom:25px;  font-weight: 700;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;">Donnors <span style="border-bottom: 3px solid #1977cc; padding-bottom:9px">of </span>Lepco</span></h2>
   <section class="customer-logos slider">
      <div class="slide"><img src="img/DAHW.png"></div>
      <div class="slide"><img src="img/MISEREOR.jpeg"></div>
      <div class="slide"><img src="img/WFP2.png"></div>
      <div class="slide"><img src="img/WHO1.png"></div>
      <div class="slide"><img src="img/CARITAS.png"></div>
      <div class="slide"><img src="img/DCV.png"></div>
      <div class="slide"><img src="img/Lepra.png"></div>
   </section>

<h2><a href="http://www.caritas.org" target="_blank">http://www.caritas.org</a></h2>
</div>


<script type="text/javascript">


$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});


</script>
<!-----------------------Making Appiontment------>

	<div class="container-fluid"  id="appointment"> 
	  <div class="col-md-9  col-lg-7"  id="make"> 
		  <a href=""   style="text-decoration:none;"><h2>LEPCO APPOINTMENT FORM</h2></a>
			<form action=""   method="POST"   id="form">

				<div  id="UN" class="form-group">
					<label for="">Patient Name*</label>
					<input type="text" class="form-control"  name="PatientName"  placeholder="Patient Name" required/>
				</div>
				<div  id="UN" class="form-group">
					<label for="">Email*</label>
					<input type="email" class="form-control"  name="email"  placeholder="...@example.com" required/>
				</div>
				<div   id="number" class="form-group">
					<label for="">Phone_Number*</label>
					<input type="tel" class="form-control"  name="CONTACT_NO" placeholder="Phone Number" required/>
				</div>
				<div   id="number" class="form-group">
					<label for="">Department*</label>
					<input list="depar" class="form-control"  name="depar" placeholder="Select Department" required/>
						<datalist id="depar">
							<option value='Tuberculous'>
							<option value='Leprosy'>
							<option value='Covid-19'>
						</datalist>
				</div>

				<div   id="date" class="form-group">
					<label for="">Select DATE*</label>
					<input type="date" class="form-control"  name=" DATE"  placeholder="Select Date"    required/>
				</div>
				<div  id="date" class="form-group">
				<label for="">Time*</label>
				<input list="time" class="form-control"  name="time" placeholder="Appiontment Time" required/>
					<datalist id="time">
						<option value='3:00PM - 4:00PM '>
						<option value='4:00PM - 5:00PM '>
						<option value='5:00PM - 6:00PM '>
						<option value='7:00AM - 8:00AM '>
						<option value='8:00AM - 9:00AM '>
						<option value='10:00AM - 11:00AM'>
						<option value='2:00PM - 3:00PM '>
					</datalist>
				</div>



	<div class="form-check"   id="check1">
			<div class="form-check" id="check">
				<label for=""> Dr's Gender*  </label>
				<label class="form-check-label">
				<input type="radio"  id="gender" class="form-check-input" name="Gender">Male
				</label>
			</div>
	   <div class="form-check"  id="check1">
		   <label class="form-check-label">
		   <input type="radio"  id="gender" class="form-check-input" name="Gender"> Female</label>
	   </div>
	</div>
	
	<div class="form-check"  id="check1">
		<div class="form-check" id="check">
			<label for="" >Choose Patient</label><br />
			<label class="form-check-label">
			<input type="radio"   class="form-check-input"   id="p" name="Patient">Existing One </label>
		</div>
		
		<div class="form-check"  id="check">
			  <label class="form-check-label">
			  <input type="radio"   class="form-check-input" id="p" name="Patient"> New One</label>
		</div>
    </div>

	<div class="form-check"  id="com">
		<label for="">Reason of visit*</label>
		<textarea name="comment"   style="width:100%; margin:auto;" placeholder="Enter text here..."></textarea>
	</div>

					<button type="submit" class="btn btn-primary"  name="submit">APPOINTMENT</button>
		</form>
	</div>
  </div>

  
	<!---------------------contact------------------------->
	
	
	 <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
        <h2 class="text-center" id="doctor"  style="margin-bottom:25px;  font-weight: 700;"><span style="border-bottom: 1px solid lightgray; padding-bottom:10px;"> Co<span style="border-bottom: 3px solid #1977cc; padding-bottom:9px">nt</span>act </span></h2>
            <p class="text-center">Contact us with these links.</p>
        </div>
      </div>


      <div class="container">
        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>35 Nawshad -Street, Mazar-e-sharif, Afghanistan</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+93 799 184 298</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="nawrozyshogof@gmail.com" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
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
    </section><!-- End Contact Section -->

<br />
<br />
<br />
	
	
	<!-----------------------footer------------------------>


	<footer id="footer" class="footer-1">
<div class="main-footer widgets-dark hcolor">
<div class="container">
<div class="row">

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h5 class="widget-title">LEPCO<span></span></h5>
<p> Support by none governmental organisations from Germany.</p>
</div>
</div>

<div class=" col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Quick Links<span></span></h5>
<ul class="thumbnail-widget">
<li>
<div class="thumb-content"><a href="#">Services</a></div>
</li>
<li>
<div class="thumb-content"><a href="login.php">Leprosy Check</a></div>
</li>
<li>
<div class="thumb-content"><a href="login.php">Touberclouse Check</a></div>
</li>
<li>
<div class="thumb-content"><a href="Touberclouse.php">About Touberclouse</a></div>
</li>
<li>
<div class="thumb-content"><a href="Leprosy.php">About Leprosy</a></div>
</li>
<li>
<div class="thumb-content"><a href="Branches.php">Branches</a></div>
</li>
<li>
<div class="thumb-content"><a href="About.php">About</a></div>
</li>
</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title">Get Started<span></span></h5>
<p>Get access to completely check yourself and make sure about your healthnes.</p> <div class="text-center">
                <a href="account.php" class="more-btn" style="background-color:#1977cc; border-radius:25px; padding:5px; color:white;">Register Now<i class="bx bx-chevron-right"></i></a>
              </div>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">

<div class="widget no-box">
<h5 class="widget-title">Social Links<span></span></h5>

<p><a href="mailto:lepco2020@gamil.com" title="glorythemes">nawroz.lepco@gmail.com</a></p>
<p><a href="mailto:lepco2020@gamil.com" title="glorythemes">lepcokabul@yahoo.com</a></p>
<ul class="social-links">
<li class=""><a title="youtube" target="_blank" href="https://www.youtube.com/"><img alt="youtube" width="30" height="30" src="img/youtube-icon.png"></a></li>
<li class=""><a title="facebook" target="_blank" href="https://www.facebook.com/"><img alt="youtube" width="30" height="30" src="img/facebook-icon.png"></a></li>
<li class=""><a title="skype" target="_blank" href="https://www.skype.com/"><img alt="youtube" width="30" height="30" src="img/skype-icon.png"></a></li>
<li class=""><a title="Email" target="_blank" href="https://www.Email.com/"><img alt="youtube" width="30" height="30" src="img/Mail_icon.png"></a></li>
</ul>
</div>
</div>

</div>
</div>
</div>

<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p>Copyright Lepco © 2020. All rights reserved.</p>
</div>
</div>
</div>
</div>
</footer>


</body>

</html>