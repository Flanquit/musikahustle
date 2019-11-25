<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?php include 'inc/head.php'; ?>
</head>
<body>
<div class="header-top"><!--Start Header Top Area-->
	<?php include 'inc/header.php'; ?>
</div><!--End Header Area-->
<div class="menu-area"><!--Start Main Menu Area-->
	<?php include 'inc/nav.php';?>
</div><!--End Main Menu Area-->
<div class="page-title fix"><!--Start Title-->
	<div class="overlay section">
		<h2>Contact</h2>
	</div>
</div><!--End Title-->
<div class="contact-page page fix"><!--Start Contact Area-->
	<div class="container">
		<div class="row">
			<div class="contact-info col-sm-12">
				<div class="row">
					<div class="col-sm-6">
						<h4>Contact Us</h4>
						<p>We aim to provide first class premium service in selecting, purchasing and delivery of fashion statements to our fashion conscious customers </p>
						<div class="info-single">
							<i class="fa fa-map-marker"></i>
							




							<p>street,  Some Name Ave</p>
							<p>New York City </p>
						</div>
						<div class="info-single">
							<i class="fa fa-phone"></i>
							<p>+263 77 275 8455</p>
							<p>+263 77 275 8455</p>
						</div>
						<div class="info-single">
							<i class="fa fa-globe"></i>
							<a href="#">eltonbryce@gmail.com</a>
						
						</div>
					</div>
					<div class="col-sm-6">
						<div class="contact-reduction">
							<img src="img/contact-less.jpg" alt="" />
							
						</div>
					</div>
				</div>
			</div>
			<div class="map-container col-sm-12">
				<div id="googleMap"></div>
			</div>
			<div class="contact-form col-sm-12">
				<h2>LEAVE A MESSAGE</h2>
				<form action="#">
					<div class="row">
						<div class="col-sm-6">
							<label for="name">Name*</label>
							<input type="text" id="name" />
							<label for="email">E-mail*</label>
							<input type="text" id="email" />
							<label for="phone">Phone*</label>
							<input type="text" id="phone" />
							<label for="subject">Subject*</label>
							<input type="text" id="subject" />
						</div>
						<div class="col-sm-6">
							<label for="message">Message*</label>
							<textarea id="message" rows="7"></textarea>
							<input type="submit" class="submit" value="send"/>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div><!--End Contact Area-->



<div class="footer-area fix"><!--Start Footer Area-->
	<?php include 'inc/footer.php';?>
</div><!--End Footer Area-->
	
<!-- jQuery 2.1.4 -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Owl Carousel JS -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!--countTo JS -->
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<!-- mixitup JS -->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<!-- magnific popup JS -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<!-- Appear JS -->
<script type="text/javascript" src="js/jquery.appear.js"></script>
<!-- MeanMenu JS -->
<script type="text/javascript" src="js/jquery.meanmenu.min.js"></script>
<!-- Nivo Slider JS -->
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<!-- Scrollup JS -->
<script type="text/javascript" src="js/jquery.scrollup.min.js"></script>
<!-- simpleLens JS -->
<script type="text/javascript" src="js/jquery.simpleLens.min.js"></script>
<!-- Price Slider JS -->
<script type="text/javascript" src="js/jquery-price-slider.js"></script>
<!-- WOW JS -->
<script type="text/javascript" src="js/wow.min.js"></script>
<!--Google Map APi-->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
	function initialize() {
	  var mapOptions = {
		zoom: 14,
		scrollwheel: false,
		center: new google.maps.LatLng(40.7127840, -74.0059410)
	  };
	  var map = new google.maps.Map(document.getElementById('googleMap'),
		  mapOptions);
	  var marker = new google.maps.Marker({
		position: map.getCenter(),
		icon: 'img/map-marker.png',
		map: map
	  });
	}
	google.maps.event.addDomListener(window, 'load', initialize);				
</script>
<script>
	new WOW().init();
</script>	
<!-- Main JS -->
<script type="text/javascript" src="js/main.js"></script>
<script src="//code.tidio.co/kc9d6ipp2a9z8xelakqk8e4ptflkgoxl.js" async> </script>

</body>

</html>