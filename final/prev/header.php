<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home |IIT Bombay Student Satellite Project">
    <meta name="keywords" content="About Pratham,Advitiy,Home,Pratham,IIT Bombay,IITB,Student Satellite,Satlab">
	<meta name="google-site-verification" content="gO8kqg5T1brDcOXyLHgLblKVMgSXHZz6TFOkE8S3DPE" />
    <meta name="author" content="Satlab WebTeam">
    <title>IIT Bombay Student Satellite Project</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="css/flipclock.css">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Timeline and Team CSS added -->
    <link href="./css/timeline.css" rel="stylesheet" type="text/css">
    <link href="./css/team_members.css" rel="stylesheet" type="text/css">
    <!-- Social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- new links and script  for subsystem pages-->
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110447978-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-110447978-1');
    </script>

</head><!--/head-->

<body class="homepage">

   <header id="header">
    <nav class="navbar navbar-inverse" role="banner">
        <!-- style="position:fixed;width:100%;z-index:1000;" data-interval="4000" -->
        
        <div class="container">
            <table >
                <tr>
                <td rowspan="2"><a class="logoText" href="index.php"><img src="images/logo_patch.png"  width="80" height="80" alt="logo"></a></td>
                <td style="vertical-align: bottom; padding-left:5px; padding-bottom: 2px;"><a class="logoText" href="index.php" >IIT Bombay</a></td>
                </tr>
                <tr>
                <td style="vertical-align: top;  padding-left:5px; "><a class="tagLine" href="index.php" >Student Satellite Program</a></td>
                </tr>
            </table> 

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>


        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#abtSatlab" class="dropdown-toggle" id="aboutM" data-toggle="dropdown" >About<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="pratham.php">Pratham</a></li>
                        <li><a href="advitiy.php">Advitiy</a></li>
                    </ul>
                </li>

                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" id="subsysM" data-toggle="dropdown">Subsystems<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="commSS.php">Communication</a></li>
                        <li><a href="controlSS.php">Controls</a></li>
                        <li><a href="elecSS.php">Electrical</a></li>
                        <li><a href="mechSS.php">Mechanical</a></li>
                        <li><a href="payloadSS.php">Payload</a></li>
                    </ul>
                </li>

                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" id="teamM" data-toggle="dropdown">Team<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="currentTeam.php">Current Team</a></li>
                        <li><a href="alumni.php">Alumni</a></li>
<!--                         <li><a href="pratham_team.php">Pratham Team</a></li>
                        <li><a href="distinguishedAlumni.php">Distinguished Alumni</a></li> -->
                        <li><a href="faculty.php">Faculty</a></li>
                        <li><a href="organizations.php">Organizations</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="projectM" data-toggle="dropdown">Project<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="timeline.php">Timeline</a></li>
                        <li><a href="logs.php">Logs</a></li>
                        <li id="ddGS"><a>Ground Station<i class="fa fa-angle-down"></i></a>
                            <div class="dd-content">
                               <a href="groundStation.php">About GS</a>
                               <a href="gsActivities.php">Activities</a>
                               <a href="gsTracking.php">Tracking</a>
                               <a href="gsWS.php">Workshop</a>
                            </div> 
                        </li>
                        <li><a href="faq.php">FAQ</a></li> 
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="journeyM" data-toggle="dropdown">The Journey<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="blogs.php">Blogs</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="media.php">Media</a></li>
                        <li><a href="globalOut.php">Global Outreach</a></li> 
                    </ul>
                </li>             
                <li class="dropdown">
                     <a href="contact.php" id="contactM" >Contact</a>
                </li>  
                <li class="dropdown">
                     <a href="wiki.php" id="wikiM" style="background-color: #3B5998;color: #fff;"><b>Wiki</b></a>
                </li>            
                    
            </ul>
        </div>  

    </nav> 
   </header>  

</body>
</html>

