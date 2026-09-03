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
	?>
	<div class="home-events">
	<hr>
	<h4>Upcoming:</h4>
	<ul class="event-list upcoming-events">
		<?php foreach ( railster_event_lines( 'railster_upcoming_events', "25 August - at Visionario, with Sleeping Pills (for UdinElettronica) (UD)\n18 September - TBA (UD)" ) as $event ) : ?>
			<li><?php echo esc_html( $event ); ?></li>
		<?php endforeach; ?>
	</ul>
	<br>
	<h4 class="previous-events-heading">Previous Gigs:</h4>
	<ul class="event-list previous-events">
		<?php foreach ( railster_event_lines( 'railster_previous_events', "13 July at Visionario (UD)\n29 March at Monsieur D (PN)\n16 April at Tarantola Lib. (UD)\n25 April at KK (UD)\n06 May at Lib. Tarantora for MattiaC (UD)\n24 May at Kaleidoscienza, 22:30 (UD)\n07 June at Mamm (UD)\n15 June at Terminal Festival (UD)" ) as $event ) : ?>
			<li><?php echo esc_html( $event ); ?></li>
		<?php endforeach; ?>
	</ul>
	</div>
</main>
<?php get_footer();