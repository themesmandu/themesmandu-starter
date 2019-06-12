<?php
/**
 * Template part for displaying Single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Themesmandu_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	the_post_thumbnail(
		'themesmandu-starter-featured-900-600',
		array( 'class' => 'img-fluid rounded mb-2' )
	);
	?>

<div class="card-body">

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

<?php
if ( get_post_type() === 'post' ) {
	?>
	<hr>
		<div class="entry-meta">
		<?php
			themesmandu_starter_posted_on();
			themesmandu_starter_posted_by();
		?>
		</div>
	<hr>
	<?php
}
?>

	<?php
	if ( has_excerpt() ) :
		?>
			<div class="lead"><?php the_excerpt(); ?></div>
		<?php
		endif;
	?>

	<div class="entry-content">
		<?php
			the_content(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers */
					esc_html__( 'Continue reading%s', 'themesmandu-starter' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				)
			);

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'themesmandu-starter' ),
					'after'  => '</div>',
				)
			);
			?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php themesmandu_starter_entry_footer(); ?>
	</footer>

</div><!-- .card-body -->
</article><!-- #post-<?php the_ID(); ?> -->
