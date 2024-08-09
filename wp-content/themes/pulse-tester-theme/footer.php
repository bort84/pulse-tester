		<footer>
			<div>

				<div class="upper">
					<div>
						<?php get_template_part( 'components/footer-logo' ); ?>

						<?php $address = get_field('address', 'option');
						
						if ($address) { ?>
							<address>
								<?php echo $address; ?>
							</address>
						<?php } ?>
					</div>

					<?php while( have_rows('social_navigation', 'option') ): the_row();
						$header = get_sub_field('header');

						if( have_rows('navigation_links') ): ?>
						<nav class="social-nav clearfix">
							<?php if ($header) { ?><h5><?php echo $header; ?></h5><?php } ?>
							<ul>
							<?php while( have_rows('navigation_links') ): the_row();
								$icon = get_sub_field('icon');
								$link = get_sub_field('link'); ?>

								<li><a href="<?php echo $link; ?>" target="_blank"><span class="dashicons <?php echo $icon; ?>"></span></a></li>
							<?php endwhile; ?>
							</ul>
						</nav>
						<?php endif;
					endwhile; ?>
				</div>

				<p class="copyright">&copy; Copyright 2017, <?php echo get_bloginfo('name'); ?> All Rights Reserved</p>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>