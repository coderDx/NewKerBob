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
    </head>
    <body>
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
							<p>Just as the Internet revolutionized the world in the 90's, the Internet of Things is revolutionizing the world today. Not only are people interacting with eachother
								using the internet, but now devices are talking to eachother over the internet as well.</p>
							</p>
							<img src="/img/button-learn.png" onclick="window.location.href = '/iot.php';" style="cursor:pointer;float: right">
						</div>
					</div>

					<div class="col-3 rounded-corners">
						<h2>Existing Projects</h2>
						<div style="text-align: left">
							<p>Whether you need a new webmaster, or additional programmer on your team, KerBob has the skills and experience to fill your need. And, you will save money over having to hire full-time employees.</p>
							<img src="/img/button-learn.png" onclick="window.location.href = '/iot.php';" style="cursor:pointer;float: right">
						</div>
					</div>

					<div class="col-3 rounded-corners">
						<h2>New Projects</h2>
						<div style="text-align: left">
							<p>Using the very latest in web, mobile, and e-commerce technology, we create new, state of the art web presences for products and business that adapt to and view properly across all device.</p>
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
    </body>
</html>
