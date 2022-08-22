<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Proceed to Pay</title>
<link rel="icon" href="../favicon.png" type="image/png">
<link rel="shortcut icon" href="../img/logomd.png" type="img/png">

<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="../css/responsive.css" rel="stylesheet" type="text/css">
<link href="../css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(../PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="../js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.isotope.js"></script>
<script type="text/javascript" src="../js/wow.js"></script>
<script type="text/javascript" src="../js/classie.js"></script>
<!-- <script src="contactform/contactform.js"></script> -->

<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>
<!--     
<header class="header" id="header"><!--header-start-->
<!--	<div class="container">
    	<figure class="logo animated fadeInDown delay-07s">
        	<a href="#"><img width="150px" src="img/logomd.png" alt=""></a>	
        </figure>	
        <h1 class="animated fadeInDown delay-07s">Welcome to <?= $config["title"]?> </h1>
        <ul class="we-create animated fadeInUp delay-1s">
        	<li><?= $config["subtitle"]?></li>
        </ul>
            <a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a>
    </div>
</header><!--header-end-->
 
<nav class="main-nav-outer" id="test"><!--main-nav-start-->
	<div class="container">
        <ul class="main-nav">
        	<li><a href="index.php">Home</a></li>
            <li><a href="index.php#service">Service</a></li>
            <li><a href="about.php">About</a></li>
            <!-- <li><a href="#Portfolio">Portfolio</a></li> -->
            <li class="small-logo"><a href="#header"><img class="nlogo" src="../img/logomd.png" alt=""></a></li>
            <!-- <li><a href="#client">Clients</a></li> -->
            <li><a href="coupon.php">Coupons</a></li>
            <li><a href="#">Contact</a></li>
            <?php $topage = (isset($_SESSION["userid"]) && $_SESSION["userid"] != "")?"logout":"login";?>
            <li><a href="<?=$topage?>.php"><?=$topage?></a></li>

            <!-- <li><a href="login.php">Login</a></li> -->
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->


<!-- 
<section class="main-section" id="service">
	<div class="container">
    	<h2>Services</h2>
    	<h6>We offer exceptional service with complimentary hugs.</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-paw"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>online marketing</h3>
                        <p>Proin iaculis purus digni consequat sem digni ssim. Donec entum digni ssim.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-gear"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>business promotion</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Digni ssim porttitora .</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-apple"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>promotional coupon</h3>
                        <p>Proin iaculis purus consequat digni sem digni ssim. Purus donec porttitora entum.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col1">
                    	<i class="fa-medkit"></i>
                    </div>
                	<div class="service-list-col2">
                        <h3>24/7 Support</h3>
                        <p>Proin iaculis purus consequat sem digni ssim. Sem porttitora entum.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="img/macbook-pro.png" alt="">
            </figure>
        
        </div>
	</div>
</section> -->


<!-- 
<section class="main-section alabaster">
	<div class="container">
    	<div class="row">
			<figure class="col-lg-5 col-sm-4 wow fadeInLeft">
            	<img  src="img/iphone.png" alt="">
            </figure>
        	<div class="col-lg-7 col-sm-8 featured-work">
            	<h2>featured work</h2>
            	<P class="padding-b">Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit.</P>
            	<div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-02s">
                    	<i class="fa-magic"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-02s">
                        <h3>magic of theme development</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-04s">
                    	<i class="fa-gift"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-04s">
                        <h3>neatly packaged</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>    
                </div>
                <div class="featured-box">
                	<div class="featured-box-col1 wow fadeInRight delay-06s">
                    	<i class="fa-dashboard"></i>
                    </div>	
                	<div class="featured-box-col2 wow fadeInRight delay-06s">
                        <h3>SEO optimized</h3>
                        <p>Proin iaculis purus consequat sem cure digni ssim. Donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt. </p>
                    </div>    
                </div>
                <a class="Learn-More" href="#">Learn More</a>
            </div>
        </div>
	</div>
</section> -->



<!-- <section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<!-- <div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
      <div class="portfolioFilter">  
        <ul class="Portfolio-nav wow fadeIn delay-02s">
        	<li><a href="#" data-filter="*" class="current" >All</a></li>
            <li><a href="#" data-filter=".branding" >Branding</a></li>
            <li><a href="#" data-filter=".webdesign" >Web design</a></li>
            <li><a href="#" data-filter=".printdesign" >Print design</a></li>
            <li><a href="#" data-filter=".photography" >Photography</a></li>
        </ul>
       </div> 
        
	</div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
            	<div class=" Portfolio-box printdesign">
                	<a href="#"><img src="img/Portfolio-pic1.jpg" alt=""></a>	
                	<h3>Foto Album</h3>
                    <p>Print Design</p>
                </div>
                <div class="Portfolio-box webdesign">
                	<a href="#"><img src="img/Portfolio-pic2.jpg" alt=""></a>	
                	<h3>Luca Theme</h3>
                    <p>Web Design</p>
                </div>
                <div class=" Portfolio-box branding">
                	<a href="#"><img src="img/Portfolio-pic3.jpg" alt=""></a>	
                	<h3>Uni Sans</h3>
                    <p>Branding</p>
                </div>
                <div class=" Portfolio-box photography" >
                	<a href="#"><img src="img/Portfolio-pic4.jpg" alt=""></a>	
                	<h3>Vinyl Record</h3>
                    <p>Photography</p>
                </div>
                <div class=" Portfolio-box branding">
                	<a href="#"><img src="img/Portfolio-pic5.jpg" alt=""></a>	
                	<h3>Hipster</h3>
                    <p>Branding</p>
                </div>
                <div class=" Portfolio-box photography">
                	<a href="#"><img src="img/Portfolio-pic6.jpg" alt=""></a>	
                	<h3>Windmills</h3>
                    <p>Photography</p>
                </div>
    </div>
</section>  -->
<!--main-section-end -->


<!-- <section class="main-section client-part" id="client"> -->
    <!--main-section client-part-start-->
	<!-- <div class="container">
		<b class="quote-right wow fadeInDown delay-03"><i class="fa-quote-right"></i></b>
    	<div class="row">
        	<div class="col-lg-12">
            	<p class="client-part-haead wow fadeInDown delay-05">It was a pleasure to work with the guys at Knight Studio. They made sure 
we were well fed and drunk all the time!</p>
            </div>
        </div>
    	<ul class="client wow fadeIn delay-05s">
        	<li><a href="#">
            	<img src="img/client-pic1.jpg" alt="">
                <h3>James Bond</h3>
                <span>License To Drink Inc.</span>
            </a></li>
        </ul>
    </div>
</section> -->
<!--main-section client-part-end-->
<!-- <div class="c-logo-part"> -->
    <!--c-logo-part-start-->
	<!-- <div class="container">
    	<ul>
        	<li><a href="#"><img src="img/c-liogo1.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo2.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo3.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo4.png" alt=""></a></li>
            <li><a href="#"><img src="img/c-liogo5.png" alt=""></a></li>
    	</ul>
	</div>
</div> -->
<!--c-logo-part-end-->

<!-- <section class="main-section team" id="team"> -->
    <!--main-section team-start-->
	<!-- <div class="container">
        <h2>team</h2>
        <h6>Take a closer look into our amazing team. We won’t bite.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic1.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Walter White</h3>
                <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic2.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Jesse Pinkman</h3>
                <span class="wow fadeInDown delay-06s">Product Manager</span>
                <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic3.jpg" alt="">
                    <ul>
                        <li><a href="#" class="fa-twitter"></a></li>
                        <li><a href="#" class="fa-facebook"></a></li>
                        <li><a href="#" class="fa-pinterest"></a></li>
                        <li><a href="#" class="fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Skyler white</h3>
                <span class="wow fadeInDown delay-09s">Accountant</span>
                <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
        </div>
    </div>
</section> -->
<!--main-section team-end-->


<!--business-talking-start--
<section class="business-talking">
	<div class="container">
        <h2>Let’s Talk Business.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="transcation">
        <div class="row justify-content-center">
			<div class="col-lg-3 col-sm-3"></div>
			<div class="col-lg-6 text-center col-sm-5 wow fadeInUp delay-05s">
			<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application�s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	echo "<b>Details found and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<b>Transaction status is success</b>" . "<br/>";
		echo "Your purchased code will be activated shortly";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		echo "<b>Transaction status is failure</b>" . "<br/>";
		echo "<b>Reason: </b>".$_POST["RESPMSG"]??"Unkown";
	}

//--------------------------------Update Transaction Table-------------------------//
$servername = "localhost";$username = "mdenterprise_devarshi";$password1 = "Barot@123!!";$dbname = "mdenterprise_devarshi";$tablename = "transcation";
$conn = new mysqli($servername, $username, $password1, $dbname);
if($conn->connect_errno == 0)
{
	$ORDERID = $_POST["ORDERID"]??"1";
	$STATUS = $_POST["STATUS"]??"nananana";
	$logval = (json_encode($_POST));
	$sql = "UPDATE $tablename SET Status='$STATUS', StatusLog='$logval'  WHERE tid='$ORDERID';";
	if ($conn->query($sql) === TRUE) {}
	else die("
		<h2>There was an error storing this transaction in database.</h2>
		<hr>
		<a href='../coupon.php'>Please go back and try again</a>"
		."<pre style='width: 100%;'>".json_encode($sql)."</pre>"
	);
}
else die("
		<h2>Secure connection to database cannot be established, database is down.</h2>
		<hr>
		<p>
		<a href='../coupon.php'>Please go back and try again, </a>
		if it still doesnt work contact site admin via email or phone
		</p>
");
//--------------------------------End of transaction Table-------------------------//

	// if (isset($_POST) && count($_POST)>0 )
	// { 
	// 	foreach($_POST as $paramName => $paramValue) {
	// 			echo "<br/>" . $paramName . " = " . $paramValue;
	// 	}
	// }
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>
<br>
<a class="btn btn-success" href="../coupon.php">Click here to return to Cupon Page</a>

            </div>
        </div>
</section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/logomd.png" alt=""></a></div>
        <span class="copyright">&copy; <?= $config["copyright"]?>. All Rights Reserved</span>
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Knight
            -->
            <a href="<?= $config['ln_madeby']?>">Made by</a> by <a href="<?= $config['ln_madeby']?>"><?= $config['madeby']?></a><br>
            <a href="docs/Sample_Privacy_Policy.docx">Privacy Policy</a> &emsp;-&emsp;<a href="docs/Sample_Terms_and_Conditions.docx">Terms and Conditions</a> &emsp;-&emsp;<a href="docs/Sample_Refund_and_Cancellation.docx">Refund Policy</a> 

        </div>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a, .servicelink').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
      if ($(window).width() < 768 ) { 
        $('.main-nav').hide(); 
      }
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>

</body>
</html>