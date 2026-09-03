<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package railster
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<!-- <?php railster_post_thumbnail(); ?> -->
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'railster' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>
</article>