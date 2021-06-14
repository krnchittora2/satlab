<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110447978-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110447978-1');
</script>
</head>

<style>
@media only screen and (max-device-width: 480px) {
    #my-fb-plugin {
    text-align:center;
    float:none !important;
    width:100%;
    margin-left:25%;
    }
}

/****GS multilevel dropdown****/

#ddGS{
    position: relative;
}
.dd-content {
    display: none;
    position: absolute;
    top: -1.5px;
    left:135px;
    background-color: rgba(0,0,0,0.7);
}
.dd-content a {
    color: #fff;
    width: 120px;
    padding: 8px 15px;
    display: block;
}
#ddGS:hover .dd-content {display: block;}
.dd-content a:hover {background-color: #3B5998 ; color: #fff;}

.dropdown #projectM{
  background-color: #3B5998;
  color: #fff;
}
</style>

<?php include('header.php'); ?>
<?php include('headerMenu.php'); ?>

<!--                  <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">

					    <li class="active dropdown">
                            <a href="#abtSatlab" class="dropdown-toggle" data-toggle="dropdown" >About<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="pratham.php">Pratham</a></li>
                                <li><a href="advitiy.php">Advitiy</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
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
								<li id="ddGS"><a href="groundStation.php">Ground Station<i class="fa fa-angle-down"></i></a>  
                                    <div class="dd-content">
                                       <a href="gsActivities.php">Activities</a>
                                       <a href="gsTracking.php">Tracking</a>
                                       <a href="gsWS.php">Workshop</a>
                                    </div> 
                                </li>
								<li><a href="faq.php">FAQ</a></li>
                                <li><a href="wiki.php">Wiki</a></li> 
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">The Journey<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="blogs.php">Blogs</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="media.php">Media</a></li>
                                <li><a href="global.php">Pratham Goes Global</a></li> 
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact</a></li>    

                    </ul>
                </div> -->


                </div> <!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->


	<center><div class="container clock" id="mycountdown" ></div>
	<div class="message"></div></center>

    <section id="main-slider" class="no-margin">

        <div class="carousel slide" data-ride="carousel" data-interval="4000">
 
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                           
                                <div class="carousel-content" style="font-family: Georgia, serif;
font-size: 28px;
font-style: italic; color:white;line-height: 1.45; margin-top:200px;">
<center><div id="launch" style=" background: rgba(255, 255, 255, 0.5); margin-top:275px; border-bottom-right-radius:40px; border-bottom-right-radius:40px; "></div></center>
                                    <div class="animation animated-item-1">"Man must rise above Earth to the top of the atmosphere and beyond, for only then will he fully understand the world in which he lives" </div>
                                    <h2 class="animation animated-item-2" style="font-family: Georgia, serif; font-style: italic;">– Socrates (469-399 BC)</h2>
                                   
                               
                            </div>

                    
							

                        </div>
                    </div>
                </div>
<!--
        <div class="carousel slide" data-ride="carousel" data-interval="4000">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                           
                                <div class="carousel-content" style="font-family: Georgia, serif;
font-size: 28px;
font-style: italic; color:white;line-height: 1.45; margin-top:200px;">
                                    <div class="animation animated-item-1">"Man must rise above Earth to the top of the atmosphere and beyond, for only then will he fully understand the world in which he lives" </div>
                                    <h2 class="animation animated-item-2" style="font-family: Georgia, serif; font-style: italic;">– Socrates (469-399 BC)</h2>
                                   
                               
                            </div>

                          <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="images/slider/img1.png" class="img-responsive">
                                </div>
                            </div>
							

                        </div>
                    </div>
                </div>

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                    
                                <div class="carousel-content">
					<div style=" background: rgba(255, 255, 255, 0.5); margin-top:200px; border-radius:10px; width:30%; ">
                                    <h1 class="animation animated-item-1" style=" font-family: Georgia, serif; 
font-size: 28px;
font-style: italic; color:black;line-height: 1.45;" >&nbsp;Team Pratham</h1>
</div>
                                  

                                   
                        
                            </div>
						

                        </div>
                    </div>
                </div>

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="carousel-content">
					<div style=" background: rgba(255, 255, 255, 0.5); margin-top:200px; width:58%; border-radius:10px;">
                                    <h1 class="animation animated-item-1" style=" font-family: Georgia, serif; 
font-size: 28px;
font-style: italic; color:black;line-height: 1.45;">&nbsp;&nbsp;Indian Institute of Technology Bombay</h1>
</div>
						
                        </div>
                    </div>
                </div>
            </div><!--/.carousel-inner--
        </div><!--/.carousel-
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>-->
    </section><!--/#main-slider-->

  


    <section class="pricing-area" >
        <div class="container">
           <div class="center wow fadeInDown">
            <div id="abtSatlab">
                <img id="logoiitb" src="images/iitb.png" width=150 style="padding-right: 20px;"/>
                <h2><br>IIT Bombay Student Satellite Project</h2>
            </div>


                <br>
                
                <div class="lead" style="text-align: left;margin-bottom: 30px;">
                

                <p >The IIT Bombay Student Satellite Project is a landmark project taken up by IIT Bombay students. The
                    objective of this project is to make IIT Bombay a respected Centre of Excellence in Satellite and Space
                    Technology in the world. These Satellites could be test-beds for new technology that is being developed
                    in the institute and also a method for space qualification.<br>

                    The first satellite under this project was launched on board the PSLV C-35 on 26th September 2016. Christened <a href="pratham.php" style="color: red">Pratham</a>, being IIT Bombay's first foray into space technology, the satellite's payload was to produce data on the total electron count in the atmosphere, used for applications like GPS correction.
                    <br>
                    Planned, designed, built and tested exclusively by the students, with guidance from Indian Space Research Organization (ISRO) and IITB
                    faculty, the completely autonomous satellite Pratham took IIT Bombay into the elite space club and
                    served as the first step towards achieving our overall objectives. That’s the reason Pratham is referred to
                    as ‘The First Step Towards Infinity’. <br> 
                    The team has now begun the next chapter in the Student Satellite
                    Project of IITB and work has begun on <a href="advitiy.php" style="color: red">Advitiy</a>, the second satellite. The team has also built an
                    autonomous Ground-station at IIT Bombay for tracking and communicating with satellites. With Ground-
                    station workshops, <a href="https://www.facebook.com/HamclubIITB/" style="color: blue"><b>Ham Club</b></a> and various other related activities, the Project also aims to involve other universities across India and spread the knowledge accumulated by the team over the years as a part of the social goal.</p>
                    </div>
				

     
<div class="container">
<div class="row">

    <div class="col-sm-6" style="">
    <a href="pratham.php">
    <div style="height: 80%">
    <img class="img img-responsive" id="sat" style="align-items: center;width: 100%;height: 400px;" src="images/lpP1.jpg" />
    </div>
    <div style="height: 20%;padding-top: 22px;font-size: 20px;color: red;">
    <p>First step towards infinity...</p><br>
    <!-- <p font-weight: bold;><u>Pratham</u></p> -->
    </div>
    </a>
    </div>



   <div class="col-sm-6" style="">
    <a href="advitiy.php">
    <img class="img img-responsive" id="sat" style="align-items: center;width: 100%;height: 400px;" src="images/lpA.jpg" />

    <div style="height: 20%;padding-top: 22px;font-size: 20px;color: red;">
    <p >Next step towards infinity...</p><br>
    <!-- <p style="font-weight: bold"><u>Advitiy</u></p> -->
    </div>
    </a>
    </div>

    

</div>
</div>
</div>



	
			</div>

			</div>	
		


    </section>	

    <!-- Project Managers -->
    <section id="bottom" >
       <div  class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-7">

                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Current Project Manager</a></li>   <li class=""><a href="#tab4" data-toggle="tab" class="analistic-03">Current Mentors</a></li>
									        <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Ex-Project Managers</a></li>
                                    <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Ex-Mentors</a></li>
                            
                                </ul>
                            </div>

                            <div class="parrent media-body">
                                <div class="tab-content">
                                    <div class="tab-pane active in" id="tab1">
                                        <div class="media">
                                         
                                            <div class="media-body">
    <p align="justify"><span style="font-weight: bold; ">
    Yash Sanghvi</span><br/>
    Project Manager<br />
    Pratham,  IIT Bombay Student Satellite Project<br />
    Office: +91-22-2576-4147<br />Email:- sanghviyash7@gmail.com</p>                 
<!--
				 
    <p align="justify"><span style="font-weight: bold; ">Ratnesh Mishra</span><br />
    Project Manager<br />
    Pratham,  IIT Bombay Student Satellite Project<br />
    Office: +91-22-2576-4147<br />Email:- ratnesh1607@gmail.com</p>
<p align="justify"><span style="font-weight: bold; ">Manvi Dhawan</span><br />
    Project Manager<br />
    Pratham,  IIT Bombay Student Satellite Project<br />
    Office: +91-22-2576-4147<br />Email id:- manvidhawan1993@gmail.com</p>-->
                                            </div>
                                        </div>
                                    </div>

                                     <div class="tab-pane" id="tab2">
                                        <div class="media">

                                            <div class="media-body">
											<ul>
                                                     <li><b>Prof. K. Sudhakar</b></li>
<li>   <b>Prof. Hemendra Arya</b><br>Assistant Professor<br>
Department of Aerospace Engineering,<br>
Indian Institute of Technology Bombay<br><br>
</li><li>
<b>Prof. Prasanna M. Mujumdar</b><br>Assistant Professor<br>
Department of Aerospace Engineering,<br>
Indian Institute of Technology Bombay<br><br></li>
													 </ul>
                                            </div>
                                        </div>
                                     </div>

                                     <div class="tab-pane" id="tab3">
		<ul>
		      <li><b>Ratnesh Mishra</b> &#60;ratnesh1607@gmail.com&#62; </li>
	  
		      <li><b>Manvi Dhawan</b> &#60;manvidhawan1993@gmail.com&#62;</li>
	  
      <li><b>Shantanu Shahane</b> &#60;shahaneshantanu@gmail.com&#62;</li>

      <li><b>Tushar Jadhav</b> &#60;tusharj.iitb@gmail.com&#62;</li>

      <li><b>Sanyam Mulay</b> &#60;sanyamsmulay@gmail.com&#62;</li>

      <li><b>Jhonny Santosh Jha</b> &#60;jhajhonny@gmail.com&#62;</li>
  
      <li><b>Saptarshi Bandyopadhyay(Co-founder)</b></li>
      <li>&#60;saptarshi.bandyopadhyay@gmail.com&#62;</li>
   
      <li><b>Shashank Tamaskar(Co-founder)</b></li>
      <li>&#60;tamaskar@gmail.com&#62;</li>
    </ul>
   
                                     </div>
                                     <div class="tab-pane" id="tab4">
                                        <div class="media">

                                            <div class="media-body">
											<b>Prof. Prabhu Ramachandran</b><br>
                                                   <!-- <b>Prof. Hemendra Arya</b><br>Assistant Professor<br>-->
Department of Aerospace Engineering,<br>
Indian Institute of Technology Bombay<br><br>
<!--
<b>Prof. Prasanna M. Mujumdar</b><br>Assistant Professor<br>-->
<b>Prof. Varun Bhalerao</b><br>Assistant Professor<br>
Department of Physics,<br>
Indian Institute of Technology Bombay<br><br>

													
                                            </div>
                                        </div>
                                     </div>
                                  
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->      
         
                </div><!--/.col-sm-6-->



           		
	 <div class="fb-page" id="my-fb-plugin" style="float:right; width:40%; " data-href="https://www.facebook.com/iitb.student.satellite/" data-tabs="timeline" data-width="500px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/iitb.student.satellite/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/iitb.student.satellite/">IITB Student Satellite</a></blockquote></div>
      

<!--  Follow Us  

   <div class="container">
        <div class="row">
          <div style="background-color: blue;">
          <p style="font-size: 36px; text-align: left;">Follow Us<br></p>

                <a href="https://www.facebook.com/iitb.student.satellite/" style="display: inline;padding: 15px;font-size:48px" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true" "></i></a> 

                <a href="https://twitter.com/SatlabIITB" style="display: inline;padding: 15px" target="_blank">
                <i class="fa fa-twitter-square" style="font-size:48px"></i></a>
             </div>
            </div>
    </div> -->
        

             
            </div><!--/.row-->    

        </div><!--/.container--> 

    </section><!--/#bottom--> 


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
  			minDisplayTime: 7000,
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

 <div id="fb-root"></div>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7&appId=865422726839990";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html> 