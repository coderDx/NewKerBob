<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>

		<div class="home-page clearfix">

			<!--[if lt IE 7]>
				<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
			<![endif]-->

			<!-- Add your site or application content here -->
			<?php
				include_once("includes/header.php");
			?>

			<div class="center_menu">

				<div>
					<div class="clearfix">

						<div class="col-3 rounded-corners">
							<h2>Internet Of Things</h2>
							<div style="text-align: left">
								<p>The interconnected world of the future is here today. We have the software AND HARDWARE experience to prototype your IoT solution MVP, and get it into production in a timely and affordable manner.</p>
								</p>
								<img src="/img/button-learn.png" onclick="window.location.href = '/iot.php';" style="cursor:pointer;float: right">
							</div>
						</div>

						<div class="col-3 rounded-corners">
							<h2>Web Applications</h2>
							<div style="text-align: left">
								<p>New or existing, we specialize in front and back end web-based application development in HTML5, PHP, and JavaScript. We also specialize in CMS applications using WordPress, Drupal, and Joomla.</p>
								<img src="/img/button-learn.png" onclick="window.location.href = '/web.php';" style="cursor:pointer;float: right">
							</div>
						</div>

						<div class="col-3 rounded-corners">
							<h2>Mobile Applications</h2>
							<div style="text-align: left">
								<p>Android or iOS, we can create native mobile experiences for your users that will engage them and keep them coming back, ensuring ongoing profitability for your company and your products.</p>
								<img src="/img/button-learn.png" onclick="window.location.href = '/iot.php';" style="cursor:pointer;float: right">
							</div>
						</div>
					</div>
				</div>


			</div>

			<?php
			//include_once("includes/footer.php");
			?>

			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
			<script src="js/plugins.js"></script>
			<script src="js/main.js"></script>

			<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
			<script>
				(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
				function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
				e=o.createElement(i);r=o.getElementsByTagName(i)[0];
				e.src='//www.google-analytics.com/analytics.js';
				r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
				ga('create','UA-XXXXX-X');ga('send','pageview');
			</script>
		</div>

    </body>
</html>
