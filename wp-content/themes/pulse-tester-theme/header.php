<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(get_browser_mobile_classes().' loading-js'); ?>>

	<?php jb_body_begin(); ?>

	<a class="skip-link screen-reader-text" href="#content">
		<?php _e( 'Skip to content', 'twentynineteen' ); ?>
	</a>

	<header class="<?php if (has_nav_menu('primary')) { ?> nav-active<?php } ?>">
		<div>
			<div class="upper">
				<?php get_template_part( 'components/primary-header-logo' ); ?>
				

				<?php if (has_nav_menu('primary')) { ?>
					<div class="hamburger-menu">
						<span class="bun top"></span>
						<span class="patty middle"></span>
						<span class="bun bottom"></span>
					</div>
				<?php } ?>
			</div>
			
			<?php if (has_nav_menu('primary')) {
				wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' =>'primary-nav'));
			} ?>
			<?php get_template_part( 'components/secondary-header-logo' ); ?>
		</div>
	</header>