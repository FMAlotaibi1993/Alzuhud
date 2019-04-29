<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- boostrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Custom css -->
    <link rel="stylesheet" href="homepage.css">
    <script
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
    <script
			  src="navbar.js"></script>

  </head>
  <body id="mainpage">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <img id="Logo" class="img" src="img\Logo.jpeg">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Al Zuhud</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav navbar-left">
            <li class="nav-item">
              <a id="homelink" class="nav-link js-scroll-trigger" href="homepage.html">To HomePage</a>
            </li>
            <li class="nav-item">
              <a id="2ndlink" class="nav-link js-scroll-trigger" href="2ndpage.html">To FirstPage</a>
            </li>
            <li class="nav-item">
              <a id="3rdlink" class="nav-link js-scroll-trigger" href="3rdpage.html">To SecondPage</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <!-- nav bar isnt going right of page -->
            <li><a href="Register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
      </div>


    </nav>
<!-- Register Form  -->
    <!-- <div id="main-content">
        <form action="FormHandler.php" method="POST">
            <div class="form-group">
                <label for="InputFName">First Name</label>
                <input type="FName" name="fname" class="form-control" id="InputFname1" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="InputLName">Last Name</label>
                <input type="LName" name="lname" class="form-control" id="InputLname1" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="InputEmail">Email Address</label>
                <input type="Email" name="uemail" class="form-control" id="InputEmail1" placeholder="Email Address">
            </div>
            <div class="form-group">
                <label for="InputUser">Username</label>
                <input type="User" name="uname" class="form-control" id="InputUser1" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="InputPass">Password</label>
                <input type="password" name="pass" class="form-control" id="InputPass1" placeholder="Password">
            </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div> -->



  </body>
</html>
