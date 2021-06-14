<?php include('header.php'); ?>

<style>  
/*Active Menu*/
.dropdown #teamM{
  background-color: #3B5998;
  color: #fff;}
</style>

    <section class="pricing-area" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2 style="text-align:left;">Organizations Associated</h2>

<style>

h6.description{
  font-weight: bold;
  letter-spacing: 2px;
  color: #999;
  border-bottom: 1px solid rgba(0, 0, 0,0.1);
  padding-bottom: 5px;
}
.profile{
  margin-top: 25px;
}
.profile h1{
  font-weight: normal;
  font-size: 20px;
  margin:10px 0 0 0;
}
.profile h2{
  font-size: 14px;
  font-weight: lighter;
  margin-top: 5px;
}
.profile .img-box{
  opacity: 1;
  display: block;
  position: relative;

}
.profile .img-box:after{
  content:"";
  opacity: 0;
  background-color: rgba(0, 0, 0, 0.75);
  position: absolute;
  right: 0;
  left: 0;
  top: 0;
  bottom: 0;
}
.img-box ul{
  position: absolute;
  z-index: 2;
  bottom: 50px;
  text-align: center;
  width: 100%;
  padding-left: 0px;
  height: 0px;
  margin:0px;
  opacity: 0;
}
.profile .img-box:after, .img-box ul, .img-box ul li{
  -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.img-box ul i{
  font-size: 20px;
  letter-spacing: 10px;
}
.img-box ul li{
  width: 30px;
    height: 30px;
    text-align: center;
    border: 1px solid #88C425;
    margin: 2px;
    padding: 5px;
  display: inline-block;
}
.img-box a{
  color:#fff;
}
.img-box:hover:after{
  opacity: 1;
}
.img-box:hover ul{
  opacity: 1;
}
.img-box ul a{
  -webkit-transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}
.img-box a:hover li{
  border-color: #fff;
  color: #88C425;
}
a{
    color:#88C425;
}
a:hover{
    text-decoration:none;
    color:#519548;
}
i.red{
    color:#BC0213;
}
.col-centered{
    float: none;
    margin: 0 auto;
}
.centered {
    margin-left:auto;
    margin-right:auto;
    width: 100%;
}
@media (min-width: 992px) {
.col-sm-4 {
    width: 20%;
}
}

.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: left;
  width: 100%;

  }
</style>


<p class="lead" style="text-align:center;">A project like this can not survive without the support of a large number of people. We are specially thankful to: </p>
<ul>
  <div class="myTable">
  <table>
  <tr><td><strong>IIT Bombay</strong></td></tr>
   <tr><td>Industrial Research And Consulting Centre (IRCC), IITB.</td></tr>
  <tr><td>Centre for Distance Engineering Education Programme (CDEEP), IITB</td></tr>
  <tr><td>Aerospace Engineering Association (AEA), IITB</td></tr>
  </table>
</div>
<br><br>
<div class="myTable">
<table>
   <tr><td><strong>Indian Space Research Organisation (ISRO)</strong></td></tr>
  <tr><td>ISRO Satellite Centre (ISAC), ISRO</td></tr>
   <tr><td>Vikram Sarabhai Space Centre (VSSC), ISRO</td></tr>

  </table>
</div>
<br><br>
<div class="myTable" style="border-left:0px; border-bottom:0px;">
<table>
  <tr><td><strong>Society for Applied Microwave Electronics Engineering and Research (SAMEER)</strong></td></tr>
</table>
</div>
<br><br>
<div class="myTable" style="border-left:0px; border-bottom:0px;">
<table>
  <tr><td><strong>Tata Institute of Fundamental Research (TIFR) </strong></td></tr>
</table>
</div>
<br><br>
<div class="myTable" style="border-left:0px; border-bottom:0px;">
<table>
  <tr><td><strong>Boeing India Ltd</strong></td></tr>
</table>
</div>
<br><br>

    </div><!--/.container-->
    </section><!--/#feature-->
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
<script src="js/responsiveslides.min.js"></script>

    <script>
    $(function () {

    $(".rslides").responsiveSlides();

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
