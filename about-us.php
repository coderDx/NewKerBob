<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>About Us - The KerBob Team and Our Philosophy</title>
		<meta name="description" content="Learn about us and the KerBob philosophy. We are dedicated to the initial and ongoing success of your business and your products. We're here to help you.">
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

			<h1>About KerBob</h1>

			<p style="font-style: italic;font-weight:400;text-align: center;width: 75%;margin: 0 auto 2em auto;">"When you believe in what you're doing and use your imagination<br> and initiative, you can make a difference."</p>

			<div class="col-2">
				<h3>Dave Brixius - Principal, Developer</h3>
				<img class="image-left" src="img/me.png">
				<p>Dave received his Bachelor's degree in computer science, with a minor in electrical engineering, in 2008 from the University
				of Wisconsin. Following college, Dave spent time as a network security specialist, and then as a web developer with different companies in the SE Wisconsin area. At the end of 2012, Dave relocated
				to Austin, Texas, to grow the KerBob business. Dave has spent time as a large group health insurance underwriter, and enjoyed a long career as a mechanical drafter/designer.</p>
				<p>Dave is also heavily involved in the Austin developer community, and is the Organizer of an Austin tech meetup, Austin Internet of Things. He is also a member of several other
				tech meetups in the Austin, Texas area. Dave's primary responsibilities at KerBob include running the business, and web-based application programming.</p>
				<p>In his spare time, Dave enjoys the Austin entertainment scene, and is an awesome karaoke singer.</p>
			</div>

			<div class="col-2 clearfix">
			<h3 style="text-align: right;">John Pinnow - DevOps Guru</h3>
				<img  class="image-right" src="img/john.png" style="float: right;margin-left: 10px;">
				<p>John is currently pursuing another degree in networking and network security. His network server and hardware experience dates back to the day's of the Sun Sparc stations. Ever true to his command line roots, John
				continues his legacy of network server administration as KerBob's DevOps Specialist and Network Security Administrator.</p>
				<p>John's many talents include configuring and monitoring network servers, firewall management, intrusion attempt monitoring, and e-mail server configuration and maintenance. In his role at Kerbob,
				John is responsible for security and operations of KerBob's servers, applications, and infrastructure. In the past, John also served as a network administrator for the IEEE-Computer Society at the
				University of Wisconsin.</p>
				<p>When he's not working or in class, John enjoys pondering all of life's mysteries, and spending quality time with his cat.</p>
			</div>

			<button class="rounded-corners contact-button" onClick="parent.location='contact.php'">Contact Us Today</button>

		</div>



		<?php
        include_once("includes/footer.php");
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
            ga('create','UA-28056542-1');ga('send','pageview');
        </script>
    </body>
</html>
