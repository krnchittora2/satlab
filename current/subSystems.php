<?php include('header.php'); ?>
    <link rel="stylesheet" href="css/colorbox.css" />


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="js/jquery.colorbox.js"></script>  

<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
					<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="mission.php">Mission</a></li>
                            </ul>
                        </li>
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Team<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="currentTeam.php">Current Team</a></li>
                                <li><a href="distinguishedAlumni.php">Distinguished Alumni</a></li>
                            </ul>
                        </li>
						<li class="active dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="timeline.php">Timeline</a></li>
                                <li><a href="subSystems.php">Sub-Systems</a></li>
	<li><a href="groundStation.php">Ground Station</a></li>
								<!--<li><a href="documents.php">Documents</a></li>-->
								<li><a href="logs.php">Logs</a></li>
                                <li><a href="global.php">Pratham Goes Global</a></li> 
	<li><a href="publications.php">Publications</a></li>

								<li><a href="faq.php">FAQ</a></li>
                            </ul>
                        </li>
                        <li><a href="http://www.aero.iitb.ac.in/pratham/virtuallaboratory/index.php">Virtual Lab</a></li>
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
   

  


    <section class="pricing-area" >
        <div class="container">
           <div class="center wow fadeInDown">
             
<h2 style="text-align:left;">Sub-Systems</h2>
<p align="justify">Click a Sub-System to learn more about it.</p>
<div style="color: black;">
<ul>
<li><a class='iframe' href="commSS.php">Communication Sub-System</a></li>
<li><a class='iframe' href="controlSS.php">Controls Sub-System</a></li>
<li><a class='iframe' href="elecSS.php">ElectricalSub-System</a></li>
<li><a class='iframe' href="mechSS.php">Mechanical Sub-System</a></li>
<li><a class='iframe' href="payloadSS.php">Payload Sub-System</a></li>

</ul>
</div>
<!--<li><a class='iframe' href="payload.php">Payload Sub-System</a></li>    //iframe removed from each -->
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
