<!doctype html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,700,500' rel='stylesheet' type='text/css'>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="cleartype" content="on">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container">

			<header>
				<div class="width clearfix">
					<h1 class="columna medium-3">
						<a href="#">
							<img src="<?php echo THEMEPATH; ?>images/logo.png" alt="" />
						</a>
					</h1>
					<div class="right idioma">
						<?php if (qtrans_getLanguage() == 'es'){ ?>
							<a href="<?php echo site_url('es'); ?>" class="text-center">Español</a>
							|
							<a href="<?php echo site_url('en'); ?>" class="text-center greyed">Inglés</a>
						<?php } else { ?>
							<a href="<?php echo site_url('es'); ?>" class="text-center greyed">Spanish</a>
							|
							<a href="<?php echo site_url('en'); ?>" class="text-center">English</a>
						<?php } ?>
					</div>

				</div>
			</header>

			<div class="main">
