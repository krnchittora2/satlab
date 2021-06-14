<?php include('header.php'); ?>	
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
                <h2 style="text-align:left;">Project Timeline</h2>


<p align="justify"><b>Background</b>
<p align="justify">The challenge to build a Student Satellite was taken up by two Aerospace Department students namely <i>Saptarshi Bandyopadhyay</i> and <i>Shashank Tamaskar</i>, around July 2007. The feasibility of the concept was proved to the Aerospace Department, which agreed to support the team in this initiative. During September &ndash; October 2007, a team was chosen from amongst the students spanning various departments and batches. During December 2008, the team worked together and understood some of the essentials that were required for a project of this magnitude. Work on the Satellite began in full earnest from January 2008. In February, the project-managers and team leaders of all Sub-Systems went to ISAC (ISRO Satellite Center) Bangalore, where they interacted with Raghava Murthy (Project Director, Small Satellite Project) and his team of engineers who reviewed our progress. Finally after months of debating and reviewing, the Payload for our first Satellite was chosen to be Total Electron Count of the Ionosphere, around May 2008. </p>
 <p align="justify">   During the Summer Vacations (May-July, 2008), the team worked on the Conceptual Design of the Satellite which culminated in the Conceptual Design Review (CDR) held within IIT Bombay on 31st July 2008, which was attended by a number of faculty members. Then the entire team of 33 students went to ISAC in August for the project CDR. It was attended by Dr Raghava Murthy and other Project Directors and Engineers. The team was lauded for the work done so far and suggestions were  givn for improvement. The next milestone for the Satellite project is the Preliminary Design Review.</p>
<p align="justify">  The project is under the aegis of the Aerospace Department,  but is truly an institute level project as the work  involves many other departments like Electrical, Mechanical, etc. About 20  faculty members belonging to Aerospace, Electrical,  Mechanical and Computer Science Departments are involved with the project. Although 'Pratham' is a student  initiative, the team leader for Pratham is Prof. Sudhakar from Aerospace Engineering Department.</p>
<p align="justify">  All through the project, a lot of emphasis  has been given to documentation of the work. Detailed descriptions of the  methodology and the results of the work done by the team have been included in  the documentation. The Requirements Capture Report was written during the  months of March &ndash; May 2008. The Conceptual Design Report was written after the  Conceptual Design was finalised in July 2008. These reports are archived in our  website and will serve as stepping stones for the future projects.</p>
<br><br>
<p align="center"><img class="img" src="images/timeline.png"></p>
<br><br>
<p align="center"><img class="img" src="images/futureTimeline.png"></p>
</div>


				
			
			</div>	

 
				</section>	

<?php include('footer.php'); ?>

    <script src="js/jquery.js"></script>
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
