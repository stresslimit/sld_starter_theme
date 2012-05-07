<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php wp_title( ' | ', true, 'right' ) ?>Stresslimit Design</title>
<link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/x-icon">

<?php wp_head() ?>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/selectivizr.js"></script>
<![endif]-->

</head>
<body>

	<header>
	
		<div class="container">
		
			<h1 id="logo"><a href="<?= home_url(); ?>"><?php bloginfo('name') ?></a></h1>
			
			<nav role="navigation">
				<?php wp_nav_menu(array('menu' => 'primary')) ?>
			</nav>
		
		</div>
	
	</header>

	<div id="main" class="container">
