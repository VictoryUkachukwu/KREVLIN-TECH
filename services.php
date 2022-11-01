<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="stylesheets/fontawesome-free-5.15.4-web/css/all.css">
<link rel="stylesheet" href="stylesheets/mainstyle.css">
<link rel="shortcut icon" href="assets/images/clipart2976075.png" type="image/x-icon">

<style>

.header {
          display: none;
          background: black;
          padding: 35px;
          text-align: center;
}

.hamburger {
          display: none;
          position: absolute;
          top: 2%;
          left: 75%;
          padding: 20px 60px 20px 60px;
          text-align: left;
          /* color: white; */
          color: red;
          cursor: pointer;
}

.drop-text {
          position: absolute;
          display: none;
          top: 70%;
          left: 4%;
          display: none;
          padding: 20px;
          background: rgba(88, 75, 71, 0.13);
          text-align: left;
          box-shadow: 12px 12px 8px black, 12px 13px 8px black;
}

.drop-text li {
          display: block;
          padding: 10px;
          height: 50px;
}

.drop-text li a:link, a:visited {
          width: 100%;
          text-decoration: none;
          padding: 10px;
          color: white;
          font-size: 13px;
}

.drop-text li a:hover {
          color: blue;
}

.hamburger:hover .drop-text {
          display: block;
}

@media screen and (max-width: 900px) {

.hamburger {
          display: block;
}

div.container ul li a {
          display: none;
}

          .vidBg {
                    display: none;
          }

          .text {
                    display: none;
          }
 
div.container {
          display: none;
} 

 ul        {
          display: none;                  
          }

          li        {
                    display: inline-block;
                    display: flex;
                    padding: 5px;
          }

          li.next {
                    float: none;
          }

          li.company {
          display: none;
          }

          li.company img {
                    display: none;
          }

          li.company span.compName {
                    display: none;
          }

          } 


          </style>
</head>
<body>

          <div class="hamburger">&#9776;
                    <div class="drop-text">
                              <li><a href="index.php">Home</a></li>
                              <li><a href="about.php"> About</a></li>
                              <li><a href="services.php"> Services</a></li>
                              <li><a href="portfolio.php"> Portfolio</a></li>
                              <li><a href="blog.php"> Blog</a></li>
                              <li><a href="contact.php"> Contact</a></li>
                    </div>
          </div>


          <?php include('nextnav.php'); ?>

<?php include('navbar.php'); ?>
                    
          
</body>
</html>
