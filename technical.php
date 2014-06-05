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



		<div class="interior-content">

			<h1>Technologies We Use</h1>

			<h2>PHP</h2>
			<p>PHP has been the server side go to of KerBob for several years. Long before I started KerBob, I regularly used PHP scripts to perform various tasks such as server-side form validation and
				processing, MySQL database tasks, and cron scripts for manipulating large text files.</p>

			<p>One notable example of our PHP experience would be the H2Oscore project (www.h2oscore.com). When KerBob joined H2Oscore in 2012, it was written in Drupal 6. Following many conversations with
			the client, it was decided that we were going to rewrite the application using Zend Framework, and away from Drupal 6.</p>

			<p>The first task was to thoroughly explore the project, as it was originally written. All aspects of the project were evaluated. Some of them were necessary, and some were no longer needed or relevent.
			From the collection of pieces that survived this analysis, a new sitemap and structure were created, and the transformation to Zend Framework commenced.</p>

			<p>The H2Oscore site has a lot of moving pieces. Among them are remotely located web services (written in C#), receiving web services(Python), two data stores (MySQL and Mongo NoSQL), a Javascript front-end
			(AJAX), and a telephony interface that connects to an 800 number.</p>

			<p>Moving away from the Drupal structure, one of our first activities was to implement the Zend Framework Auth module. A new table was created in an existing MySQL instance, and the Auth module was
			implemented successfully.</p>

			<p>After that, we began to explore the concept of customer dashboards. A user interface was designed by project designers, and we wrote the code to dynamically calculate and display all relevant
			dashboard data. This involved accessing both the MySQL and Mongo data collections via php.</p>

			<h2>WordPress</h2>
			<p>Due to it's status as one of the most popular content management systems in use today, KerBob has achieved a significant amount of experience with the WordPress CMS. One good example of this is
			the site we built for Rodman Law Office (www.rodmanlawoffice.com). Rodman approached us to build a new website. Among the goals for the new site were it had to be responsive, needed blogging functionality,
			had to have a shark in the theme, and they liked the color blue. Starting with those requirements, we created the site that now exists at www.rodmanlawoffice.com. Technical features on that site include
			customizing a WordPress theme, creating the new 'shark' logo, embedding a Google map on the 'Contact Us' page, and adding interactive JavaScript on the FAQ page.</p>

			<p>Although that site did not require the creation of any custom plug-ins, we are currently involved with writing custom Wordpress plug-ins for another client. But due to legal reasons, we are not
			allowed to discuss any of the details of that project here.</p>

			Add content related to:
			<ul>
				<li>Joomla</li>
				<li>Custom CMS</li>
				<li>JavaScript</li>
				<li>MySQL</li>
				<li>HTML5</li>
				<li>CSS</li>
				<li>Server Admin</li>
				<li>Hosting</li>
				<li>KerBob Developer Tools</li>
				<li>What Makes KerBob Different</li>

			</ul>

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
