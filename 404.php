<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Themesmandu-starter
 */

get_header();
?>

<div class="container">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="py-5 text-center">
				<h1 class="page-title">
					<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'themesmandu-starter' ); ?>
				</h1>
			</header>

			<div class="error-404 not-found">
				<?php get_search_form(); ?>
			</div>

		</main>
	</div><!-- #primary -->

</div><!-- /.container -->

<?php
get_footer();
