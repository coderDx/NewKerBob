<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contact Us. We're Here To Help Your Business Succeed!</title>
	<meta name="description" content="Contact us to learn how we can help your company's products or services be successful in today's competitive marketplace. We're here to help you succeed!">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
</head>
	<body onresize="screen_rotated()">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php
            include_once("includes/header.php");
        ?>

		<div class="interior-page">

			<h1>Contact Us</h1>

			<form class="centered-div" method="post" action="/scripts/php/contact.php">

				<b>First Name</b></br>
				<div class="contactInputField">
					<input name="fname" type="text" class="contactField" size="32">
				</div>

				<b>Last Name</b></br>
				<div class="contactInputField">
					<input name="lname" type="text" class="contactField" size="32">
				</div>

				<b>Company</b></br>
				<div class="contactInputField">
					<input name="company" type="text" class="contactField" size="32">
				</div>

				<b>Phone</b></br>
				<div class="contactInputField">
					<input name="phone" type="text" class="contactField" size="32">
				</div>

				<b>E-Mail</b></br>
				<div class="contactInputField">
					<input name="email" type="text" class="contactField" size="32">
				</div>

				<b>Website</b><small> (If Applicable)</small></br>
				<div class="contactInputField">
					<input name="website" type="text" class="contactField" size="32">
				</div>

				<div class="submitContactBox floatLeft">
					<button class="submit-button rounded-corners" type="submit">Send</button>
				</div>

			</form>

		</div>

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
            ga('create','UA-28056542-1');ga('send','pageview');
        </script>
    </body>
</html>
