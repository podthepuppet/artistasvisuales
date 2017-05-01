<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>


        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<!-- a href="<?php echo home_url(); ?>"-->
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<!-- center -->
							<a href="<?php echo home_url(); ?>/#"><img src="<?php echo get_template_directory_uri(); ?>/img/head/guia-1.svg" alt="guia" class="logo-img"></a>
							<a href="<?php echo home_url(); ?>/#"><img src="<?php echo get_template_directory_uri(); ?>/img/head/tienda-1.svg" alt="tienda" class=logo-img"></a>
							<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/head/titulo-1.svg" alt="titulo" class=logo-img"></a>
							<a href="<?php echo home_url(); ?>/#"><img src="<?php echo get_template_directory_uri(); ?>/img/head/registrarse-1.svg" alt="registrarse" class=logo-img"></a>
							<a href="<?php echo home_url(); ?>/wp-login.php"><img src="<?php echo get_template_directory_uri(); ?>/img/head/ingresar-1.svg" alt="ingresar" class=logo-img"></a>
							<!-- /center -->
						<!-- ###################################################################################################### -->


						<!-- ###################################################################################################### -->
						<!--/a-->
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<!-- ?php html5blank_nav(); ? -->
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
