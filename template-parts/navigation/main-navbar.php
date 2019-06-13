<?php
/**
 * Template part for displaying main navigation top-bar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Themesmandu_Starter
 */

?>
	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-expand-md bg-dark">
			<div class="container">
					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


						<?php
					} else {
						the_custom_logo();
					}
					?>
					<!-- end custom logo -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container'       => 'div',
						'container_id'    => 'main-nav',
						'container_class' => 'collapse navbar-collapse justify-content-end',
						'menu_id'         => false,
						'menu_class'      => 'navbar-nav',
						'depth'           => 2,
						'fallback_cb'     => 'Themesmandu_Starter_WP_Bootstrap_Navwalker::fallback',
						'walker'          => new Themesmandu_Starter_WP_Bootstrap_Navwalker(),
					)
				);
				?>

			</div>
		</nav>
	</header><!-- #masthead -->
