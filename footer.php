<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Themesmandu_Starter
 */

?>

	</div><!-- #content -->


	<footer id="colophon" class="site-footer py-5">

		<div class="container">
			<div class="site-info">
				<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Powered by %s', 'themesmandu-starter' ), '<a href="https://wordpress.org/">WordPress</a>' );
				?>
				<span class="sep"> | </span>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					sprintf( esc_html__( '&copy; %1$s %2$s by %3$s', 'themesmandu-starter' ), date( 'Y' ), esc_html( wp_get_theme()->get( 'Name' ) ), '&nbsp;<a target="_blank" href="' . esc_url( wp_get_theme()->get( 'AuthorURI' ) ) . '">' . esc_html( ucwords( wp_get_theme()->get( 'Author' ) ) ) . '</a>' );
				?>
			</div><!-- .site-info -->
		</div><!-- .container -->

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
