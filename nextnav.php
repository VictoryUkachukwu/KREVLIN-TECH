<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <style>
          
.container {
          width: 100%;
}

ul#yay {
          background: purple;
          list-style-type: none;
          margin: 0;
          overflow: hidden;
          color: white;
          display: block;
}

ul#yay li {
          display: inline-block;
          color: white;
          padding: 8px;
          margin-left: 20px;
          font-size: 14px;
}

ul#yay li#fiRst{
          margin-left: 5%;
}

ul#yay li i {
          color: orange;
          font-size: 15px;
}

ul#yay li a {
          color: white;
          text-decoration: none;
}

ul#yay li a:hover {
          color: orange;
}

ul#yay li.hullo {
          float: right;
}

ul#yay li.hullo i {
          font-size: 16px;
          margin-left: 10px;
}

ul#yay li.hullo a.demo {
          background: white;
          color: purple;
          border: 2px solid white;
          border-radius: 5px;
          padding: 10px;
          font-weight: bold;

}

ul#yay li.hullo a.demo:hover {
          background: orange;
          color: purple;
          border: 2px solid orange;
}

</style>
</head>
<body>
<div class="container">
                    <ul id="yay">
                              <li id="fiRst"> <i class="fas fa-phone-alt"></i><a href="#">&nbsp Phone: +(234) 125-4985-214</a></li>
                              <li><i class="fas fa-envelope"></i><a href="#">&nbsp Email: info@krevlin.com</a></li>
                              <li><i class="fas fa-clock"></i><a href="#">&nbsp Opening: 12AM - 11PM (GMT +1)</a></li>

                              <li class="hullo">
                                        <a href="#" style="margin-left: -80%;"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                                        <a href="#" style="margin-right: 40%;"><i class="fab fa-dribbble"></i></a>
                                        <a href="requestQ.php" class="demo"> Request Quote</a>
                              </li>
          
                    </ul>
          </div>
</body>
</html>