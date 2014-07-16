<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Milan Erak (perceptionmm.com)">
	
	<title>O'Neill Healthcare & Managment</title>

	<link rel="shortcut icon" href="assets/images/favicon.ico">
	
	<!-- FancyBox -->
    <link rel="stylesheet" href="assets/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="assets/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">




	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->



	<?php $page = "home"; ?>
</head>

<body class="home">

<?php include 'inc/nav.php'; ?>

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<div class="titles">
					<h1 class="lead">Blog</h1>
					<p class="tagline">Celebrating 50 years of providing quality care</p>
					<p><a href="contact.php" class="btn btn-default btn-lg" role="button">Schedule a Tour</a> <a class="btn btn-action btn-lg fancybox-media" role="button" href="https://www.youtube.com/watch?v=vmFqp1uatmo" >Video Guide</a></p>
				</div>
				
			</div>

		</div>

	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">The Future of Healthcare.</h2>
		<p class="text-muted">
			Close to Home. Close to Your Heart. 
		</p>
	</div>
	<!-- /Intro-->

	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Reasons to choose us</h3>
			
			<div class="row">
				
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		

	</div>	<!-- /container -->

	<footer id="footer" class="top-space">

		<?php include 'inc/footer.php'; ?>

	</footer>	


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	<script type="text/javascript" src="assets/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="assets/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script type="text/javascript" src="assets/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="assets/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="assets/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script>
        //Start FancyBox
                jQuery('.fancybox-media').fancybox({
                    openEffect  : 'none',
                    closeEffect : 'none',
                    helpers : {
                        media : {}
                    }
                });
        </script>

	

</body>
</html>