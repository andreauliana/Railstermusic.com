<?php
/**
 * Template Name: Sync & Creative Licensing
 *
 * @package railster
 */

get_header();
?>

<main id="primary" class="site-main sync-page">
	<section class="sync-intro" aria-labelledby="sync-title">
		<div class="container">
			<p class="sync-eyebrow">Railster catalog</p>
			<h1 id="sync-title">Music for images, scenes, and spaces.</h1>
			<p class="sync-lede">A flexible catalog of beats, ambient textures, and electronic compositions for film, fashion, games, advertising, and other creative projects.</p>
			<a class="btn-cta" href="mailto:railsterbeats@gmail.com?subject=Railster%20sync%20request">Request music for a project</a>
		</div>
	</section>

	<div class="container sync-content">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile;
		?>
	</div>
</main>

<?php get_footer();