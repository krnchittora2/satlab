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

<section >

    <div class="pricing-area" style="margin-top: -30px;" >
        <div class="container">
            <div class="row">
                              
              <div class="col-md-6">
                <div class="box">
                  <h3 style="font-size: 48px;padding-left: 10px; margin-bottom: 5px;">PAYLOAD</h3>
                  <div style="font-size :16px;text-align: left;padding: 0px 15px 15px 15px;">
                        <p align="left">The payload represents the goal of the satellite. It stands for the purpose the satellite is going
                        to serve, once it is in orbit. The Payload subsystem is responsible for identifying the ideal payload for our satellite after
                        performing feasibility analysis. This subsystem interacts with all the subsystems to generate
                        requirements imposed by the payload on the project and the individual subsystems.</p>

                        <p>The animation depicts the payload of Pratham : measuring the (TEC) Total Electron Count .</p>

                 </div>
              </div>                 
            </div>

            <div class=" col-md-6">
                <img src="images/subsysBG/payloadBG.gif"  width="75%" height="auto" alt="TEC">
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
