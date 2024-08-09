<?php while ( have_rows('hero') ) : the_row();

	$show_section = get_sub_field('show_section');
	$title = get_sub_field('title');
	$subtitle = get_sub_field('subtitle');
	$background_video_mp4 = get_sub_field('background_video_mp4');
	$background_video_mov = get_sub_field('background_video_mov');
	$background_video_ogv = get_sub_field('background_video_ogv');
	$background_video_webm = get_sub_field('background_video_webm');


	if ('' != $title) {
		$title = $title;
	} else {
		$title = get_the_title();
	}

	if (true == $show_section) { ?>

		<section class="hero">
			<?php if ($background_video_mp4 || $background_video_mov || $background_video_ogv || $background_video_webm) { ?>
				<div class="video-container">
				<video autoplay muted loop>
					<?php if ($background_video_mp4) { ?><source src="<?php echo $background_video_mp4; ?>" type="video/mp4"><?php } ?>
					<?php if ($background_video_mov) { ?><source src="<?php echo $background_video_mov; ?>" type="video/mov"><?php } ?>
					<?php if ($background_video_ogv) { ?><source src="<?php echo $background_video_mp4; ?>" type="video/ogg"><?php } ?>
					<?php if ($background_video_webm) { ?><source src="<?php echo $background_video_mp4; ?>" type="video/webm"><?php } ?>
					Your browser does not support the video tag.
				</video>
				</div>
			<?php } ?>
			<div class="content">
				<div class="title">
					<div>
						<h1><?php echo $title; ?></h1>
						<h2><?php echo $subtitle; ?></h2>
					</div>
				</div>

				<div class="graphic">
					<div>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-logo.png" alt="">
						<span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero-logo-date.png" alt=""></span>
					</div>
				</div>
			</div>
			<div class="scroll">Scroll down for more</div>
		</section>
	<?php } else {

		if(is_admin()) { ?>
			<div class="hidden-warning">
				<p><strong>Hero</strong> block is hidden on the front end.</p>
			</div>
		<?php }
	} ?>
<?php endwhile; ?>