<?php get_header(); ?>
<main>

	<?php if ( have_posts() ): ?>
		<section>
			<?php while ( have_posts() ) : the_post();

			$attachment_ID = get_post_thumbnail_id( get_the_ID() );
			$featured_image = wp_get_attachment_image( $attachment_ID, 'full', false, '' ); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<figure>
				<?php if ('' != $featured_image) { ?>
					<a href="<?php echo get_permalink(); ?>"><?php echo $featured_image; ?></a>
				<?php } else { ?>
					<a href="<?php echo get_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/default-image.png"></a>
				<?php } ?>
				</figure>
				<h2><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
				<?php the_excerpt(); ?>
				<?php echo get_the_author_link(); ?>
			</article>

			<?php endwhile; ?>
		</section>
	<?php else: ?>
		<section>
			<p>No Posts Found</p>
		</section>
	<?php endif; wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>