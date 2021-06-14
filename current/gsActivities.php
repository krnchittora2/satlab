<?php include('header.php'); ?>

<style>
#mylist ul li {
  list-style: inherit !important;
  text-align:justify;
  background-color:#fff;
  list-style: none;
  padding: 0 0;
  font-size: 14px;
  font-weight: 400;
  margin-left: 10px;
}

#mylist ul {
  list-style: inherit !important;
  text-align:justify;
  background-color:#fff;

}
/*Active Menu*/
.dropdown #projectM{
  background-color: #3B5998;
  color: #fff;}

</style>


    <section class="pricing-area" >
        <div class="container">
           <div class="center wow fadeInDown">

            <h2 style="text-align:left;">Activities at the Ground station</h2>
<p align="justify">
Regular tracking activities go on at the GS. We use a crossed yagi antenna, 3 Low Noise amplifiers (total gain of 63 dB) and Kenwood TS2000 for listening to the satellites. For pass predictions n2yo.com is used and Predict is used on a Linux system for automated tracking. We have tracked the following satellite beacons successfully so far:</p>
<div id="mylist">
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