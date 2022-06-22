<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  

  <title>Appointment page</title>

  <!-- Favicon -->
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

<body id="top">	

 <?php include_once('header.php'); ?>

 <?php include_once 'Login/modules/patientappointment.php';
 ?>


<!-- <section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <h1 class="text-capitalize mb-5 text-lg">Appointment</h1>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="appoinment section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
          <div class="mt-3">
            <div class="feature-icon mb-3">
              <i class="icofont-support text-lg"></i>
            </div>
             <span class="h3">Timing Of Coming in Hospital!</span>
              <h2 class="text-color mt-3">Please Come 10min before Your Selected Timing!!!!!S </h2>
          </div>
      </div>

      <div class="col-lg-8">
           <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
            <h2 class="mb-2 title-color">Book an appoinment</h2>
               <form id="#" class="appoinment-form" method="POST" action="config.php">
                    <div class="row">
                         <div class="col-lg-6">
                            <div class="form-group">
                                <select name="department" class="form-control" id="exampleFormControlSelect1">
                                  <option>Choose Department</option>
                                  <option>Neurology Surgeon</option>
                                  <option>Orthopaedic </option>
                                  <option>Plastic surgery</option>
                                  <option>General Surgery</option>
                                  <option>Radio Surgery</option>
                                  <option>Physiotherapy</option>
                                  <option>Pathology</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select name="doctor" class="form-control" id="exampleFormControlSelect2">
                                  <option>Select Doctors</option>
                                  <option>Dr. Vijaykumar </option>
                                  <option>Dr. amol Khairner</option>
                                  <option>Dr. Rohan Nevadkar</option>
                                  <option>Dr. Bhupesh Patil</option>
                                </select>
                            </div>
                        </div>

                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy" onfocus="(this.type='date')" class="ion-calendar">
                            </div>
                        </div>



                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="time" id="time" type="text" class="form-control" placeholder="Time" onfocus="(this.type='time')" class="ion-ios-clockS">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="Number" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                    </div>

                    <div>
                          <input class="btn btn-main btn-round-full" type="submit" value="Book Appoinment" name="submit">

                    </div>

      </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
 -->
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7454.303387438486!2d74.76112507216857!3d20.90621581679981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdec5dbe3eebc3f%3A0xb558e29072e3bf39!2z4KS24KWN4KSw4KWAIOCkm-CkpOCljeCksOCkquCkpOClgCDgpKjgpY3gpK_gpYLgpLDgpYsg4KSf4KWN4KSw4KS-4KSu4KS-IOCkheCkgeCko-CljeCkoSDgpLjgpYHgpKrgpLDgpLjgpY3gpKrgpYfgpLbgpL7gpLLgpL_gpJ_gpYAg4KS54KWJ4KS44KWN4KSq4KS_4KSf4KSyICzgpKfgpYHgpLPgpYc!5e0!3m2!1sen!2sin!4v1648662852428!5m2!1sen!2sin" width="1350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  <?php include_once('footer.php'); ?>

   

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