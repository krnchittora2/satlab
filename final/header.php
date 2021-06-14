<!DOCTYPE html>
<html>
<head>
  <title><?php if (isset($title)) {echo $title;}?> | Student Satellite Program &mdash; IIT Bombay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/blog_style.css">
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">

      <div class="navbar-header">
        <button type="button" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="img/satlogo.png"></a>
      </div>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">About
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="pratham.php">Pratham</a></li>
              <li><a href="advitiy.php">Advitiy</a></li>
              <li><a href="sanket.php">Sanket</a></li>
              <li><a href="stads.php">STADS</a></li>
              <li><a href="glee.php">GLEE</a></li>
              <li><a href="rvd.php">RVD</a></li>
              <li><a href="ham.php">HAM & GSS</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Subsystems
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Communication</a></li>
              <li><a href="#">Electrical</a></li>
              <li><a href="#">GnC</a></li>
              <li><a href="#">Instrumentation</a></li>
              <li><a href="#">Mechanical</a></li>
              <li><a href="#">Payload</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Timeline</a></li>
              <li><a href="#">FAQs</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Journey
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="blogs.php">Blogs</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="#">Media</a></li>
              <li><a href="#">Global Outreach</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Team
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Current Team</a></li>
              <li><a href="#">Alumni</a></li>
              <li><a href="#">Faculty</a></li>
              <li><a href="#">Organization</a></li>
            </ul>
          </li>
          <li><a href="index.php#contactUs">Contact</a></li>
          <li><button class="btn navbar-btn" onclick="location.href='https://www.aero.iitb.ac.in/satelliteWiki/index.php/Satellite_101';">Wiki</button></li>
        </ul>
      </div>     

    </div>
  </nav>

  

