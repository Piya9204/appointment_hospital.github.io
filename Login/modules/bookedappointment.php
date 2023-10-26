<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  
	<title></title>
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>


<!-- <header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="index.html">
			  	<img src="images/logo.png" alt="" class="img-fluid" height="100" width="100">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.html">Home</a>
			  </li>
                 <li class="nav-item"><a class="nav-link" href="appoinment.php">Appointment</a></li>

			   <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
			    <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

			    <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="department.html">Departments</a></li>
						<li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
					</ul>
			  	</li>

			  	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
						<li><a class="dropdown-item" href="appoinment.html">Appointment</a></li>
					</ul>
			  	</li>
			   <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
         <li class="nav-item"><a class="nav-link" href="app_view.php">view</a></li>
    
			</ul>
		  </div>
		</div>
	</nav>
</header>
 -->
<section>
   <!-- Data Retriving -->
   	<?php 
   		include ('dbconnection.php');
   		$conn = mysqli_connect("localhost", "root", "", "hospital");


   		if ($conn == false)
   		 {
    		die("ERROR: Could not connect. "
                .mysqli_connect_error());
		 }

   		$view = mysqli_query($conn,"select * from appointment order by id desc")

   		$total_records = mysqli_num_rows($view);
   		echo $total_records;

   	 ?>

     <section class="container">
  
    </section>
  
      <table align="center" class="table table-bordered table-striped table-hover js-basic-example dataTable">
        <thead>
          <tr>
            <th>sr no</th>
            <th>appointmenttype</th>
            <th>patientid</th>
            <th>roomid</th>
            <th>departmentid</th>
            <th>appointmentdate</th>
            <th>appointmenttime</th>
            <th>doctorid</th>
            <th>status</th>
            <th>app_reason</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $counter = 0;
            while ($row = mysqli_fetch_array($view)) 
            {
              # code...
              extract($row);
          ?>
          <tr>
            <td><?php echo ++$counter; ?></td>
            <td><?php echo $row['appointmenttype']; ?></td>
            <td><?php echo $row['patientid']; ?></td>
            <td><?php echo $row['roomid']; ?></td>
            <td><?php echo $row['departmentid']; ?></td>
            <td><?php echo $row['appointmentdate']; ?></td>
            <td><?php echo $row['appointmenttime']; ?></td>
            <td><?php echo $row['doctorid']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['app_reason']; ?></td>
            <td><?php echo $row['Action']; ?></td>


            <td>
          <a href='?editid=$rs[id]' class='btn btn-sm btn-raised g-bg-cyan'>Edit</a> <a href='app_view.php?delid=$rs[id]' class='btn btn-sm btn-raised g-bg-blush2'>Delete</a> </td>
          

          </tr>
          <?php
               }
            ?>
          
        </tbody>
        </table>
</section>




<!-- footer Start -->
<footer class="footer section gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mr-auto col-sm-6">
        <div class="widget mb-5 mb-lg-0">
          <div class="logo mb-4">
            <img src="images/logo.png" alt="" class="img-fluid" width="150" height="150">
          </div>
          <ul class="list-inline footer-socials mt-4">
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="widget mb-5 mb-lg-0">
          <h4 class="text-capitalize mb-3">Department</h4>
          <div class="divider mb-4"></div>
<ul class="list-unstyled footer-menu lh-35">
            <li><a href="#">Neurosurgen</a></li>
            <li><a href="#">Plastic surgeon</a></li>
            <li><a href="#">Aurthopedic</a></li>
            <li><a href="#">Plastic Surgery</a></li>
            <li><a href="#">Medicine</a></li>
          </ul>
        
        </div>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="widget mb-5 mb-lg-0">
          <h4 class="text-capitalize mb-3">Support</h4>
          <div class="divider mb-4"></div>

<ul class="list-unstyled footer-menu lh-35">
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Company Support </a></li>
            <li><a href="#">FAQuestions</a></li>
            <li><a href="#">Company Licence</a></li>
          </ul>
        
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget widget-contact mb-5 mb-lg-0">
          <h4 class="text-capitalize mb-3">Get in Touch</h4>
          <div class="divider mb-4"></div>

          <div class="footer-contact-block mb-4">
            <div class="icon d-flex align-items-center">
              <i class="icofont-email mr-3"></i>
              <span class="h6 mb-0">Support Available for 24/7</span>
            </div>
            <h4 class="mt-2"><a href="tel:+23-345-67890">Chhatrapatihospital@email.com</a></h4>
          </div>

          <div class="footer-contact-block">
            <div class="icon d-flex align-items-center">
              <i class="icofont-support mr-3"></i>
              <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
            </div>
            <h4 class="mt-2"><a href="tel:8380080058">8380080058</a></h4>
            <h4 class="mt-2"><a href="tel:7028679999">7028679999</a></h4>

          </div>
        </div>
      </div>
    </div>
    
    <div class="footer-btm py-4 mt-5">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6">
          <div class="copyright">
            &copy; Copyright Reserved to <span class="text-color">Hospital</span> by <a href="wefly@gmail.com" target="_blank">WEFLY</a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <a class="backtop js-scroll-trigger" href="#top">
            <i class="icofont-long-arrow-up"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
   
   

    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="js/script.js"></script>
    <script src="js/contact.js"></script>


</body>
</html>