<?php while ( have_rows('text') ) : the_row();

	$show_section = get_sub_field('show_section');
	$section_header = get_sub_field('section_header');
	$text = get_sub_field('text');

	if (true == $show_section) { ?>
		<section class="content-module text">
			<div>
				<h2><?php echo $section_header; ?></h2>
                <?php echo $text; ?>
			</div>
		</section>
	<?php } else {
		if(is_admin()) { ?>
			<div class="hidden-warning">
				<p><strong>Text</strong> block is hidden on the front end.</p>
			</div>
		<?php }
	} ?>
<?php endwhile; ?>