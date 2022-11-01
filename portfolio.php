<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="stylesheets/fontawesome-free-5.15.4-web/css/all.css">
          <link rel="stylesheet" href="stylesheets/mainstyle.css">
          <link rel="stylesheet" href="stylesheets/portfolio.css">
          <link rel="shortcut icon" href="assets/images/clipart2976075.png" type="image/x-icon">
</head>
<body>
<?php include('nextnav.php'); ?>

<?php include('navbar.php'); ?>

<div class="caseStudy">
                    <p id="nextP" style="margin-top: 8%;"> <small>CASE STUDIES</small></p>
                    <h1> Our Recently Launched Projects</h1> <hr>
                    <button id="fir" onclick="showAll()">All</button>
                    <button id="webber" onclick="showWeb()">Web development</button>
                    <button onclick="showBrand()">Branding</button>
                    <button onclick="showMobile()">Mobile App development</button>
                    <button onclick="showSoft()">Software development</button>
                    <button onclick="showCons()">Consulting</button>
                    <button onclick="showMarkt()">Marketing</button>
                    <button onclick="showSeo()">SEO</button><br><br>
                    <div id="allOfThem">
                             <div class="image-gallery">
                                        <a href="assets/images/port1.png" target="_blank">
                                                  <img src="assets/images/port1.png" alt="image 1" width="600px" height="400px">
                                        </a>
                                        <!-- <a href="#proj1"> -->
                                                  <div class="image-content">
                                                            Lorem ipsum dolor sit amet  elit.<br><br>
                                                            Mobile | SEO
                                                  </div>
                                        <!-- </a> -->
                              </div>

                              <div id="link2" class="image-gallery">
                                        <a href="assets/images/port2.png" target="_blank">
                                                  <img src="assets/images/port2.png" alt="image 1" width="600px" height="400px">
                                        </a>
                                        <div class="image-content">
                                                  Lorem ipsum dolor sit amet  elit.<br><br>
                                                  Web | Consulting | SEO
                                        </div>
                              </div>

                              <div id="link3" class="image-gallery">
                                        <a href="assets/images/port3.png" target="_blank">
                                                  <img src="assets/images/port3.png" alt="image 1" width="600px" height="400px">
                                        </a>
                                        <div class="image-content">
                                                  Lorem ipsum dolor sit amet  elit.<br><br>
                                                  Marketing
                                        </div>
                              </div>

                              <div id="link4" class="image-gallery">
                                        <a href="assets/images/port4.png" target="_blank">
                                                  <img src="assets/images/port4.png" alt="image 1" width="600px" height="400px">
                                        </a>
                                        <div class="image-content">
                                                  Lorem ipsum dolor sit amet  elit.<br><br>
                                                  Web | Software
                                        </div>
                              </div>

                              <div id="link5" class="image-gallery">
                                        <a href="assets/images/port5.png" target="_blank">
                                                  <img src="assets/images/port5.png" alt="image 1" width="600px" height="400px">
                                        </a>
                                        <div class="image-content">
                                                  Lorem ipsum dolor sit amet  elit.<br><br>
                                                  Branding | Mobile
                                        </div>
                              </div>

                              <div id="link6" class="image-gallery">
                                        <a href="assets/images/port9.png" target="_blank">
                                                  <img src="assets/images/port9.png" alt="image 1" width="600px" height="400px">
                                        </a>
                                        <div class="image-content">
                                                  Lorem ipsum dolor sit amet  elit.<br><br>
                                                  Marketing
                                        </div>
                              </div>

                              <div id="link7" class="image-gallery">
                                        <a href="assets/images/port7.png" target="_blank">
                                                  <img src="assets/images/port7.png" alt="image 1" width="600px" height="400px">
                                        </a>
                                        <div class="image-content">
                                                  Lorem ipsum dolor sit amet  elit.<br><br>
                                                  Consulting | SEO
                                        </div>
                              </div>

                              <div id="link8" class="image-gallery">
                                        <a href="assets/images/port8.png" target="_blank">
                                                  <img src="assets/images/port8.png" alt="image 1" width="600px" height="400px">
                                        </a>
                                        <div class="image-content">
                                                  Lorem ipsum dolor sit amet  elit.<br><br>
                                                  Branding | Software
                                        </div>
                              </div>
                    </div>
          </div>
          

<?php include('footer.php'); ?>



<!-- try inputting the bookmark linking from the outlined pictures of projects to a paragraph section where they are explained the more -->

</body>
</html>