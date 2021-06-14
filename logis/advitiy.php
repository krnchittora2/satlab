<!DOCTYPE html>
<html>
<head>
    <title>Advitiy &mdash; Student Satellite Project &mdash; IIT Bombay</title>
</head>
<body>
    <?php include('header.php'); ?>

    <div class="pg-top" >
        <div class="container">
            <div class="center wow fadeInDown">

                <div class="text-center pb-1 border-primary mb-4">
                    <h2 class="text-primary">About Advitiy</h2>
                </div>
                <p class="lead" style="text-align:justify;"> Advitiy is the second satellite under the Student Satellite Programme of IIT Bombay. The name Advitiy means “Unparalleled’ or ‘Unprecedented’.<br> 
                And that’s our vision for this satellite, to make it so robust and reliable that it becomes an example for many other satellites to follow. </p>
                <br>

                <div>
                    <div class="text-center pb-1 border-primary mb-4">
                        <h2 class="text-primary">Mission</h2>
                    </div>
                    <ul class="mission-advitiy">
                        <li style="text-align: left;">To build a reliable satellite that is robust and repeatable.</li>
                        <li style="text-align: left;">To preserve and enhance the knowledge and skills within the team in the field of Satellite and Space Technology</li>
                        <li style="text-align: left;">To share the knowledge within the team related to satellite building with other aspiring students/universities</li>
                    </ul>  
                </div>

            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>

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