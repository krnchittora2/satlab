<!DOCTYPE html>
<html>
<head>
    <title>Communication Subsystem &mdash; Student Satellite Project &mdash; IIT Bombay</title>
</head>
<body>
    <?php include('header.php'); ?>
    
    <div class="pg-top" style="background: url('images/commBG.jpeg'); background-size: cover; background-attachment: fixed;">
        <div class="container subs">
            <div class="center wow fadeInDown">

                <div class="text-center pb-1 border-primary mb-4">
                    <h2 class="text-primary">COMMUNICATION</h2>
                </div>

                <div class="row">
                    <div class=" col-md-1"></div>
                    <div class="col-md-10">
                        <p>Communication system of the satellite is one the most important sub system, without which the satellite is just a rock revolving around the earth. Communication Sub-System will perform the following tasks:</p>
                    </div>
                    <div class="col-md-1"></div>

                    <div class="col-md-12" style="padding-bottom: 20px;"></div>

                    <div class="col-md-4">
                        <p><b style="font-weight: 700;">On Board Antenna And Beacon</b><br/> We have to design a satellite antenna to send the data to earth. Beacon is the signature of the satellite which generally transmits in Morse Code. The downlink generally transmits health monitoring data through an appropriately modulated signal.</p>
                    </div>

                    <div class="col-md-4">
                        <p><b style="font-weight: 700;">Modulation And Demodulation</b><br/> The beacon is generally a CW signal. For the downlink signal, an appropriate modulation technique is chosen considering the transmission range and data rate required.</p>
                    </div>

                    <div class="col-md-4">
                        <p><b style="font-weight: 700;">Ground Station</b><br/> To receive signal from the satellite, a ground station is set up by the subsystem which consists of satellite tracker, antennae, Low noise amplifier and a demodulator and radio equipment to catch the Beacon signal.</p>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

</body>
</html>