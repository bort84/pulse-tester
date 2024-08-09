<?php /* Parts > Primary Header Logo */ 

$primary_header_name = get_theme_mod( 'logo_primary_header_name', '');
$primary_header_link = get_theme_mod( 'logo_primary_header_url', '');
$primary_header_logo = get_theme_mod( 'logo_primary_header', '' );
$primary_header_logo_width = get_theme_mod( 'logo_primary_header_width', '' ); ?>

<?php if(!empty($primary_header_logo)) { ?>
<div class="primary-logo logo" style="width:<?php echo $primary_header_logo_width.'px'; ?>; height:auto;">
	<?php if(!empty($primary_header_link)) echo "<a id='primary-header-url' href='" . $primary_header_link . "'>"; ?>
		<img 
			id="primary-header-logo" 
			src="<?php echo wp_get_attachment_image_src($primary_header_logo, 'full')[0]; ?>" 
			itemprop="logo" 
			alt="<?php echo $primary_header_name; ?>" />
		<span id="primary-header-name" class="sr-only"><?php echo $primary_header_name; ?></span>
	<?php if(!empty($primary_header_link)) echo "</a>"; ?>
</div>
<?php } ?>