
<?php $title = 'Advitiy'; include('header.php'); ?>

<section class="about-head">
    <div class="container-fluid">
        <div class="about-title">
            <h1>Advitiy</h1>
        </div>
    </div>
</section>

<section class="pricing-area" >
<div class="container">
   <div class="center wow fadeInDown">

        <h2 style="text-align:left;" >About Advitiy</h2><br>
             
        <p class="lead" style="text-align:justify;"> Advitiy is the second satellite under the Student Satellite Programme of IIT Bombay. The name Advitiy means “Unparalleled’ or ‘Unprecedented’. 
        <br> And that’s our vision for this satellite, to make it so robust and reliable that it becomes an example for many other satellites to follow. </p><br>

        <div>
            <h2 style="text-align:left;" >Mission</h2><br>

            <ul class="mission-advitiy">
              <li style="text-align: left;">To build a reliable satellite that is robust and repeatable.</li>
              <li style="text-align: left;">To preserve and enhance the knowledge and skills within the team in the field of Satellite and Space Technology</li>
              <li style="text-align: left;">To share the knowledge within the team related to satellite building with other aspiring students/universities</li>
            </ul>  
        </div>

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