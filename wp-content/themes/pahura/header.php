<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>

	<title>Hello, world!</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-primary navbar-dark z-depth-0">
		<a class="navbar-brand" href="<?php echo site_url(); ?>">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'primary-menu',
				'container_class' => 'collapse navbar-collapse',
				'container_id' => 'navbarSupportedContent',
				'menu_class' => 'navbar-nav',
				'depth' => '3',
				'menu_class'        => 'nav navbar-nav ml-auto bg-blue',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			)
		) ?>

	</nav>
	<div class="my-4"></div>
