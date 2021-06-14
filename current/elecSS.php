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

<section  style="background-image: url(images/subsysBG/elecBG.png); background-size: cover;">
   
    <div class="pricing-area" >
        <div class="container">
            <div class="row">

              <div class="col-md-5">
                <div class="box">
                  <h3 style="font-size: 48px;padding-left: 10px; margin-bottom: 5px;">ELECTRICAL</h3>
                  <div style="font-size :16px;text-align: left;padding: 0px 15px 15px 15px;">
                        <p align="justify">Electrical subsystem consists of two segments: <b>Power</b> and <b>On-Board Computer</b>.</p>

                        <p align="justify">The Power section harnesses power from sun-rays using high energy solar cells, supplies it to
                    various systems on-board, stores the remaining power in batteries for use in the eclipse region,
                    monitors the health of components and reports faults to the OBC, which then instructs Power
                    to take appropriate action.</p>
                        <p align="justify"> The On-Board Computer Sub-system is like the brain of the satellite. It controls the way the
                    satellite functions and is expected to take all the decisions for the satellite. It collects data from
                    attitude sensors and executes controls loops and gives feedback to the actuators, collects
                    health data from Power and various sensors and takes decisions in case of faults and initiates
                    transmission of data at appropriate times (when the satellite is visible from the Ground station).</p>
                      
                </div>
              </div>

              <div class=" col-md-7">
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
