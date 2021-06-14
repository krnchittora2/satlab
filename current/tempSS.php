<?php include('header.php'); ?>

<style >
    .box{
        background-color: rgba(100, 120, 140, 0.9);
        border-radius: 10px;
        color: #fff;


    }

    @media screen and (min-width: 992px) {
        .box {
            background-color: rgba(100, 120, 140, 0.8) ;

        }
    }
h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0 0 20px 0;
  text-transform: none;
  color: rgba(254, 82, 76, 1);
  font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 600;
  letter-spacing: 1px;
  line-height: 1.5;
}
</style>
               <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">

                        <li >
                            <a href="index.php" >About </a>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="mission.php">Mission</a></li>
                            </ul> -->
                        </li>

                        <li class="active dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subsystems<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="commSS.php">Communication</a></li>
                                <li><a href="controlSS.php">Controls</a></li>
                                <li><a href="elecSS.php">Electrical</a></li>
                                <li><a href="mechSS.php">Mechanical</a></li>
                                <li><a href="payloadSS.php">Payload</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="currentTeam.php">Current Team</a></li>
                                <li><a href="pratham_team.php">Pratham Team</a></li>
                                <li><a href="distinguishedAlumni.php">Distinguished Alumni</a></li>
                                <li><a href="faculty.php">Faculty</a></li>
                                <li><a href="organizations.php">Organizations</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="timeline.php">Timeline</a></li>
                                <li><a href="logs.php">Logs</a></li>
                                <li><a href="groundStation.php">Ground Station</a></li>
                                <!--<li><a href="documents.php">Documents</a></li>-->
                                <li><a href="global.php">Pratham Goes Global</a></li> 
                                <li><a href="publications.php">Publications</a></li>
                                <!-- <li><a href="http://www.aero.iitb.ac.in/pratham/virtuallaboratory/index.php">Virtual Lab</a></li> -->
                                <li><a href="faq.php">FAQ</a></li>
                                <li><a href="wiki.php">Wiki</a></li> 
                            </ul>
                        </li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="gallery-journey.php">The Journey</a></li>
                                <li><a href="gallery-team.php">The Team</a></li>
                        <li><a href="gallery-presentations.php">Presentations</a></li>
                        <li><a href="gallery-trip.php">Trip to our World</a></li>
                            </ul>
                        </li>-->
                        <li><a href="contact.php">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->



<section >

    
    <div class="pricing-area" style="margin-top: -30px;" >
        <div class="container">
            <div class="row">
                              
              <div class="col-md-6">
                <div class="box">
                  <h3 style="font-size: 48px;padding-left: 10px; margin-bottom: 5px;">PAYLOAD</h3>
                  <div style="font-size :16px;text-align: left;padding: 0px 15px 15px 15px;">
                        <p align="left">The payload represents the goal of the satellite. It stands for the purpose the satellite is going
                        to serve, once it is in orbit. The Payload subsystem is responsible for identifying the ideal payload for our satellite after
                        performing feasibility analysis. This subsystem interacts with all the subsystems to generate
                        requirements imposed by the payload on the project and the individual subsystems.</p>

                        <p>The animation depicts the payload of Pratham : measuring the (TEC) Total Electron Count .</p>

                 </div>
              </div>                 
            </div>

            <div class=" col-md-6">
                <img src="images/subsysBG/payloadBG.gif"  width="75%" height="auto" alt="TEC">
            </div>

        </div>
    </div>

</section>

<?php include('footer.php'); ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/fittext.js"></script>
    <script src="js/lettering.js"></script>
    <script src="js/textillate.js"></script>
    <script>
    $(function () {
        $('.tlt').textillate({
            loop: true,
            minDisplayTime: 4000,
            in: {
                effect: 'fadeInLeftBig',
                delayScale: 1.5,
                delay: 50,
                sync: true,
                shuffle: false,
                reverse: false,
                },

            out: {
                effect: 'fadeOutRightBig',
                delayScale: 1.5,
                delay: 50,
                sync: true,
                shuffle: false,
                reverse: true,
                },
        });
    })
    </script>
</body>
</html>
