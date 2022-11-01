<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>KREVLIN TECH</title>
          <link rel="stylesheet" href="stylesheets/fontawesome-free-5.15.4-web/css/all.css">
          <link rel="stylesheet" href="stylesheets/mainstyle.css">
          <link rel="stylesheet" href="stylesheets/requestQ.css">
          <link rel="shortcut icon" href="assets/images/clipart2976075.png" type="image/x-icon">
</head>
<body>
<?php include('nextnav.php'); ?>

                    <?php include('navbar.php'); ?>

                    <div class="quotebg"></div>
                    <div class="form" style="width: 50%; margin-left: 25%; margin-bottom: 10%;">
                                        <form action="#" method="post" autocomplete="on">
                                                  <h1> Request Quotation<span style="font-size: 90px; color: orange; font-style: oblique; margin-left: 12px;">!</span></h1>
                                                  <p>Kindly reach out to us. We will be sure to help.</p><br><br>
                                                  <input type="text" name="fullName" placeholder="Name*">
                                                  <input type="email" name="myEmail" placeholder="Email*"><br><br>
                                                  <input type="tel" name="myPhone" placeholder="Phone*"><br><br>
                                                  <select>
                                                            <option style="color: purple;">-- Select a service --</option>
                                                            <option id="differ"> Website Development</option>
                                                            <option> Mobile App Development</option>
                                                            <option> Branding</option>
                                                            <option> Software Development</option>
                                                  </select><br><br>

                                                  <textarea name="message" placeholder="Describe what you want"></textarea><br>
                                                  <input type="submit" value="Submit">
                                        </form>
                    </div>

          <?php include('footer.php'); ?>
</body>
</html>