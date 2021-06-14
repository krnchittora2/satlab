<!DOCTYPE html>
<html>
<head>
    <title>Electrical Subsystem &mdash; Student Satellite Project &mdash; IIT Bombay</title>
</head>
<body>
    <?php include('header.php'); ?>
    
    <div class="pg-top" style="background: url('images/elecBG.jpeg'); background-size: cover; background-attachment: fixed;">
        <div class="container subs">
            <div class="center wow fadeInDown">

                <div class="text-center pb-1 border-primary mb-4">
                    <h2 class="text-primary">ELECTRICAL</h2>
                </div>

                <div class="row">
                    <div class=" col-md-1"></div>
                    <div class="col-md-10">
                        <p>Electrical subsystem consists of two segments: <b>Power</b> and <b>On-Board Computer</b>.</p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-12" style="padding-bottom: 20px;"></div>

                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <p style="font-style: italic;">The Power section harnesses power from sun-rays using high energy solar cells, supplies it to various systems on-board, stores the remaining power in batteries for use in the eclipse region, monitors the health of components and reports faults to the OBC, which then instructs Power to take appropriate action.</p>
                    </div>
                    <div class="col-md-5">
                        <p style="font-style: italic;">The On-Board Computer Sub-system is like the brain of the satellite. It controls the way the satellite functions and is expected to take all the decisions for the satellite. It collects data from attitude sensors and executes controls loops and gives feedback to the actuators, collects health data from Power and various sensors and takes decisions in case of faults and initiates transmission of data at appropriate times (when the satellite is visible from the Ground station).</p>
                    </div>
                    <div class="col-md-1"></div>

                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

</body>
</html>