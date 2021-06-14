<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/gallery.css">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    // Initializes the carousel
    $(".start-slide").click(function(){
        $("#myCarousel").carousel('cycle');
    });
    // Stops the carousel
    $(".pause-slide").click(function(){
        $("#myCarousel").carousel('pause');
    });
    // Cycles to the previous item
    $(".prev-slide").click(function(){
        $("#myCarousel").carousel('prev');
    });
    // Cycles to the next item
    $(".next-slide").click(function(){
        $("#myCarousel").carousel('next');
    });
});
</script>
</head>

<style>  
/*Active Menu*/
.dropdown #journeyM{
  background-color: #3B5998;
  color: #fff;}
</style>

<body>
<?php include('prev/header.php'); ?>

<section>

<br>
    <!-- <div id="main_area"> -->
        <!-- Slider -->
        <!-- <h1 style="text-align: center; font-size: 40px;"> Gallery </h1> -->
        <div class="row">
            <div class="col-sm-5" id="slider-thumbs">
                <ul class="hide-bullets">
                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-0">
                            <img src="images/galleryPics/clean_room_iitb.jpg">
                        </a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-1"><img src="images/galleryPics/dinner_with_ipgp_team.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-2"><img src="images/galleryPics/national_science_day_at_selu.png"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-3"><img src="images/galleryPics/exisro_chairman_dr_radhkrishnan.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-4"><img src="images/galleryPics/exnasa_administrator_charles_bouldon.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-5"><img src="images/galleryPics/flag_off_ceremony.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-6"><img src="images/galleryPics/flag_off_ceremony_1.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-7"><img src="images/galleryPics/harbin_institute_forum.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-8"><img src="images/galleryPics/iac_2014.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-9"><img src="images/galleryPics/iac_20141.jpg"></a>
                    </li>
                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-10"><img src="images/galleryPics/iysc_2016.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-11"><img src="images/galleryPics/pratham_team__ipgp.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-12"><img src="images/galleryPics/satellite_lab_iitb.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-13"><img src="images/galleryPics/team_lukkha.jpg"></a>
                    </li>
                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-14"><img src="images/galleryPics/team_outing.jpg"></a>
                    </li>

                    <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-15"><img src="images/galleryPics/team_treat.jpg"></a>
                    </li>

                     <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-16"><img src="images/galleryPics/tech_expo_2015.png"></a>
                    </li>

                     <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-17"><img src="images/galleryPics/techfest_2017.jpg"></a>
                    </li>

                     <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-18"><img src="images/galleryPics/visit_of_dr_kiran_rao_isro_chairman.jpg"></a>
                    </li>

                     <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-19"><img src="images/galleryPics/visit_of_dr_k_sivan_vssc_director.jpg"></a>
                    </li>

                     <li class="col-sm-4">
                        <a class="thumbnails" id="carousel-selector-20"><img src="images/galleryPics/visit_of_sudhakar_sir_exfacad.jpg"></a>
                     </li>
                </ul>
            </div>
            <div class="col-sm-7 ">
                <br><br>
                <div class="col-xs-12 created" id="slider">
                    <!-- Top part of the slider -->
                    <div class="row">
                        <div class="col-sm-12" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel" style="width: 700px;" style=" margin-top:40px">
                                
                                <!-- Carousel items -->
                                <div class="carousel-inner padding-1">
                                    <div class="active item" data-slide-number="0">
                                        <img src="images/galleryPics/clean_room_iitb.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Clean room </h3>
                                        <p> Our team members working in the clean room. All the hardware tests and mock-integrations happen here.</p>
                                        </div>
                                        </div></div>


                                    <div class="item" data-slide-number="1">
                                        <img src="images/galleryPics/dinner_with_ipgp_team.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Dinner with IPGP team </h3>
                                        <p> Pratham’s founding team having dinner with the IPGP France team.
                                        IPGP built a ground-station for receiving Pratham’s electron count data.
                                        </p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="2">
                                        <img src="images/galleryPics/national_science_day_at_selu.png">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> National Science Day at Selu </h3>
                                        <p>  The team was invited as the chief guest. The enthusiasm of the kids was contagious!
                                        </p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="3">
                                        <img src="images/galleryPics/exisro_chairman_dr_radhkrishnan.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Ex-ISRO chief </h3>
                                        <p> Picture with ex-ISRO chief Dr. Radhakrishnan.</p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="4">
                                        <img src="images/galleryPics/exnasa_administrator_charles_bouldon.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Pic with Ex-NASA administrator </h3>
                                        <p> Our team Ex-NASA administrator Charles Boulden
                                        </p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="5">
                                        <img src="images/galleryPics/flag_off_ceremony.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Flag OFF Ceremony </h3>
                                        <p> With ISAC Director M. Annadurai (center) and the Small Satellite Director of ISRO and the chief mentor to the Pratham poject, A. Khenned Sir. 
                                        </p>
                                        </div>
                                        </div></div>
                                    
                                    <div class="item" data-slide-number="6">
                                        <img src="images/galleryPics/flag_off_ceremony_1.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Flag OFF Ceremony </h3>
                                        <p> Our team members accompanying Pratham to its final journey on earth.</p>
                                        </div>
                                        </div></div>
                                    
                                    <div class="item" data-slide-number="7">
                                        <img src="images/galleryPics/harbin_institute_forum.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Harbin Institute Forum </h3>
                                        <p>  Interacting with satellite and space enthusiasts across the globe. The Pratham team was invited to present on the project. </p>
                                        </div>
                                        </div></div>
                                    
                                    <div class="item" data-slide-number="8">
                                        <img src="images/galleryPics/iac_2014.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> IAC 2014 </h3>
                                        <p>  Ankita during her presentation
                                        </p>
                                        </div>
                                        </div></div>
                                    
                                    <div class="item" data-slide-number="9">
                                        <img src="images/galleryPics/iac_20141.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> IAC 2014 </h3>
                                        <p> Ratnesh presenting on the Thermal modeling of the satellite.
                                        </p>
                                        </div>
                                        </div></div>
                                    
                                    <div class="item" data-slide-number="10">
                                        <img src="images/galleryPics/iysc_2016.jpg">
                                       <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> IYSC 2016 </h3>
                                        <p > The Pratham team was invited as the Chief Guest at the Indian Youth Science Congress 2016.</p>
                                        </div>
                                        </div></div>
                                    
                                    <div class="item" data-slide-number="11">
                                        <img src="images/galleryPics/pratham_team__ipgp.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Pratham Team @IPGP </h3>
                                        <p> A visit to discuss the various aspects of the collaboration between the Student Satellite Team and the IPGP team
                                        </p>
                                        </div>
                                        </div></div>
                                    
                                    <div class="item" data-slide-number="12">
                                        <img src="images/galleryPics/satellite_lab_iitb.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> SatLab</h3>
                                        <p> The second home of most of the team members. Don’t be surprised if you find some people spending more time here than their hostel rooms.
                                        </p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="13">
                                        <img src="images/galleryPics/team_lukkha.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Team lukkha </h3>
                                        <p> Coz it’s not a bunch of colleagues, but a bunch of friends doing a project together</p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="14">
                                        <img src="images/galleryPics/team_outing.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Team Outing </h3>
                                        <p> Keep happening every once in a while
                                        </p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="15">
                                        <img src="images/galleryPics/team_treat.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Team Treat </h3>
                                        <p> Coz treats are essential in a project like this.</p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="16">
                                        <img src="images/galleryPics/tech_expo_2015.png">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Tech Expo 2015 </h3>
                                        <p>Showcasing the project before the institute community. Several interesting and important insights are received from the institute faculty members and the student community.
                                        </p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="17">
                                        <img src="images/galleryPics/techfest_2017.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Techfest 2017 </h3>
                                        <p>  It’s always good to interact with the young minds. They sometimes ask questions which make us challenge our fundamentals
                                        </p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="18">
                                        <img src="images/galleryPics/visit_of_dr_kiran_rao_isro_chairman.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Visit of Dr. Kiran Kumar </h3>
                                        <p> A short, interactive and pleasant session with the ISRO Chairman, discussing the progress of the project. We were humbled by his visit.
                                        </p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="19">
                                        <img src="images/galleryPics/visit_of_dr_k_sivan_vssc_director.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Visit of Dr. K. Sivan </h3>
                                        <p> A pleasant interaction with the VSSC Director. The Student Satellite Team will forever be grateful to VSSC for launching Pratham.
                                        </p>
                                        </div>
                                        </div></div>

                                    <div class="item" data-slide-number="20">
                                        <img src="images/galleryPics/visit_of_sudhakar_sir_exfacad.jpg">
                                        <div class="carousel-caption d-none d-md-block" style="padding: 0px !important;">
                                        <div class="Caption">
                                        <h3> Visit of Sudhakar Sir</h3>
                                        <p> A delightful moment for the team. After all, the project wouldn’t have started without the encouragement, backing and support of Sudhakar Sir.
                                        </p>
                                        </div>
                                        </div></div>


                                </div>
                                <!-- Carousel nav -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-buttons padding-2 created">
                <br> <br>

                     <input type="button" class="btn btn-info start-slide inner" value="Start">
                    <input type="button" class="btn btn-info pause-slide inner" value="Pause">
                    <input type="button" class="btn btn-info prev-slide inner" value="Previous Slide">
                    <input type="button" class="btn btn-info next-slide inner" value="Next Slide">
                </div>
                </div>
            <!--/Slider-->
        </div>

    <!-- </div> -->
<!-- </div> -->

</section>



<script>
     jQuery(document).ready(function($) {
 
         $('#myCarousel').carousel({
                 interval: 5000
         });
 
         //Handles the carousel thumbnails
         $('[id^=carousel-selector-]').click(function () {
         var id_selector = $(this).attr("id");
         try {
             var id = /-(\d+)$/.exec(id_selector)[1];
             console.log(id_selector, id);
             jQuery('#myCarousel').carousel(parseInt(id));
         } catch (e) {
             console.log('Regex failed!', e);
         }
     });
         // When the carousel slides, auto update the text
         $('#myCarousel').on('slid.bs.carousel', function (e) {
                  var id = $('.item.active').data('slide-number');
                 $('#carousel-text').html($('#slide-content-'+id).html());
         });
 });
 </script>

<!-- <script>
// Load this when the DOM is ready
$(function(){
  // You used .myCarousel here. 
  // That's the class selector not the id selector,
  // which is #myCarousel
  $('#myCarousel').carousel();
});
</script> -->
 


<?php include('prev/footer.php'); ?>

</body>
</html>