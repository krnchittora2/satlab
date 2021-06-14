<?php include('header.php'); ?>

<style >
    .box{
        background-color: rgba(100, 120, 140, 0.9);
        border-radius: 10px;
        color: #fff;
    }

    @media screen and (min-width: 992px) {
        .box {
            background-color: rgba(100, 120, 140, 0.6) ;
            background-position:center ;
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

<section  style="background-image: url(images/subsysBG/controlBG.png);background-size: cover;">

    
    <div class="pricing-area" style="margin-top: -30px;" >
        <div class="container">
            <div class="row">

              <div class=" col-md-7">
                </div>

              <div class="col-md-5">
                <div class="box">
                    <h3 style="font-size: 48px;padding-left: 10px; margin-bottom: 5px;">CONTROLS</h3>
                    <div style="font-size :16px;text-align: left;padding: 0px 15px 15px 15px;">
            
                        <p>The Payload, Communications and Power Subsystems require the satellite to orient, rotate and
                        stabilize itself. This is achieved by the Attitude Determination and Controls Subsystem.
                        The Attitude Determination and Control Subsystem performs the following tasks:</p>
                        <p>
                        <b>1</b>. To devise and verify through extensive simulations, the control algorithm that will stabilize
                        the satellite once it is launched by the space-vehicle<br>
                        <b>2</b>. To position the satellite so that effective communication can be established with ground.<br>
                        <b>3</b>. To orient it to optimise the power recieved by the satellite.<br>
                        <b>4</b>. To perform Failure Mode analysis to ensure that the satellite will sustain itself through
                        unexpected events</p>
                </div>
                </div>
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
