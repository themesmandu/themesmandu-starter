<?php
/**
 *
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Themesmandu_Starter
 */

get_header();
?>

<div class="container">
	<div class="row">

		<div id="primary" class="content-area col-md-12">
		<i class="fas fa-chevron-up"></i>
		<i class="fas fa-align-left"></i>
		<div class="lol"></div>
			<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/front-page/content' );

			endwhile; // End of the loop.
			?>

			</main>
		</div><!-- #primary -->

	</div><!-- /.row -->
</div><!-- /.container -->

<?php
get_footer();
