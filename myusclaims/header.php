<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <title><?php echo bloginfo(name); ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="format-detection" content="telephone=no">
    
    <meta name="author" content="Steven E. Ventimiglia, Merit Mile LLC" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.png">
	
	<?php if(is_front_page()): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/new/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/new/css/stylesheet.css"/>
	<?php else: ?>
	<link type="text/css" rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/new/css/bootstrap.min.css"/>
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/style.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/custom.css" rel="stylesheet" type="text/css" media="screen" />
	<?php endif; ?>
	
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/modernizr.min.js"></script>
  </head>
  <body>
    <!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NKXPMT" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NKXPMT');</script>
	<!-- End Google Tag Manager -->
	
	<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

	<?php if(is_front_page()): ?>
		<header>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-xs-2 visible-sm visible-xs">
						<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false"> 
							<span class="tt"></span>
						</button>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-5">
						<div class="logo-wrapper">
							<a href="<?php bloginfo('url');?>"><img src="<?php the_field('site_logo', 'option')?>" alt="logo"></a>
						</div>
					</div>
					<div class="col-sm-3 col-xs-5 visible-sm visible-xs">
						<div class="header-tel">
							<a href="tel:800-270-2579" class="tel-link"><span class="glyphicon glyphicon-earphone"></span> 800-270-2579</a>
						</div>
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12 main-nav-wrapper">
						<nav id="bs-navbar" class="collapse navbar-collapse">
							<?php header_nav();?>
						</nav>
					</div>
				</div>
			</div> <!-- container end -->
		</header> <!-- header end -->	
		<?php else: ?>
		<div id="mainContainer">
			  <header>
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-xs-2 visible-sm visible-xs">
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false"> 
								<span class="tt"></span>
							</button>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-5">
							<div class="logo-wrapper">
								<a href="<?php bloginfo('url');?>"><img src="<?php the_field('site_logo', 'option')?>" alt="logo"></a>
							</div>
						</div>
						<div class="col-sm-3 col-xs-5 visible-sm visible-xs">
							<div class="header-tel">
								<a href="tel:800-270-2579" class="tel-link"><span class="glyphicon glyphicon-earphone"></span> 800-270-2579</a>
							</div>
						</div>
						<div class="col-md-9 col-sm-12 col-xs-12 main-nav-wrapper">
							<nav id="bs-navbar" class="collapse navbar-collapse">
								<?php header_nav();?>
							</nav>
						</div>
					</div>
				</div> <!-- container end -->
			</header> <!-- header end -->
		<?php endif; ?>