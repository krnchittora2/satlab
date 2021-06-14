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

    <h2 style="text-align:left;" id="trackPratham">Tracking Pratham</h2>
<p align="justify">
The Ham community is very critical to the success of any satellite working in the amateur band. We are also looking forward to hearing from Hams around the world for beacon and telemetry reports. </p>
<p align="justify"><b>Pratham has been assigned the Identifier - 41783 by NORAD. It can now be tracked using n2yo at <a href="http://www.n2yo.com/satellite/?s=41783" target="_blank" >http://www.n2yo.com/satellite/?s=41783</a></b></p>
<p align="justify">
Here are the details required to track the satellite.</p>
<div class = "myTable">
<table >
    <tr>
      <td><b></b></td>
      <td><b>Beacon</b></td>
      <td><b>Telemetry</b></td>
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
<td>Data rate</td>
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
</div><br><br>
<p align="left">
<h4 align="left">Listen to one of the First Beacon signals received from Pratham </h4>
<audio controls align="left">
  <source src="firstBeacon.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio></p>
<br>
<p align="justify">
<b>Beacon:</b> PRATHAM IIT BOMBAY STUDENT SATELLITE <br><br>
<b>Please share with us the Downlink of Pratham received by you at manvidhawan1993@gmail.com or ratnesh1607@gmail.com</b><br><br>
​<b>The following is the TLE data for the satellite:</b><br><br>


2016-059C<br>
1 41785U 16059C 16271.69947962 .00004609 00000-0 88934-3 0 9999<br>
2 41785 98.2049 329.2442 0030494 263.1090 96.7138 14.63229411 193<br>
</p><br><br>
</p><br><br>

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



