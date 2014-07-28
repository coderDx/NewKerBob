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
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php
            include_once("includes/header.php");
        ?>

		<div class="interior-page">

			<h1 style="font-weight: 500;">Web-Based Applications</h1>
			<p style="font-style: italic;font-weight:400;text-align: center;width: 75%;margin: 0 auto 2em auto;">"Today's web applications are aesthetic and functional works of art created using HTML5, PHP, databases, and both client and server side JavaScript."</p>


			<p>Let our uber-talented design and programming team create or maintain an effective web-based application for your company using one or all of the following technologies. </p>

			<div  style="margin: 0 auto;display: block;width:15%;color: #000501;">
				<ul>
					<li>HTML5</li>
					<li>JavaScript</li>
					<li>CSS3</li>
					<li>PHP</li>
					<li>MySQL</li>
					<li>WordPress</li>
					<li>Drupal</li>
					<li>Joomla</li>
					<li>Custom CMS</li>
				</ul>
			</div>

			<p>Hosting packages are also available starting at $10 per month.</p>

			<button class="rounded-corners" style="width:15em;height:2em;background-color:green;font-size:1.5em;color:#ffffff;margin: 2em auto;display: block" onClick="parent.location='contact.php'">Contact Us Today</button>

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
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
