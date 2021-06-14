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

<!-- <section  style="background-image: url(images/subsysBG/commBG.png); background-size: cover;"> -->
    <section>

    
    <div class="pricing-area" style="margin-top: -30px;" >
        <div class="container">
            <div class="row">

              <div class="col-md-2">
                </div>
                  
              <div class="col-md-8">
                <div class="box">
                  <h3 style="font-size: 34px;padding-left: 10px; margin-bottom: 5px;">Instrumentation</h3>
                  <div style="font-size :16px;text-align: left;padding: 0px 15px 15px 15px;">
                    <p>The instrumentation subsystem acquires data of interest from the environment through the use of sensors and sends it in the required form to other subsystems for use, for example, the measurement of the magnetic field of the Earth. But for the sensors to provide and store correct data, they need to be calibrated and tested for the conditions that they are going to face in space.<br>
                    The Instrumentation Subsystem has the following main tasks:</p>
                    <p>
                    <b>1</b>. <b>Sensor Selection</b>: The appropriate sensor needs to be selected keeping in mind the payload and various factors like space, power, etc.<br>
                    <b>2</b>. <b>Sensor Interfacing</b>: The data that has been recorded by the sensor needs to be imported into a readable form and then interpreted.<br>
                    <b>3</b>. <b>Sensor Calibration</b>: The main aim of calibration is to eliminate or minimize factors that cause inaccurate measurements. Calibration is usually done by establishing a relationship between a measurement taken using the instrument and the values already known to us.</p>
                    <b>4</b>. <b>Data processing</b>: Sensor output has a variety of noises or fluctuations which need to be removed either by averaging the whole data or through some other method. The data also needs to be analyzed or filtered so as to obtain the desired output.<br>
                    <b>5</b>. A replica of the conditions in space also needs to be built to test the functioning of the sensors.</p>
                </div>
              </div>

              <div class="col-md-2">
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
