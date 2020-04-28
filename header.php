<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
	<nav class="container navigation-wrapper relative">
<!--                <nav class="container navigation-wrapper relative">-->
		<div class="nav-logo-wrapper">
				<!-- Set up your HTML -->
				<a href="#" class="logo">
						<img width="16" src="<?php echo get_template_directory_uri()?>/img/logo/logo.svg" alt="">
				</a>
		</div>
		<div class="site-desc">
				<div class="site-desc__content">First&nbsp;Surfing&nbsp;Magazine</div>
		</div>
		<ul class="navigation">
				<li class="navigation__item">
						<a class="navigation__link" href="#">Stories</a>
				</li>
				<li class="navigation__item">
						<a class="navigation__link" href="#">Events</a>
				</li>
				<li class="navigation__item">
						<a class="navigation__link" href="#">Places</a>
				</li>
				<li class="navigation__item">
						<a class="navigation__link" href="#">Boards</a>
				</li>
		</ul>
</nav>
