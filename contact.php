<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="stylesheets/fontawesome-free-5.15.4-web/css/all.css">
<link rel="stylesheet" href="stylesheets/mainstyle.css">
<link rel="stylesheet" href="stylesheets/contact.css">
<link rel="shortcut icon" href="assets/images/clipart2976075.png" type="image/x-icon">
<style>
.myBg {
          background: linear-gradient(rgba(0,0,0, 0.300), rgba(0,0,0,0.300)), url('assets/images/cuscare.gif') no-repeat;
          background-attachment: fixed;
          background-position: bottom;
          padding: 18%;
}

.myBg2 {
          background: linear-gradient(rgba(0,0,0, 0.300), rgba(0,0,0,0.300)), url('assets/images/social.gif') no-repeat;
          background-attachment: fixed;
          background-position: bottom;
          padding: 20%;
}

</style>
</head>
<body>

          <div class="header">
                    <img src="assets/images/clipart2976075.png" alt="myImage">
          </div>

          <div class="hamburger">&#9776;
                    <div class="drop-text">
                              <li><a href="index.php">Home</a></li>
                              
                              <li><a href="about.php"> About</a></li>

                              <li><a href="services.php"> Services</a></li>

                              <li><a href="portfolio.php"> Portfolio</a></li>

                              <li><a href="blog.php"> Blog</a></li>

                              <li class="next"><a href="contact.php"> Contact</a></li>


                    </div>
          </div>

          <?php include('nextnav.php'); ?>

<?php include('navbar.php'); ?>
                    

          <!-- <div class="space"></div> -->
          <!-- <div class="intro">
                    <h1>CONTACT US </h1>
          </div><br> -->
          <div class="myBg"></div>
          <div class="others">
                    <div class="merge">
                              <div class="location">
                                                  <i class="fas fa-map-marked-alt" style="outline: 2px dashed white; outline-offset: 10px;color: white; background: orange; border-radius: 5px; padding: 19px; font-size: 40px; margin-top: 20%;"></i>
          
                                                  <h4 style="margin-left: 20%; margin-top: -17%;"> OFFICE LOCATION</h4>
                                                  <p style="margin-left: 20%;"> 28 Okigwe Road, Aba</p>
                                                  <p style="margin-left: 20%;"> Abia State. Nigeria.</p><br><br>
                                                  <div style="margin-bottom: 90px;"></div>

                                        
                                                  <i class="fas fa-phone" style="outline: 2px dashed white; outline-offset: 10px; color: white; background: orange; border-radius: 5px; padding: 19px; font-size: 40px;"></i>
                                                  <h4 style="margin-left: 20%; margin-top: -17%;"> PHONE</h4>
                                                  <p style="margin-left: 20%;"> (+234)81-234-567-88</p>
                                                  <p style="margin-left: 20%;"> (+234)81-234-567-88</p><br><br>
                                                  <div style="margin-bottom: 90px;"></div>

                                                  <i class="fas fa-envelope-open" style="outline: 2px dashed white; outline-offset: 10px; color: white; background: orange; border-radius: 5px; padding: 19px; font-size: 40px;"></i>
                                                  <h4 style="margin-left: 20%; margin-top: -17%;"> EMAIL</h4>
                                                  <p style="margin-left: 20%;"> example@krevlin.com</p>
                                                  <p style="margin-left: 20%;"> info@krevlintech.com</p><br><br>
                              </div>
                    </div>
                    <div class="merge">
                              <div class="form">
                                        <form action="#" method="post" autocomplete="on">
                                                  <h1> Got Any Complaints<span style="font-size: 90px; color: orange; font-style: oblique; margin-left: 12px;">?</span></h1>
                                                  <p>Kindly reach out to us. We will be sure to help.</p><br><br>
                                                  <input type="text" name="fullName" placeholder="Name*">
                                                  <input type="email" name="myEmail" placeholder="Email*"><br><br>
                                                  <input type="tel" name="myPhone" placeholder="Phone*"><br><br>
                                                  <textarea name="message" placeholder="Fill out your complaints"></textarea><br>
                                                  <input type="submit" value="Get in touch">
                                        </form>
                              </div>
                    </div>
          </div>
          <div class="myBg2"></div>


          <?php include('footer.php'); ?>
</body>
</html>
