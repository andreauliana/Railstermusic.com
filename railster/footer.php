<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package railster
 */
?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			&copy;<?php echo esc_html( gmdate( 'Y' ) ); ?> All Rights Reserved
			<span class="sep"> | </span>
				<a href="mailto:railsterbeats@gmail.com">Contact</a>
		</div>
	</footer>
</div>
</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'railster' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>