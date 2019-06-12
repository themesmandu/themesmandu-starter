<?php
/**
 * The site header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Themesmandu_Starter
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'themesmandu-starter' ); ?></a>

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

	<div id="content" class="site-content pt-4">
