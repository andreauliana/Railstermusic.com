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
<section class="banner-home-welcome">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner-main.jpg" alt="FastBlaster EP - Railster" id="bgbanner"/>
</section>
<div class="container">
<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile;
	?><div>
	<hr>
	<h4>Upcoming:</h4>
	<p>25 August - at Visionario, with Sleeping Pills (for UdinElettronica) (UD)</p>
	<p>18 September - TBA (UD)</p>
	<br>
	<h4 style="opacity: .45;">Previous Gigs:<h4>
	<p style="opacity: .3;">
	13 July at Visionario (UD)<br>
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