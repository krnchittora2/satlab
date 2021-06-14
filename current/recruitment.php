<?php include('header.php'); ?>
<style>
@media only screen and (max-device-width: 480px) {

#my-fb-plugin {
text-align:center;
float:none !important;
width:100%;
margin-left:25%;
}
}

</style>
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
					<li class="active dropdown">
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
						<li class="dropdown">
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
                <h2 style="text-align:center;">Recruitment for IITB Satellite Team</h2>


 <p align="center"><a target ="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSdZE3LQ3ScETucCBlUlhjIeFPzUBYHTWQNdUvo2kEZp5oZdkQ/viewform?c=0&w=1" class="btn btn-primary">Click to Apply</a></p><br>
<p align="center"><h4>Last Date to Apply : 23:59, January 20, 2017</h4></p>
      
<br><br><p  class="lead" align="justify">Pratham, Student Satellite team of IIT Bombay, announces the commencement
of the recruitment process for the satellite team for the new satellite Advitiy. For the same we are conducting a recruitment test. All UG's and PG's students are welcome to
apply for the test.
<br>
<br><center> <img id="sat" width="400 "src="images/sat.jpg" class="img img-responsive"/><br>
			               The Pratham Satellite	  
        </center>  <br>
     <div class="myTable">
<table>
<!--
<tr>
<td>Orientation</td><td>9 PM, January 06, 2016</td>
</tr>
<tr>
<td>Venue</td><td>Seminar hall, Aerospace Department</td>
</tr>-->
<tr>
<td>Preliminary Test</td><td> January 24, 2017</td>
</tr>
<tr>
<td>Time and Venue</td><td>TBA</td>
</tr>
</table></div>

<br><br>

<p  class="lead" align="justify"><h4 style="text-align:left; font-size:x-large;">Recruitment Process Summary </h4></p><br>
<p  class="lead" align ="justify">1) Primary assessment test based on Pratham's reports as well as reasoning skills. A written exam based on Pratham's reports(will be mailed after filling the google form) will take place. All papers will have objective and subjective sections. Around 40 students will be selected.(This is subject to overall performance)</p>
<p  class="lead" align ="justify">2)  Presentations about individual subsystems. After the written test, individual subsystems' work will be presented by the current team, to give you an idea about the work in each subsystem. Depending on the test's results and your preferences, you will be allotted a subsystem.
</p>

<br>
<p  class="lead" align="justify">For any queries, feel free to contact:</p><br>
<div class="myTable">

<table>
<tr>
<td>Ratnesh Mishra,<br />
  Email id.: ratnesh1607@gmail.com <br>
  Ph.: 8879476341</td></tr>
<tr><td>Yash Sanghvi,<br />
  Email id.: sanghviyash7@gmail.com  <br>
  Ph.: 9167345410</td>

</table></div>

 
				</section>	

<?php include('footer.php'); ?>

    <script src="js/jquery.js"></script>
		<script src="js/flipclock.min.js"></script>
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
  			minDisplayTime: 5000,
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
	<script type="text/javascript">
var sWidth = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;
console.log(sWidth);
if(sWidth > 480) {


}
		
	</script>

</body>
</html>
