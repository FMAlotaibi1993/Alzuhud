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
          <ul class="navbar-nav ml-auto">
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
        </div>
      </div>

      <!-- NAV MENU -->
      <!-- <button id="navbtn class"="navbar-toggler" type="button" data-toggle="collapse" data-trager="#navbar-header">
           &#9776;
             <img id="logo" src="img\Logo.jpeg" class="img">
             <a href="www.google.com">
       </button> -->
       <!-- <a id="homelink" class="nav-item nav-link" href="homepage.html">To HomePage </a>
       <a id="2ndlink" class="nav-item nav-link" href="2ndpage.html">To FirstPage </a>
       <a id="3rdlink" class="nav-item nav-link" href="3rdpage.html">To SecondPage </a> -->
      <!-- <ul>
        <li id="homelink" navcheck="true"><a href="homepage.html">HOME</a></li>
        <li id="2ndlink" ><a href="2ndpage.html">FIRST PAGE</a></li>
        <li id="3rdlink" ><a href="3rdpage.html">SECOND PAGE</a></li>
      </ul> -->
    </nav>
    <div id="main-content">
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
    </div>
<!-- <div class = "navbar-left navbar-static-top navbar-dark bg-dark">
  <div class = "container-fluid">
     <button id="navbtn class"="navbar-toggler" type="button" data-toggle="collapse" data-trager="#navbar-header">
          &#9776;
            <img id="logo" src="img\Logo.jpeg" class="img">
            <a href="www.google.com">
      </button>

    </div>
  </div> -->
    <!-- <section class="jumbotron text-xs-center">
      <div class="container"
      <h1 class="jumbotron-heading"> Welcome To mainpage </H1>
          <div>
            <a href="2ndpage.html" class="btn btn-dark"> second page </a>
            <a href="3rdpage.html" class="btn btn-secondary"> third page </a>
          </div>

    </div> -->


  </body>
</html>
