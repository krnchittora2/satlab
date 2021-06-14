<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/d1d1a9f4b7.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <link rel="stylesheet" href="css/style-GS.css">
</head>
<body>



<!-- Navbar -->
<div class="parallax-header" data-parallax="scroll" data-z-index="1" data-image-src="images/gs/1.jpg">

<?php include 'header.php';?>

<!--
	<div class="header scroll-effect">
	  <a href="#" class="logo"><img src="img-ham/gs/ham-logo.png"></a>
	  <input type="checkbox" id="chk"/>
	  <label for="chk" class="show-menu-btn">
	    <i class="fas fa-bars"></i>
	  </label>

	  <ul class="menu">
	    <a href="HAM.html">About</a>
	    <a href="#">Event</a>
	    <a href="#">Blog</a>
	    <a href="#">Gallery</a>
	    <a href="HAM-team.html">Team</a>
	    <a href="HAM-contact.html">Contact</a>

	    <label for="chk" class="hide-menu-btn">
	      <i class="fas fa-times"></i>
	    </label>
	  </ul>
	</div>
-->

		<div class="main-head">
			<h1>Ground Station</h1>
			<a href="#go"><i class="far fa-arrow-alt-circle-down"></i></a>
		</div>

</div>

<!-- Parallax and Rest Body -->

<hr style="margin-top: 0;height: 0;margin-bottom: 75px;" id="go">
<div class="groundstation" id="go">
	<p>The main ground station for receiving Pratham signals is situated on the 
	roof-top of Aerospace Department of IIT Bombay. It has the following major functions:</p>

	<ul>
		<li>Satellite tracking and receiving segment</li>
		<li>Uplink transmission segment</li>
		<li>Payload data logging</li>
	</ul>

	<p>At the GS we have some self-fabricated and some off-the shelf components.</p>

	<ul>
		<li><strong>Antennas:</strong> Two pairs of crossed yagi antennas, one pair for 
		each frequency band i.e. central frequency 145.98 MHz, 437.455 MHz</li>
		<li><strong>Transceiver base station:</strong> Kenwood TS2000 radio demodulates 
		the FSK signal and stores the data in the mainframe.</li>
		<li>A pair of AD8302 modules measures RF gain and phase value between the two 
		inputs it takes Uses Log amplifiers to calculate the value of log (InpA/ InpB)</li>
		<li><strong>Low Noise Amplifiers:</strong> 4 low noise amps are 
		being used on the distinct feeds from antennas</li>
		<li>Rotor arrangement with an Interface circuit to integrate the device with 
		software architecture. Rotor (Yeasu G-5500) is being used to orient the antenna 
		structure to the required inclination with respect to reference level. The rotor 
		interacts with the mainframe via Rotor Controller Interface (RCI-USB by EA4TX)</li>
	</ul>

</div>


	<div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="images/gs/2.jpg">
		<div class="hdng"><h1>Activities at the Ground Station</h1></div>
	</div>

<div class="activities">
	
	<p>Regular tracking activities go on at the GS. We use a crossed yagi antenna, 
	3 Low Noise amplifiers (total gain of 63 dB) and Kenwood TS2000 for listening 
	to the satellites. For pass predictions n2yo.com is used and Predict is used 
	on a Linux system for automated tracking. We have tracked the following 
	satellite beacons successfully so far:</p>

	<ul>
		<li>CUBESAT XI-V</li>
		<li>CUTE 1</li>
		<li>CUTE 1.7+APDII</li>
		<li>HORYU 4</li>
		<li>JUGNU</li>
		<li>SWAYAM</li>
		<li>XW-2A</li>
	</ul>

</div>

	<div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="images/gs/3.jpg">
		<div class="hdng"><h1>Tracking Pratham</h1></div>
	</div>

<div class="tracking">
	<p>The Ham community is very critical to the success of any satellite 
	working in the amateur band. We are also looking forward to hearing 
	from Hams around the world for beacon and telemetry reports.</p>

	<p><strong>Pratham has been assigned the Identifier - 41783 by NORAD. 
		It can now be tracked using n2yo from <a href="http://www.n2yo.com/satellite/?s=41783">Here !!</a></strong></p>

	<p>Here are the details required to track the satellite.</p>

	<table>
		<tr>
			<th></th>
			<th>Beacon</th>
			<th>Telemetry</th>
		</tr>
		<tr>
			<td>Frequency</td>
			<td>145.98 MHz</td>
			<td>437.455 MHz</td>
		</tr>
		<tr>
			<td>Modulation</td>
			<td>CW Morse code</td>
			<td>FSK, AX.25</td>
		</tr>
		<tr>
			<td>Data Rate</td>
			<td>35 wpm</td>
			<td>1200 bps</td>
		</tr>
		<tr>
			<td>EIRP</td>
			<td>23 dbm</td>
			<td>18 dbm</td>
		</tr>
		<tr>
			<td>Region transmitted over</td>
			<td>Whole World</td>
			<td>India and France</td>
		</tr>
	</table>

	<p><strong>Listen to one of the First Beacon signals received from Pratham</strong></p>

	
	<div id="audio">
		<audio controls>
			<source src="firstBeacon.mp3" type="audio/mpeg"> Sorry!! Your browser doesn't support it..
		</audio>
	</div>


	<p><strong>Beacon:</strong> PRATHAM IIT BOMBAY STUDENT SATELLITE</p>

	<p><strong>Please share with us the Downlink of Pratham received by you at 
		<a href="mailto:manvidhawan1993@gmail.com">manvidhawan1993@gmail.com</a> 
		or <a href="mailto:ratnesh1607@gmail.com">ratnesh1607@gmail.com</a></strong></p>

	<p><strong>​The following is the TLE data for the satellite:</strong></p>

	<p>2016-059C</p>

	<ol>
		<li>41785U 16059C 16271.69947962 .00004609 00000-0 88934-3 0 9999</li>
		<li>41785 98.2049 329.2442 0030494 263.1090 96.7138 14.63229411 193</li>
	</ol>
</div>


	<div class="parallax" data-parallax="scroll" data-z-index="1" data-image-src="images/gs/4.jpg">
		<div class="hdng"><h1>Ground Station Workshops</h1></div>
	</div>

<div class="workshops">

	<p>Team Pratham feels that the entire country should benefit by the knowledge 
	and experience that the team has gained while going through the satellite 
	building process. We propose to share our knowledge by organizing workshops 
	which will inspire others in the field of satellite technology. A Google 
	Group named <a href="#">"Social Goal IITB Satellite Pratham"</a> has been launched to 
	facilitate sharing of information among the participating universities. Please join it.</p>

	<p>The list of institutes and universities that has attended the workshop are as follows:</p>

	<ul>
		<li>Indian Institute of Technology, Kharagpur</li>
		<li>Birla Institute of Technology, Deoghar</li>
		<li>Atharva College of Engineering</li>
		<li>College of Engineering, Pune</li>
		<li>National Institute of Technology, Calicut</li>
		<li>Gujrat University</li>
		<li>Indian Institute of Technology, Madras</li>
		<li>Walchand College of Engineering, Sangli</li>
		<li>Mumbai University</li>
		<li>Gyanganga University</li>
		<li>Bharati Vidyapeeth College of Engineering, Navi Mumbai</li>
		<li>Birla Institute of Technology and Science, Pilani</li>
		<li>University School of Sciences (Physics Department)</li>
		<li>Thapar University, Patiala</li>
		<li>University College of Engineering, Kota</li>
		<li>Yadavrao Tasgoankar College of Engg. and Management</li>
		<li>National Institute of Technology Surathkal</li>
		<li>Government Engineering College Gandhinaga</li>
		<li>Vishwakarma Government Engg. College Chandkheda</li>
		<li>National Institute of Technology, Bhopal</li>
	</ul>
	
</div>












<!-- Footer -->

<?php include 'footer.php';?>

<!--
<footer>
<div class="container padding">
	<div class="row">
		<div class="col-md">
		<h6 style="text-align: center; font-size: 14px;"><i class="fas fa-copyright"> </i> Maintained By 
			<a href="https://www.aero.iitb.ac.in/satlab/" class="footer-link">Student Satellite Project</a></h6>
		</div>
	</div>
</div>
</footer>
-->











</body>
</html>	