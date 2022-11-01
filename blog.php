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
* {
          box-sizing: border-box;
}
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
          color: white;
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
          body {
                    background: lightgray;
          }

          .pageButton li{
                    display: inline-block;
          }

          .pageButton li a{
                    display: inline-block;
                    color: navy;
                    text-decoration: none;
                    border: 2px solid lightgray;
                    padding: 8px 15px;
                    font-size: 14px;
                    background: white;
                    transition: background 2s;
          }

          .pageButton li a i{
                    color: black;
          }

          .pageButton li a:hover {
                    background: lightgray;
          }

          .chats {
                    display: inline-block;
                    margin-top: 8%;
                    text-align: justify;
          }

          #yeah {
                    width: 35%;
                    display: inline-block;
                    padding: 20px;
                    margin-left: 10%;
                    /* margin-right: 30px; */
                    /* margin-top: -80px; */
          }

          #yeah div {
                    background: white;
                    border: 1.5px solid lightgray;
                    padding: 40px 20px;
                    margin-bottom: 20%;
          }

          #yeah div#cat span {
                    margin-bottom: 20px;
          }

          #yeah div#cat a:link, a:visited{
                    color: black;
                    text-decoration: none;
          }

          #yeah div#cat a:hover {
                    color: purple;
          }

          #yeah div p {
                    text-align: justify;
          }

          #yeah div:hover {
                    box-shadow: 10px 12px 8px lightgray;
          }

          #yeah div h3 {
                    text-align: center;
          }
/* 
          #nah {
                    width: 50%;
                    display: inline-block;
                    padding: 20px;
          }

          #nah p {
                    border: 2px solid navy;
                    padding: 20px;
          } */

          .iframe iframe {
                    padding: 20px;
                    height: 1930px;
                    margin-left: 500px;
                    width: 70%;
                    margin-top: -133%;
                    background: white;
          }

          .dBig {
                    font-weight: bold;
                    font-size: 15px;
          }

          .dBig:hover {
                    color: purple;
          }

          .dSmall {
                    font-size: 13px;
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

                              <li class="dropdown">
                                        <a class="dropdown-btn" href="services.php"> Services</a>
                                        <div class="dropdown-content">
                                                  <a href="webdev.php"> Web Development</a>
                                                  <a href="mobile.php"> Mobile App Development</a>
                                                  <a href="branding.php"> Branding</a>
                                                  <a href="softdev.php"> Software Development</a>
                                                  <a href="boot.php"> Bootcamp</a>
                                        </div>
                              </li>

                              <li><a href="portfolio.php"> Portfolio</a></li>

                              <li><a href="contact.php"> Contact</a></li>
                    </div>
          </div>
          
<?php include('nextnav.php'); ?>

<?php include('navbar.php'); ?>

 <!-- <div class="pack">
	<ul class="pageButton">
		<li><a class="link " href="#"><i class="fas fa-angle-double-left"></i></a></li>
		<li><a class="link" href="#">1</a></li>
		<li><a class="link" href="#">2</a></li>
		<li><a class="link" href="#">3</a></li>
		<li><a class="link" href="#">4</a></li>
		<li><a class="link" href="#">5</a></li>
		<li><a class="link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
	</ul>
</div> -->

<div class="chats">
          <div id="yeah">
                    <div>
                              <h3>NEWSLETTER<hr style="width: 50%;"></h3>
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quam eligendi soluta sunt tempora doloribus! Molestias expedita</p>
                              <form action="#" method="post" autocomplete="on">
                                        <input type="text" style="padding: 10px; width: 250px; outline: none;" placeholder="Enter your email"><br><br>
                                        <input type="submit" style="padding: 10px; width: 250px; margin-bottom: 20px;" value="Subscribe">
                              </form>
                    </div>

                    <div id="cat">
                              <h3>CATEGORIES<hr style="width: 50%;"></h3>
                              <p>
                              <span id="linK1"><i class="fas fa-folder"></i></span>
                              <a href="hello.php" target="ifra" onclick="showLink1()">Lorem Ipsum</a>
                              </p>

                              <p>
                              <span id="linK2"><i class="fas fa-folder"></i></span>
                              <a href="hello2.php" target="ifra" onclick="showLink2()">Lorem Ipsum</a>
                              </p>

                              <p>
                              <span id="linK3"><i class="fas fa-folder"></i></span>
                              <a href="hello3.php" target="ifra" onclick="showLink3()">Lorem Ipsum</a>
                              </p>
                              
                              <p>
                              <span id="linK4"><i class="fas fa-folder"></i></span>
                              <a href="hello4.php" target="ifra" onclick="showLink4()">Lorem Ipsum</a>
                              </p>
                              
                              <p>
                              <span id="linK5"><i class="fas fa-folder"></i></span>
                              <a href="hello5.php" target="ifra" onclick="showLink5()">Lorem Ipsum</a>
                              </p>
                    </div>

                    <div>
                              <h3>TOP POSTS<hr style="width: 50%;"></h3>
                              <p class="dBig">FOUR DAYS IN LAS VEGAS</p>
                              <p class="dSmall">Date : July 15, 2016</p><hr>

                              <p class="dBig">ROME IN 4 DAYS EASY GOING</p>
                              <p class="dSmall">Date : July 15, 2016</p><hr>

                              <p class="dBig"><a href="viddy.php" target="ifra">KUALA LUMPUR IN THREE DAYS</p>
                              <p class="dSmall">Date : July 15, 2016</p>
                    </div>

                    <!-- add video to the kuala lumpur click -->


          </div>

          <div class="iframe">
                    <iframe src="hello.php" name="ifra" style="border: 1px solid lightgray;"></iframe><br>
          </div>
</div>

<?php include('footer.php'); ?>
<script>
          var ab = document.getElementById("linK1");
          var bb = document.getElementById("linK2");
          var cb = document.getElementById("linK3");
          var db = document.getElementById("linK4");
          var eb = document.getElementById("linK5");

          function showLink1() {
                    if(ab.innerHTML == `<i class="fas fa-folder"></i>`) {
                              ab.innerHTML =  `<i class="fas fa-folder-open"></i>`;
                              bb.innerHTML =  `<i class="fas fa-folder"></i>`;
                              cb.innerHTML =  `<i class="fas fa-folder"></i>`;
                              db.innerHTML =  `<i class="fas fa-folder"></i>`;
                              eb.innerHTML =  `<i class="fas fa-folder"></i>`;
                    return;
                    }
                    else if (ab.innerHTML ==  `<i class="fas fa-folder-open"></i>`) {
                              ab.innerHTML = `<i class="fas fa-folder"></i>`;
                    return;
                    }             
          }
          function showLink2() {
                    if(bb.innerHTML == `<i class="fas fa-folder"></i>`) {
                              ab.innerHTML =  `<i class="fas fa-folder"></i>`;
                              bb.innerHTML =  `<i class="fas fa-folder-open"></i>`;
                              cb.innerHTML =  `<i class="fas fa-folder"></i>`;
                              db.innerHTML =  `<i class="fas fa-folder"></i>`;
                              eb.innerHTML =  `<i class="fas fa-folder"></i>`;
                    return;
                    }
                    else if (bb.innerHTML ==  `<i class="fas fa-folder-open"></i>`) {
                              bb.innerHTML = `<i class="fas fa-folder"></i>`;
                    return;
                    }             
          }
          function showLink3() {
                    if(cb.innerHTML == `<i class="fas fa-folder"></i>`) {
                              ab.innerHTML =  `<i class="fas fa-folder"></i>`;
                              bb.innerHTML =  `<i class="fas fa-folder"></i>`;
                              cb.innerHTML =  `<i class="fas fa-folder-open"></i>`;
                              db.innerHTML =  `<i class="fas fa-folder"></i>`;
                              eb.innerHTML =  `<i class="fas fa-folder"></i>`;
                    return;
                    }
                    else if (cb.innerHTML ==  `<i class="fas fa-folder-open"></i>`) {
                              cb.innerHTML = `<i class="fas fa-folder"></i>`;
                    return;
                    }             
          }
          function showLink4() {
                    if(db.innerHTML == `<i class="fas fa-folder"></i>`) {
                              ab.innerHTML =  `<i class="fas fa-folder"></i>`;
                              bb.innerHTML =  `<i class="fas fa-folder"></i>`;
                              cb.innerHTML =  `<i class="fas fa-folder"></i>`;
                              db.innerHTML =  `<i class="fas fa-folder-open"></i>`;
                              eb.innerHTML =  `<i class="fas fa-folder"></i>`;
                    return;
                    }
                    else if (db.innerHTML ==  `<i class="fas fa-folder-open"></i>`) {
                              db.innerHTML = `<i class="fas fa-folder"></i>`;
                    return;
                    }             
          }
          function showLink5() {
                    if(eb.innerHTML == `<i class="fas fa-folder"></i>`) {
                              ab.innerHTML =  `<i class="fas fa-folder"></i>`;
                              bb.innerHTML =  `<i class="fas fa-folder"></i>`;
                              cb.innerHTML =  `<i class="fas fa-folder"></i>`;
                              db.innerHTML =  `<i class="fas fa-folder"></i>`;
                              eb.innerHTML =  `<i class="fas fa-folder-open"></i>`;
                    return;
                    }
                    else if (eb.innerHTML ==  `<i class="fas fa-folder-open"></i>`) {
                              eb.innerHTML = `<i class="fas fa-folder"></i>`;
                    return;
                    }             
          }
</script>
</body>
</html>


<!-- use javascript to toggle the lorem links and the fa icons -->
