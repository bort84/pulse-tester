<?php /* Parts > Secondary Header Logo */ 

$secondary_header_name = get_theme_mod( 'logo_secondary_header_name', '');
$secondary_header_link = get_theme_mod( 'logo_secondary_header_url', '');
$secondary_header_logo = get_theme_mod( 'logo_secondary_header', '' );
$secondary_header_logo_width = get_theme_mod( 'logo_secondary_header_width', '' ); ?>

<?php if(!empty($secondary_header_logo)) { ?>
<div class="secondary-logo logo" style="width:<?php echo $secondary_header_logo_width.'px'; ?>; height:auto;">
	<?php if(!empty($secondary_header_link)) echo "<a id='secondary-header-url' href='" . $secondary_header_link . "'>"; ?>
		<img 
			id="secondary-header-logo" 
			src="<?php echo wp_get_attachment_image_src($secondary_header_logo, 'full')[0]; ?>" 
			itemprop="logo" 
			alt="<?php echo $secondary_header_name; ?>" />
		<span id="secondary-header-name" class="sr-only"><?php echo $secondary_header_name; ?></span>
	<?php if(!empty($secondary_header_link)) echo "</a>"; ?>
</div>
<?php } ?>