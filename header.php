<?php

/**
 * The site header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Themesmandu-starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header id="top-header" class="site-header" role="banner">
			<a class="skip-link" href="#content"><?php esc_html_e( 'To the content', 'themesmandu-starter' ); ?></a>

			<?php
			if ( get_theme_mod( 'menubar_mode' ) === 'alt' ) {
				// alternative navigation bar:
				// left: logo, main menu - right: search form or something.
				get_template_part( 'template-parts/navigation/main-navbar', 'alt' );
			} else {
				// standard navigation bar:
				// left: logo - right: main menu.
				get_template_part( 'template-parts/navigation/main-navbar' );
			}

			// Header Image.
			the_custom_header_markup();

			if ( is_front_page() && ! is_home() ) {
				// head banner on the front page if it enabled.
				get_template_part( 'template-parts/jumbotron' );
			}
			?>

		</header><!-- #masthead -->

		<div id="content" class="content-wrap">
