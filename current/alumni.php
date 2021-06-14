<?php include('header.php'); ?>
<!-- <head>
    <title>IITB SSP Alumni</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>  -->

    <style>
		@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic);

		body {
			font-family: 'Source Sans Pro', sans-serif;
			line-height: 1.5;
			color: #323232;
			font-size: 15px;
			font-weight: 400;
			text-rendering: optimizeLegibility;
			-webkit-font-smoothing: antialiased;
			-moz-font-smoothing: antialiased;
		}
		.heading-title {
			margin-bottom: 100px;
		}
		.text-center {
			text-align: center;
		}
		.heading-title h3 {
			margin-bottom: 0;
			letter-spacing: 2px;
			font-weight: normal;
		}
		.p-top-30 {
			padding-top: 30px;
		}
		.half-txt {
			width: 60%;
			margin: 0 auto;
			display: inline-block;
			line-height: 25px;
			color: #7e7e7e;
		}
		.text-uppercase {
			text-transform: uppercase;
		}

		.team-member, .team-member .team-img {
			position: relative;
		}
		.team-member {
			overflow: hidden;
		}
		.team-member, .team-member .team-img {
			position: relative;
		}

		.team-hover {
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			margin: 0;
			border: 20px solid rgba(0, 0, 0, 0.1);
			background-color: rgba(255, 255, 255, 0.90);
			opacity: 0;
			transition: all 0.3s;
		}
		.team-member:hover .team-hover .desk {
			top: 35%;
		}
		.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
			opacity: 1;
		}
		.team-hover .desk {
			position: absolute;
			top: 0%;
			width: 100%;
			opacity: 0;
			-webkit-transform: translateY(-55%);
			transform: translateY(-55%);
			transition: all 0.3s 0.2s;
			padding: 0 20px;
		}
		.desk, .desk h4, .team-hover .s-link a {
			text-align: center;
			color: #222;
		}
		.team-member:hover .team-hover .s-link {
			bottom: 10%;
		}
		.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
			opacity: 1;
		}
		.team-hover .s-link {
			position: absolute;
			bottom: 0;
			width: 100%;
			opacity: 0;
			text-align: center;
			-webkit-transform: translateY(45%);
			transform: translateY(45%);
			transition: all 0.3s 0.2s;
			font-size: 35px;
		}
		.desk, .desk h4, .team-hover .s-link a {
			text-align: center;
			color: #222;
		}
		.team-member .s-link a {
			margin: 0 10px;
			color: #333;
			font-size: 16px;
		}
		.team-title {
			position: static;
			padding: 0px 0;
			display: inline-block;
			letter-spacing: 2px;
			width: 100%;
		}
		.team-title p {
			font-size: 20px;
			margin-bottom: 0px;
			display: block;
			/*text-transform: uppercase;*/
		}
		.team-title span {
			font-size: 14px;
			/*text-transform: uppercase;*/
			color: #a5a5a5;
			letter-spacing: 1px;
		}
		.row {
			margin-bottom: 10px;
		}
		.s-link i{
			font-size: 25px;
		}
		img {
			border-radius: 2%;
		.row {
			margin-bottom: 50px;
}

/*Active Menu*/
.dropdown #teamM{
  background-color: #3B5998;
  color: #fff;}
	</style>




<section id="team" class="team content-section" style="margin: 10px; padding: 10px;">
  <div class="container">
    
    <div class="row text-center">
      <div class="col-md-12">
        <h2>Our Alumni: Visionaries who realised their dreams</h2>
        <h3 class= "caption gray">Find out what they are doing these days</h3>
      </div><!-- /.col-md-12 -->
    </div>

	<div class="row" >
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Mallesh Bommanahal.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Attitude Determination and Controls Subsystem</h4>
						<h4>Aerospace DD | 2009 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/malleshb/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Mallesh Bommanahal</p>
				<span>i3systems</span>
			</div>
		</div>
        <div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Ashish.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Payload Subsystem</h4>
						<h4>Engineering Physics BTech | 2009 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://scienceandtechnology.jpl.nasa.gov/ashish-goel"><i class="fa fa-globe"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Ashish Goel</font></p>
				<span>Postdoctoral researcher, Jet Propulsion Laboratory</span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Saptarshi2.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Systems Engineering, Payload, Integration</h4>
						<h4>Aerospace DD | 2010 Batch</h4>
					</div>
					<div class="s-link">
						<a href="http://publish.illinois.edu/saptarshibandyopadhyay/"><i class="fa fa-globe"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Saptarshi Bandyopadhyay</p>
				<span>Jet Propulsion Laboratory, California Institute of Technology</span>
			</div>
		</div>
	</div>

<div class="row">	
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/default.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Integration Subsystem</h4>
						<h4>Mechanical Dual Degree | 2011 Batch</h4>
					</div>
					<div class="s-link">
						<a href="http://web.stanford.edu/group/prakash-lab/cgi-bin/labsite/people/"><i class="fa fa-globe"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Haripriya Mukundarajan</p>
				<span>PhD at Stanford</span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Jhonny.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Systems Engineering</h4>
						<h4>Civil Dual Degree | 2012 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://in.linkedin.com/in/jhonnyjha"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Jhonny Jha</p>
				<span>Co-founder & CEO mydidi.com</span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Sanyam.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Systems Engineering</h4>
						<h4>Aerospace Dual Degree | 2013 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://in.linkedin.com/in/sanyam-mulay-86653915/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Sanyam Mulay</p>
				<span>Senior Software Engineer, Onco.com</span>
			</div>
		</div>
	</div>

	<div class="row">	
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/default.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Attitude Determination and Controls Subsystem</h4>
						<h4>Electrical Btech | 2011 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.facebook.com/profile.php?id=100015505890500"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Jaideep Joshi</p>
				<span>Postdoc at IISc Bangalore</span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/ankit chiplunkar.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Structures Subsystem</h4>
						<h4>Aerospace Btech | 2011 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://github.com/ankitchiplunkar"><i class="fa fa-github"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Ankit Chiplunkar</p>
				<span>Data Science Researcher</span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Hussain.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Electrical Subsystem</h4>
						<h4>Electrical Mtech | 2012 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/hussainmanasa/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Hussain Manasawala</p>
				<span>Lead Firmware Engineer - Halcyon Technologies</span>
			</div>
		</div>
	</div>

	<div class="row" >
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Deepika.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Communications Subsystem</h4>
						<h4>Chemical DD | 2012 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/deepika-thakur-82043a31/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Deepika Thakur</p>
				<span>McKinsey & Company, Harvard Business School</span>
			</div>
		</div>
        <div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Vaibhav.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Controls and Estimation Subsystem</h4>
						<h4>Aerospace DD | 2012 Batch</h4>
					</div>
					<div class="s-link">
						<a href="http://people.csail.mit.edu/unhelkar/"><i class="fa fa-globe"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Vaibhav Unhelkar</font></p>
				<span>Ph.D. Candidate, MIT</span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Yashovardhan.png" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Attitude Determination and Controls Subsystem</h4>
						<h4>Aerospace DD | 2012 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/yashovardhan-chati/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Yashovardhan Chati</p>
				<span>Machine Learning Engineer at Apple Inc.</span>
			</div>
		</div>
	</div>

	<div class="row">	
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Srujan.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Payload Subsystem</h4>
						<h4>Electrical Btech | 2012 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/srujan-meesala-8658b123/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Srujan Meesala</p>
				<span>PhD student, Harvard University</span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Pranav.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Attitude Determination and Controls Subsystem</h4>
						<h4>Aerospace DD | 2013 Batch</h4>
					</div>
					<div class="s-link">
						<a href="www.linkedin.com/in/pranavgovilkar90"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Pranav Govilkar</p>
				<span>Senior Associate, DBS Bank Singapore</span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Dhruv.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Communications Subsystem</h4>
						<h4>Chemical Btech | 2013 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/dhruv2/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Dhruv Gupta</p>
				<span>PhD student at University of Wisconsin-Madison</span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/AnkitShah.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Integration and Controls</h4>
						<h4>Aerospace Btech | 2013 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/ankit-shah-b4b60b6a/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Ankit Shah</p>
				<span>PhD student at Massachusetts Institute of Technology</span>
			</div>
		</div>

		
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Giri.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Integration and Mechanical</h4>
						<h4>Aerospace Btech | 2013 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.facebook.com/max.payne7891"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Giri Subramanian</p>
				<span>Software Developer for Veriflow Systems</span>
			</div>
		</div>
	
	
	<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Pushkar.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Ground Station and Communication</h4>
						<h4>Aerospace DD | 2014 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/pushkargodbole"><i class="fa fa-linkedin-square"></i></a>
						<a href="https://www.facebook.com/pushkar.godbole"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Pushkar Godnole</p>
				<span>Software Engineer at Yelp</span>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Tushar.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Ground Station, Communication and System Engineer</h4>
						<h4>Aerospace DD | 2014 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/tushar-jadhav-a4921315"><i class="fa fa-linkedin-square"></i></a>
						
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Tushar Jadhav</p>
				<span>Co-founder, CEO, Manastu Space Technologies Pvt. Ltd.</span>
			</div>
		</div>

	
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Shantanu Shahane.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Mechanical Subsystem and Systems Engineer</h4>
						<h4>Mechanical DD | 2015 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/shantanu-shahane"><i class="fa fa-linkedin-square"></i></a>
						<a href="https://www.facebook.com/shahaneshantanu"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Shantanu Shahane</font></p>
				<span>Ph.D. Student, University of Illinois at Urbana–Champaign, USA</span>
			</div>
		</div>


		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Amolika Soni.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Attitude Determination and Controls Subsystem</h4>
						<h4>Aerospace DD | 2016 Batch</h4>
						
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/amolikasoni/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Amolika Soni</font></p>
				<span>L&T Defence, Mumbai</span>
			</div>
		</div>		
    </div>
    <div class="row">
    <div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Manvi.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Controls, Payload and Systems Engineering</h4>
						<h4>Aerospace DD | 2016 Batch</h4>
						
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/manvidhawan
/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Manvi Dhawan</font></p>
				<span>Startup, Renewable Energy Sector</span>
			</div>
		</div>	

<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/ronica.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Communication Subsystem</h4>
						<h4>Aerospace BTech | 2016 Batch</h4>
						
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/ronica-roopak/"><i class="fa fa-linkedin-square"></i></a>
						<a href="https://www.behance.net/Ronica"><i class="fa fa-globe"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Ronica Roopak</font></p>
				<span>Graduate Diploma at Royal College of Art London in 2019 </span>
			</div>
		</div>	
	

<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/ashtesh kumar.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Electrical - OBC Subsystem</h4>
						<h4>Mechanical DD | 2017 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/ashtesh-kumar-2b486270/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Ashtesh Kumar</font></p>
				<span>Co-founder, CTO, Manastu Space Technologies Pvt. Ltd.</span>
			</div>
		</div>
</div>
<div class="row">
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/aayush.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Ground Station and Communication Subsystem </h4>
						<h4>Mechanical DD | 2017 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://in.linkedin.com/in/aayush-yadav-2251285b
"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Aayush Yadav</font></p>
				<span>Senior Process Control Engineer at Bloom Energy</span>
			</div>
		</div>

		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Vishal.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Attitude Determination and Controls Subsystem</h4>
						<h4>Aerospace DD | 2017 Batch</h4>
					</div>
					<div class="s-link">
						
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Vishal Ray</font></p>
				<span>Pursuing a PhD in Astrodynamics at University of Colorado Boulder</span>
			</div>
		</div>


	<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/ratnesh.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Mechanical Subsystem and System Engineer</h4>
						<h4>Aerospace DD | 2017 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/ratnesh-mishra-26946179"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Ratnesh Mishra</font></p>
				<span>Startup, Renewable Energy Sector</span>
			</div>
		</div>
</div>
<div class="row">
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Rachana.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Ground Station and Communications</h4>
						<h4>Aerospace DD | 2017 Batch</h4>
					</div>
					<div class="s-link">
						
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Rachana Agrawal</font></p>
				<span>Purdue University, PhD, Astrodynamics</span>
			</div>
		</div>
	

<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/PAVAN HEBBAR.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Structures, Thermals and Payload</h4>
						<h4>Aerospace BTech | 2017 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://sites.ualberta.ca/~hebbar/"><i class="fa fa-globe"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Pavan R Hebber</font></p>
				<span>MS in Physics at University of Alberta</span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Sumit.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Integrationa nd Mechanical Subsystem</h4>
						<h4>Mechanical BTech | 2017 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.facebook.com/sumit.jain.988"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Sumit Jain</font></p>
				<span>Bosch</span>
			</div>
		</div>
	</div>
	<div class="row">
<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Akshay Khadse.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Controls Subsystem</h4>
						<h4>Electrical MTech | 2018 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/akshaykhadse"><i class="fa fa-linkedin-square"></i></a>
						<a href="https://www.facebook.com/akshaykhadse"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Akshay Khadse</font></p>
				<span>MathWorks India</span>
			</div>
		</div>

		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Yash Sanghvi.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Electrical Subsystem and Systems Engineer</h4>
						<h4>Mechanical DD | 2018 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://in.linkedin.com/in/sanghviyash7"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Yash Sanghvi</font></p>
				<span>RA at NCAIR</span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Mredul Sarda.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Onboard In Loop Simulation</h4>
						<h4>Electrical DD | 2018 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/mredulsarda"><i class="fa fa-linkedin-square"></i></a>
						<a href="https://m.facebook.com/mredul.sarda"><i class="fa fa-facebook"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Mredul Sarda</font></p>
				<span>Consultant - Strategy& (formerly Booz & Company)</span>
			</div>
		</div>
	</div>

	<div class="row">
<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Naveen.png" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>OILS Subsystem</h4>
						<h4>Aerospace BTech | 2016 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://in.linkedin.com/in/naveen-himthani-9a3b0872"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Naveen Himthani</p>
				<span>University of Texas at Austin, PhD</span>
			</div>
		</div>

		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/default.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Thermals Subsystem</h4>
						<h4>Energy Science & Engineering DD | 2018 Batch</h4>
					</div>
					<div class="s-link">
						<a href="#"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Manmohan Verma</font></p>
				<span>Gupshup Software Firm </span>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Harshal.png" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Electrical Subsystem</h4>
						<h4>MEMS Btech | 2018 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://in.linkedin.com/in/harshaljalan"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p>Harshal Jalan</p>
				<span>Finmechanics</span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/abhishek ekka.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Mechanical Subsystem</h4>
						<h4>Mechanical Btech | 2018 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/abhishek-ekka-338218aa"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Abhishek Ekka</font></p>
				<span>RnD Engineer at Tanaka Holdings</span>
			</div>
		</div>
		
		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/Anjan.jpg" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Mechanical Subsystem</h4>
						<h4>Mechanical Btech | 2018 Batch</h4>
					</div>
					<div class="s-link">
						<a href="https://www.linkedin.com/in/anjan-kumar-patel-76398ab4/"><i class="fa fa-linkedin-square"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Anjan Kumar Patel</font></p>
				<span>ICICI Lombard</span>
			</div>
		</div>

		<div class="col-md-4 col-sm-4">
			<div class="team-member">
				<div class="team-img">
					<img src="img/abhishek.png" class="img-responsive">
				</div>
				<div class="team-hover">
					<div class="desk">
						<h4>Electrical Subsystem</h4>
						<h4>CSRE Mtech | 2016 Batch</h4>
					</div>
					<div class="s-link">
						<a href="http://abhishekvp.github.io/"><i class="fa fa-globe"></i></a>
					</div>
				</div>
			</div>
			<div class="team-title">
				<p><font size="4">Abhishek Potnis</font></p>
				<span>CSRE, IIT Bombay PhD student</span>
			</div>
		</div>
				
		
	</div>

	

</div><!-- container -->

</section><!-- AlumniPage -->
<?php include('footer.php'); ?>


<script src="ISME KOI SCRIPTS KA LINK"></script>

</body>
</html>