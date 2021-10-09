<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<?php
	global $page, $paged;
	$title  = '';
	$title .= wp_title('|', false, 'right');
	$title .= get_bloginfo('name');
	$site_description = get_bloginfo('description', 'display');
	if ($site_description && (is_home() || is_front_page())) {
		$title .= ' | ' . $site_description;
	}
	if ($paged >= 2 || $page >= 2) {
		$title .= ' | ' . sprintf(__('Page %s', PADD_THEME_SLUG), max($paged, $page));
	}
?>
<title><?php echo $title; ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic'>
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="container" class="hfeed">

	<div id="header-wrap">
		<div id="header">
			<div id="branding">
				<h1 id="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<h2 id="site-description"><?php bloginfo('description'); ?></h2>
			</div><!-- #branding -->
			<?php the_widget('Padd_Theme_Widget_SocialNetwork', null, null); ?>
		</div><!-- #header -->
	</div><!-- #header-wrap -->

	<div id="menubar-wrap">
		<div id="menubar">
			<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container_class' => 'menu'
				));
				the_widget('WP_Widget_Search', null, null);
			?>
		</div><!-- #menubar -->
	</div><!-- #menubar-wrap -->
	
	<?php $slideshow = Padd_Option::get('slideshow_enable') == '1' ? true : false; ?>
	<?php if (is_home() && $slideshow) : ?>
	<div id="slideshow-wrap">
		<div id="slideshow">
			<?php padd_theme_post_slideshow() ?>
		</div><!-- #slideshow -->
	</div><!-- #slideshows-wrap -->
	<?php endif; ?>

	<div id="main-wrap">
		<div id="main">