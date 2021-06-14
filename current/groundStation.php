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

/*Active Menu*/
.dropdown #projectM{
  background-color: #3B5998;
  color: #fff;}

</style>


				

    <section class="pricing-area" >
        <div class="container">
           <div class="center wow fadeInDown">
          
<h2 style="text-align:left;">Ground Station</h2>
<p align="justify">The main ground station for receiving Pratham signals is situated on the roof-top of Aerospace Department of IIT Bombay. It has the following major functions:</p>
<div id="mylist">
<ul>
<li>Satellite tracking and receiving segment</li>
<li>Uplink transmission segment</li>
 <li>Payload data logging</li>
</ul>
</div>
<p align="justify">
<center>
<br>
<img src="images/gs_aero.jpg" class="img" style="width:60%;"/><br>
<br>Main Ground Station of Pratham on the roof-top of Aerospace Department, IIT Bombay</br>
<br><br>
<img src="images/gs_block.png"  style="width:60%;"/><br>
<br>Ground Station Block Diagram</br>
</center>
</p><br>
<p align="justify">
At the GS we have some self-fabricated and some off-the shelf components.
<div id="mylist">
<ul>
<li><b>Antennas:</b> Two pairs of crossed yagi antennas, one pair for each frequency band i.e. central frequency 145.98 MHz, 437.455 MHz</li>
<li><b>Transceiver base station:</b> Kenwood TS2000 radio demodulates the FSK signal and stores the data in the mainframe.</li>
<li>A pair of AD8302 modules measures RF gain and phase value between the two inputs it takes Uses Log amplifiers to calculate the value of log (InpA/ InpB)</li>
<li><b>Low Noise Amplifiers:</b> 4 low noise amps are being used on the distinct feeds from antennas</li>
<li>Rotor arrangement with an Interface circuit to integrate the device with software architecture. Rotor (Yeasu G-5500) is being used to orient the antenna structure to the required inclination with respect to reference level. The rotor interacts with the mainframe via Rotor Controller Interface (RCI-USB by EA4TX)</li>
</ul>
</div>
<br><br>
<img class="img" src="images/gs_casde.png"  style="width:60%;"/><br>
<br>Ground Station Mainframe Setup</br>
</p>

<!-- <h2 style="text-align:left;" id="trackPratham">Tracking Pratham</h2><br>
<h2 style="text-align:left;">Activities at the Ground station</h2><br> -->
<br>
<ul><li><h2 style="text-align:left; color: blue;"><a href="gsWS.php">Ground Station Workshops</a></h2></li></ul>

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
</body>
</html>
