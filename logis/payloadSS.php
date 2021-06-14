<!DOCTYPE html>
<html>
<head>
    <title>Payload Subsystem &mdash; Student Satellite Project &mdash; IIT Bombay</title>
    <style>
        .plgif{
            width: 400px;
            height: auto;
        }
        @media (max-width: 768px){
            .plgif{
                width: 300px;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    
    <div class="pg-top">
        <div class="container subs">
            <div class="center wow fadeInDown">

                <div class="text-center pb-1 border-primary mb-4">
                    <h2 class="text-primary">PAYLOAD</h2>
                </div>

                <div class="row">
                    <div class="col-md-5" style="padding-top: 50px">
                        <p>The payload represents the goal of the satellite. It stands for the purpose the satellite is going to serve, once it is in orbit. The Payload subsystem is responsible for identifying the ideal payload for our satellite after performing feasibility analysis. This subsystem interacts with all the subsystems to generate requirements imposed by the payload on the project and the individual subsystems.</p>
                        <p>The animation depicts the payload of Pratham : measuring the (TEC) Total Electron Count.</p>
                    </div>
                    <div class="col-md-7">
                        <img src="images/payloadBG.gif" class="plgif" alt="TEC">                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

</body>
</html>