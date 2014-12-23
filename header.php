<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" />
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.page-scroller-308.js"></script>
	
	<!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
	<![endif]-->
	
	<!--[if (gte IE 6)&(lte IE 8)]>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>

<body>

<header id="header" role="banner">

	<h1>LOGO</h1>
	<h2><?php bloginfo('description'); ?></h2>

	<nav role="navigation">
		<ul>
			<li><a href="<?php echo home_url();?>"></a></li>
			<li><a href="<?php echo home_url();?>"></a></li>
			<li><a href="<?php echo home_url();?>"></a></li>
			<li><a href="<?php echo home_url();?>"></a></li>
			<li><a href="<?php echo home_url();?>"></a></li>
		</ul>
	</nav>

</header>