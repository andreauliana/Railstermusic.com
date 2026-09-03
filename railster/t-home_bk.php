<?php
/**
 * Template Name: Homepage
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package railster
*/
get_header();
?>
</div>
<div class="video-home-welcome">
	<video playsinline autoplay muted loop poster="<?php echo get_stylesheet_directory_uri(); ?>/video/FEFF25.jpg" id="bgvid">
		<source src="<?php echo get_stylesheet_directory_uri(); ?>/video/railster-web-home.mp4" type="video/mp4">
		<source src="<?php echo get_stylesheet_directory_uri(); ?>/video/railster-web-home.ogv" type='video/ogg; codecs="theora, vorbis"'>
		<source src="<?php echo get_stylesheet_directory_uri(); ?>/video/railster-web-home.webm" type="video/webm">  
	</video>
</div>
<div class="container">
<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile;
	?>
	<div>
	<h4>Previous Gigs:<h4>
	<p>
	29 March at Monsieur D (PN)<br>
	16 April at Tarantola Lib. (UD)<br>
	25 April at KK (UD)<br>
	06 May at Lib. Tarantola for MattiaC (UD)<br>
	24 May at Kaleidoscienza, 22:30 (UD)<br>
	07 June at Mamm (UD)<br>
	15 June at Terminal Festival (UD)
	</p>
	</div>
</main>
<?php get_footer();