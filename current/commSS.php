<?php include('header.php'); ?>

<style >
    .box{
        background-color: rgba(100, 120, 140, 0.9);
        border-radius: 10px;
        color: #fff;


    }

    @media screen and (min-width: 992px) {
        .box {
            background-color: rgba(100, 120, 140, 0.8) ;

        }
    }

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0 0 20px 0;
  text-transform: none;
  color: rgba(254, 82, 76, 1);
  font-family: "Raleway", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 600;
  letter-spacing: 1px;
  line-height: 1.5;
}

/*Active Menu*/
.dropdown #subsysM{
  background-color: #3B5998;
  color: #fff;}

</style>

<section  style="background-image: url(images/subsysBG/commBG.png); background-size: cover;">

    
    <div class="pricing-area" style="margin-top: -30px;" >
        <div class="container">
            <div class="row">

              <div class=" col-md-3">
                </div>
                  
              <div class="col-md-6">
                <div class="box">
                  <h3 style="font-size: 34px;padding-left: 10px; margin-bottom: 5px;">COMMUNICATION</h3>
                  <div style="font-size :16px;text-align: left;padding: 0px 15px 15px 15px;">
                    <p>Communication system of the satellite is one the most important sub system, without which
                    the satellite is just a rock revolving around the earth.
                    Communication Sub-System will perform the following tasks:</p>
                    <p>
                    <b>1</b>. <b>On board antenna and Beacon</b>: We have to design a satellite antenna to send the data to
                    earth. Beacon is the signature of the satellite which generally transmits in Morse Code. The
                    downlink generally transmits health monitoring data through an appropriately modulated
                    signal.<br>
                    <b>2</b>. <b>Modulation and demodulation</b>: The beacon is generally a CW signal. For the downlink signal,
                    an appropriate modulation technique is chosen considering the transmission range and data
                    rate required.<br>
                    <b>3</b>. <b>Ground Station</b>: To receive signal from the satellite, a ground station is set up by the
                    subsystem which consists of satellite tracker, antennae, Low noise amplifier and a demodulator
                    and radio equipment to catch the Beacon signal.</p>
                                          
                </div>
              </div>

              <div class=" col-md-3">
                </div>
                       
              
            </div>
        </div>
    </div>

</section>

<?php include('footer.php'); ?>

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
