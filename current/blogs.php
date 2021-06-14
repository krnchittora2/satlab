<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/blog_style.css">
</head>

<style>  
/*Active Menu*/
.dropdown #journeyM{
  background-color: #3B5998;
  color: #fff;}
</style>

<body>
<?php include('header.php'); ?>

<section >
	<!-- <h1 style="text-align: center;margin-bottom: 30px"> Blogs </h1> -->

		<div class="blog-card">
				<div class="photo photo1"></div>
				<ul class="details">
					<li class="author"><a href="https://www.facebook.com/yash.sanghvi.925">Yash Sanghvi</a></li>
					<li class="date">September 26, 2017</li>
				</ul>
				<div class="description">
					<h1>The Making of Pratham</h1>
					<p class="summary">A couple of weeks after the launch of Pratham we were invited to a college for giving a talk. The organizers quite nervously asked us, “We have reserved a two hour slot for your talk. Do you think that it’ll be too much?” We had a good laugh in the team.<br><br></p>
					<a href="https://theiinaniitian.wordpress.com/2017/09/26/the-making-of-pratham-satellite/">Read More</a>
				</div>
			</div>
			<div class="blog-card alt">
				<div class="photo photo2"></div>
				<ul class="details">
					<li class="author"><a href = "https://www.facebook.com/anmol.sikka"> Anmol Sikka</a></li>
					<li class="date">September 26, 2017</li>
				</ul>
				<div class="description">
					<h1>When Satellite launched us! </h1>
					<p class="summary">There are some days which get etched in your memory. From a year earlier multiple memories were made and now a year hence here I am reliving and relishing the days.I became a member of the Student Satellite Project in March 2016. But on this day I realised that I didn't just join a project, I joined a Family, I joined a Journey.</p>
					<a href="http://anmoldiaries.blogspot.in/2017/09/when-satellite-launched-us.html">Read More</a>
				</div>
			</div>

			<div class="blog-card">
				<div class="photo photo3"></div>
				<ul class="details">
					<li class="author"><a href="https://www.facebook.com/yash.sanghvi.925">Yash Sanghvi</a></li>
					<li class="date">September 28, 2017</li>
				</ul>
				<div class="description">
					<h1>A 40 Hour Adventure</h1>
					<p class="summary">More often than not, superlatives are found in the most unexpected of places. The purest form of beauty, for instance, can be found in simplicity. The purest form of happiness can be found in tears, while the deepest sorrow can be found beneath a smile.<br><br> </p>
					<a href="https://theiinaniitian.wordpress.com/2017/09/28/a-40-hour-adventure-prathams-thermo-vacuum-test/">Read More</a>
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
    
    <script>
    $(document).ready(function(){
      $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
</script>

</body>
</html>