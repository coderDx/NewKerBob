<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Introduction To The The Internet of Things (IoT)</title>
		<meta name="description" content="Sensors, microcontroller programming, communication protocols, protocol converters, web interfaces, and prototyping for the Internet of Things (IoT)">
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


				<h1>An Internet Of Things</h1>
				<p class="header-quote">"In the interconnected world of the future, everything that can connect to the Internet and share meaningful information about itself, will."</p>

				<div class="newspaper">

					<h3 style="margin-top: 0;">Today's Internet</h3>
					<p>The internet of today has become an exciting and indispensable platform of communication for people and business. It touches every aspect of humanity today. People use the internet, and internet connected devices dozens,
					if not hundreds of times each day. From making online purchases, sending and reading text messages, checking e-mails, to engaging in their favorite social media sites, the list goes on and on. But now, a new technological
					revolution is taking place, one that promises to make the evolution of the internet to this point seem insignificant in comparison. It's called the Internet of Things.</p>

					<h3>Tomorrow's Internet</h3>
					<p>The Internet Of Things, combined with the IPV6 protocol, will allow every object on Earth to have it's own unique identifier, and communicate with other objects, and web servers, over the internet. This will forever change
					life as we know it today. Currently, Cisco estimates there are 9 billion devices that connect to the internet. The information technology research company Gartner estimates that by the year 2020, this number will reach 30 billion
					internet connected devices.</p>

					<p>Using sensors, microcontrollers, communication protocols, protocol converters, and web interfaces, the Internet of Things will forever change the way devices interact, communicate with, and control, other devices.</p>

					<div class="clearfix"></div>
					<h3>Sensors</h3>
					<p><img src="img/sensors.jpg" style="float: right; width:50%;">
					One of the key attributes of any system is its ability to sense its current or recently changed state. If it moves, beats, changes temperature, or some other inherent state or characteristic, sensors are what will generate data related
					to that change, and send it to a listening microcontroller for processing. One of the more exciting advances in sensor technology are accelerometers. These low cost devices can accurately measure object orientation, acceleration
					and movement in any direction. There are literally thousands of low cost sensor solutions available on the market today, with more new ones being introduced every day.</p>

					<div class="clearfix"></div>
					<h3>Microcontrollers</h3>
					<p><img src="img/microcontroller.jpeg" style="float: left;width:50%;margin: 0 8px 0 0;">
					Microcontrollers are the brains of all smart devices. Acting on data received from sensors, microcontrollers apply pre-programmed logic on data received from sensors, and take different actions, based on different conditions. Mixed
					signal microprocesors can accept both digital and analog data from sensors, and process both accordingly.</p>

					<p>Microcontroller technology has gotten so affordable that any object can be embedded with a microcontroller 'brain', in many cases, for just under a few dollars. Their low power consumption makes them ideal for embedding into battery
					operated devices. Microcontrollers can also receive commands and instructions from a web interface, or another device, and control other devices based on these instructions.</p>

					<div class="clearfix"></div>
					<h3>Communication Protocols</h3>
					<p><img src="img/rs232.jpg" style="float: right;width:50%;">
					A device protocol is a 'language' of communication. Just as two people agree that they are going to have a conversation in 'English', other than some other widely accepted language, devices too have a number of different
					protocols, or 'languages' that they can agree to speak to eachother in. There are many established communication protocols in existence today. Among them are RS-232, SPI, and I2C. The type of microcontroller used will
					determine which protocol is used. Any kind of data can be transmitted between microcontrollers using one of the existing protocols. Or, if your application requires it, a new protocol specific to your application can be used.</p>

					<div class="clearfix"></div>
					<h3>Protocol Converters</h3>
					<p><img src="img/wiznet.jpg" style="float: left;width:50%;margin:0 8px 0 0 ">
					Converters take microcontroller data, supplied in one of the protocols mentioned above, package it into TCP/IP 'envelopes', and send it out over the internet. These devices have standard RJ-45 ethernet connectors, and connect
					directly to internet routers. This connection gives microcontrollers access to the World Wide Web. Device data can then be sent anywhere. Also, internet connected devices can receive data too. This allows devices to be controlled
					from anywhere, using the Internet and the World Wide Web.
					</p>

					<div class="clearfix"></div>
					<h3>Web Interfaces</h3>
					<p><img src="img/panel.png" style="float: right;width:50%;">
					<p>At KerBob, we are hardware AND software specialists. After all of your devices are connected, we can design a custom control panel to manage all of them for you.</p>
					<p>Our development team utilizes state of the art web technologies, including HTML5, CSS3, JavaScript, PHP, and Python. If you have an existing WordPress, Joomla, or Drupal CMS, we can write plug-ins to integrate all of your
					hardware activity and business logic into your existing platform.</p>
					<p>We are also database specialists as well. We can design and implement database solutions for you using MS SQL, MySQL, Postgress, and Mongo database architectures. Using a centrally located web server, we can also program your
					interface to generate and send SMS text messages and e-mail alerts to you and your clients whenever something exciting happens.</p>

					<div class="clearfix"></div>
					<h3>Conclusion</h3>
					<p>The Internet of tomorrow is here today. Don't miss out on your chance to change the world. Contact us and we'll show you how we can prototype an MVP for you, and turn your IoT project into a reality today!

				</div>

				<button class="contact-button rounded-corners" onClick="parent.location='contact.php'">Contact Us Today</button>


				<iframe width="225" height="570" src="http://meetu.ps/2Bx1F6" frameborder="0"></iframe>


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
		</div>
    </body>
</html>
