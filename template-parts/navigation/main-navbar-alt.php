<?php
/**
 * Template part for alternative displaying main navigation top-bar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Themesmandu_Starter
 */

?>
<header id="masthead" class="site-header" role="banner">
	<nav class="navbar navbar-expand-lg main-navigation append-left">
		<div class="container">
			<?php
			if (!has_custom_logo()) {
				if (is_front_page() && is_home()) :
					?>

					<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>
				<?php
			else :
				?>

					<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

				<?php
			endif;
		} else {
			the_custom_logo();
		}
		?>

			<button id="menu" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#main-nav">
				<span></span>
				<span></span>
				<span></span>
			</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNavDropdown',
					'menu_class'      => 'navbar-nav mr-auto',
					'fallback_cb'     => 'Themesmandu_Starter_WP_Bootstrap_Navwalker::fallback',
					'menu_id'         => false,
					'depth'			  => 8,
					'walker'          => new Themesmandu_Starter_WP_Bootstrap_Navwalker(),
				)
			);
			?>

			<?php
			get_template_part('template-parts/navigation/add-item', 'search-form');
			?>


		</div><!-- .container -->
	</nav><!-- .site-navigation -->
</header><!-- #masthead -->