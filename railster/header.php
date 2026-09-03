<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package railster
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'railster' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">

			<div class="container">
				<div class="row"> 
				
				<a class="logo-nav brand-logo left" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" src="<?php echo esc_url( get_template_directory_uri() . '/img/Railster-Lettering-2022.gif' ); ?>">
				</a>

				<div class="hide-on-med-and-down right">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>					
				</div>
				<button type="button" data-target="slide-out" class="sidenav-trigger menu-toggle right hide-on-large" aria-controls="slide-out" aria-label="<?php esc_attr_e( 'Open menu', 'railster' ); ?>"><i class="material-icons" aria-hidden="true">&#xe5d2;</i></button>
				</div>
			</div>
		</nav><!-- #site-navigation -->
<ul id="slide-out" class="sidenav">
				<section class="socials">
				<a target="_blank" rel="noopener noreferrer" aria-label="Contact Railster" title="Contact Railster" style="text-decoration:none" href="mailto:railsterbeats@gmail.com"><span class="icon-t_mail" aria-hidden="true"></span></a>

				<a target="_blank" rel="noopener noreferrer" aria-label="Visit Railster on Bandcamp" title="Visit Railster on Bandcamp" style="text-decoration:none" href="https://railster.bandcamp.com/"><span class="icon-t_bandcamp" aria-hidden="true"></span></a>

				<a target="_blank" rel="noopener noreferrer" aria-label="Visit Railster on Spotify" title="Visit Railster on Spotify" style="text-decoration:none" href="https://open.spotify.com/artist/5jVGZmJzO2eYyXl2Gvsw3B"><span class="icon-t_Spotify" aria-hidden="true"></span></a>

				<a target="_blank" rel="noopener noreferrer" aria-label="Visit Railster on Instagram" title="Visit Railster on Instagram" style="text-decoration:none" href="https://www.instagram.com/railster/"><span class="icon-t_instagram" aria-hidden="true"></span></a>

				<a target="_blank" rel="noopener noreferrer" aria-label="Visit Railster on Twitter" title="Visit Railster on Twitter" style="text-decoration:none" href="https://twitter.com/railster"><span class="icon-t_twitter" aria-hidden="true"></span></a>

				<a target="_blank" rel="noopener noreferrer" aria-label="Visit Railster on Facebook" title="Visit Railster on Facebook" style="text-decoration:none" href="https://www.facebook.com/railstermusic"><span class="icon-t_facebook" aria-hidden="true"></span></a>

				<a target="_blank" rel="noopener noreferrer" aria-label="Visit Railster on YouTube" title="Visit Railster on YouTube" style="text-decoration:none" href="https://www.youtube.com/user/railsterr"><span class="icon-t_youtube" aria-hidden="true"></span></a>

				<a target="_blank" rel="noopener noreferrer" aria-label="Visit Railster on SoundCloud" title="Visit Railster on SoundCloud" style="text-decoration:none" href="https://soundcloud.com/railster"><span class="icon-t_soundcloud" aria-hidden="true"></span></a>
			</section>
			<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		)
	);
	?>


</ul>


	</header><!-- #masthead -->

<div class="container">
