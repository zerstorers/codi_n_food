<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header class="bg-dark">
			<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			<div class="d-flex">

				<div class="w-50">
					<h2>codi'n food</h2>
				</div>
				
				<nav class="w-50 text-right">
					<ul class="d-flex justify-content-end justify-content-around list-unstyled">
						<li><a href="">HOME</a></li>
						<li><a href="">ABOUT</a></li>
						<li><a href="">SHOP</a></li>
						<li><a href="">BLOG</a></li>
						<li><a href="">CONTACT</a></li>
						<li><i class="fas fa-wallet"></i></li>
						<li><i class="fas fa-search"></i></li>

					</ul>
				</nav>
			</div>

			<div class="h-75 d-flex flex-column justify-content-center align-items-center"> 
				<h1>Handmade breads</h1>
				<p>Lorem ipsum dolor, sit amet consecfclervfdxtgsfduas adipisci.</p>
			</div>
		</header>

		<div id="content" class="site-content">
			<main>
