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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/auicon-v1.2/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-76838045-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-76838045-1');
</script>

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
				
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<a class="logo-nav brand-logo left" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img alt="Railster Logo" src="<?php echo get_template_directory_uri(); ?>/img/Railster-Lettering-2022.gif"><?php bloginfo( 'name' ); ?> </a>
					<?php
				else :
					?>
					<a class="logo-nav brand-logo left" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img alt="Railster Logo" src="<?php echo get_template_directory_uri(); ?>/img/Railster-Lettering-2022.gif"><?php bloginfo( 'name' ); ?> </a>
				<?php endif; ?>

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
				<a href="#" data-target="slide-out" class="sidenav-trigger menu-toggle right hide-on-large" aria-controls="primary-menu" ><i class="material-icons">&#xe5d2;</i></a>
				</div>
			</div>
		</nav><!-- #site-navigation -->
<ul id="slide-out" class="sidenav">
				<section class="socials">
				<a target="_blank" title="Contact Railster's" style="text-decoration:none" href="mailto:railsterbeats@gmail.com"><span class="icon-t_mail"></span></a>

				<a target="_blank" title="Visit Railster's Bandcamp" style="text-decoration:none" href="https://railster.bandcamp.com/"><span class="icon-t_bandcamp"></span></a>

				<a target="_blank" title="Visit Railster's Spotify" style="text-decoration:none" href="https://open.spotify.com/artist/5jVGZmJzO2eYyXl2Gvsw3B"><span class="icon-t_Spotify"></span></a>

				<a target="_blank" title="Visit Railster's Instagram" style="text-decoration:none" href="https://www.instagram.com/railster/"><span class="icon-t_instagram"></span></a>

				<a target="_blank" title="Visit Railster's Twitter" style="text-decoration:none" href="https://twitter.com/railster"><span class="icon-t_twitter"></span></a>

				<a target="_blank" title="Visit Railster's Facebook" style="text-decoration:none" href="https://www.facebook.com/railstermusic"><span class="icon-t_facebook"></span></a>

				<a target="_blank" title="Visit Railster's YouTube" style="text-decoration:none" href="https://www.youtube.com/user/railsterr"><span class="icon-t_youtube"></span></a>

				<a target="_blank" title="Visit Railster's Soundcloud profile" style="text-decoration:none" href="https://soundcloud.com/railster"><span class="icon-t_soundcloud"></span></a>
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
