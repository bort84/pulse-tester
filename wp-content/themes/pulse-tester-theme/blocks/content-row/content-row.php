<?php while ( have_rows('content_row') ) : the_row();

	$show_section = get_sub_field('show_section');
	$section_header = get_sub_field('section_header');
	$text = get_sub_field('text');
    $image_ID = get_sub_field('image');
	$image = wp_get_attachment_image_url($image_ID, 'full');
    $background_image_ID = get_sub_field('background_image');
	$background_image = wp_get_attachment_image_url($background_image_ID, 'full');

    if ($background_image) {
        $background_image = ' style="background: url('.$background_image.') no-repeat center center; background-size: cover;"';
    } else {
        $background_image = '';
    }

	if (true == $show_section) { ?>
		<section class="content-module content-row"<?php echo $background_image; ?>>
			<div>
				<div>
					<div class="content">
						<h2><?php echo $section_header; ?></h2>
                		<?php echo $text; ?>
					</div>

                	<figure><img src="<?php echo $image; ?>" alt="image"></figure>
				</div>
			</div>
		</section>
	<?php } else {
		if(is_admin()) { ?>
			<div class="hidden-warning">
				<p><strong>Content Row</strong> block is hidden on the front end.</p>
			</div>
		<?php }
	} ?>
<?php endwhile; ?>