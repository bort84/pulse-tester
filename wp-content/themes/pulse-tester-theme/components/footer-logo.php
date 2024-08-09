<?php /* Parts > Footer Logo */ 

$footer_name = get_theme_mod( 'logo_footer_name', '');
$footer_link = get_theme_mod( 'logo_footer_url', '');
$footer_logo = get_theme_mod( 'logo_footer', '' );
$footer_logo_width = get_theme_mod( 'logo_footer_width', '' ); ?>

<?php if(!empty($footer_logo)) { ?>
<div class="footer-logo logo" style="width:<?php echo $footer_logo_width.'px'; ?>; height:auto;">
	<?php if(!empty($footer_link)) echo "<a id='footer-header-url' href='" . $footer_link . "'>"; ?>
		<img 
			id="footer-header-logo" 
			src="<?php echo wp_get_attachment_image_src($footer_logo, 'full')[0]; ?>" 
			itemprop="logo" 
			alt="<?php echo $footer_name; ?>" />
		<span id="footer-header-name" class="sr-only"><?php echo $footer_name; ?></span>
	<?php if(!empty($footer_link)) echo "</a>"; ?>
</div>
<?php } ?>