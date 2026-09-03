<?php
/**
 * Template Name: About
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package railster
 */
get_header();
?>

<main id="primary" class="site-main">
	<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile; // End of the loop.
	?>
</main>

			<section class="socials">
				<a target="_blank" title="Contact Railster's" style="text-decoration:none" href="mailto:railsterbeats@gmail.com"><span class="icon-t_mail"></span></a>

				<a target="_blank" title="Visit Railster's Bandcamp" style="text-decoration:none" href="https://railster.bandcamp.com/"><span class="icon-t_bandcamp"></span></a>

				<a target="_blank" title="Visit Railster's Audius" style="text-decoration:none" href="https://audius.co/railster"><span class="icon-t_audius"></span></a>

				<a target="_blank" title="Visit Railster's Spotify" style="text-decoration:none" href="https://open.spotify.com/artist/5jVGZmJzO2eYyXl2Gvsw3B"><span class="icon-t_Spotify"></span></a>

				<a target="_blank" title="Visit Railster's Instagram" style="text-decoration:none" href="https://www.instagram.com/railster/"><span class="icon-t_instagram"></span></a>

				<a target="_blank" title="Visit Railster's Twitter" style="text-decoration:none" href="https://twitter.com/railster"><span class="icon-t_twitter"></span></a>

				<a target="_blank" title="Visit Railster's Facebook" style="text-decoration:none" href="https://www.facebook.com/railstermusic"><span class="icon-t_facebook"></span></a>

				<a target="_blank" title="Visit Railster's Opensea" style="text-decoration:none" href="https://opensea.io/Railster"><span class="icon-t_opensea"></span></a>

				<a target="_blank" title="Visit Railster's YouTube" style="text-decoration:none" href="https://www.youtube.com/user/railsterr"><span class="icon-t_youtube"></span></a>

				<a target="_blank" title="Visit Railster's Soundcloud profile" style="text-decoration:none" href="https://soundcloud.com/railster"><span class="icon-t_soundcloud"></span></a>

				<a target="_blank" title="Listen to Railster's beats on BeatStars" style="text-decoration:none" href="https://www.beatstars.com/railster"><span class="icon-t_BeatStars"></span></a>

				<a target="_blank" title="Visit Railster's LastFm" style="text-decoration:none" href="https://www.last.fm/music/RAILSTER"><span class="icon-t_LastFm"></span></a>

			</section>

	

<?php
// get_sidebar();
get_footer();
