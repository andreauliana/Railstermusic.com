<?php
/**
 * Template Name: Defrag PR
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package railster
*/
get_header();
?>
</div>






<div class="hero-artwork">
	<div class="container">
		<div class="hero-flex">
			<div class="hero-image">
				<a target="_blank" href="https://share.amuse.io/album/railster-defrag-system"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Defrag-System_Artwork_1200x1200.jpg" alt="Defrag System Artwork"></a>
			</div>
			<div class="hero-text">
				<p>A sonic diary from the margins of time.</p>
				<p>Crafted over four years, <strong>Defrag System</strong> is an exploration of fragmented memories, rhythms, and ambient textures.</p>
				<p>Inspired by moments of stillness, field recordings, and dusty machines, the album reorganizes chaos into something personal.</p>
				<br>
				<p>Listen now on <a target="_blank" href="https://share.amuse.io/album/railster-defrag-system">all digital platforms</a>, <a target="_blank" href="https://railster.bandcamp.com/album/defrag-system">Bandcamp</a>, <a target="_blank" href="https://soundcloud.com/railster/sets/defrag-system/s-BF8kTrofwvZ?si=892fa51f30854a0ea65a8e3ba4eb22b4&utm_source=clipboard&utm_medium=text&utm_campaign=social_sharing">SoundCloud</a>, and a <a target="_blank" href="https://www.mixcloud.com/railster/railster-defrag-system-continuous-mix/">Continuous Mix avaiable on Mixcloud</a>.
			</div>
		</div>
	</div>
</div>








<div class="container container-defrag">





<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile;
	?>

</main>


<?php
$box_1 = get_field('box-1');
$box_2 = get_field('box-2');
?>

<div class="acf-two-col">
  <?php if ($box_1): ?>
    <div class="acf-box acf-box-1">
      <?php echo wp_kses_post($box_1); ?>
    </div>
  <?php endif; ?>

  <?php if ($box_2): ?>
    <div class="acf-box acf-box-2">
      <?php echo wp_kses_post($box_2); ?>
    </div>
  <?php endif; ?>
</div>







<?php get_footer();