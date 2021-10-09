
<div id="secondary" class="sidebar">
	<?php
		$args = array(
			'before_title' => '<h2 class="widget-title">',
			'after_title'  => '</h2>'
		);
		if (!dynamic_sidebar('sidebar')) {
			the_widget('Padd_Theme_Widget_Post_Category_Tab', array('title' => __('Latest Reviews', PADD_THEME_SLUG)), $args);
		
			the_widget('Padd_Theme_Widget_Recent_Posts', array('title' => __('Latest News', PADD_THEME_SLUG)), $args);
			
			if (class_exists('VideoSidebarWidget')) {
				$inst = array(
					'title2'      => __('Featured Video', PADD_THEME_SLUG),
					'v_autoplay2' => false,
					'v_id2'       => 'SNKnkKM3Xps',
					'v_source'    => 'YouTube',
					'v_width2'    => '280',
					'v_height2'   => '200'
				);
				the_widget('VideoSidebarWidget', $inst, $args);
			} else {
				$inst = array(
					'title' => __('Featured Video', PADD_THEME_SLUG),
					'text'  => '<p>Please install the <a href="http://wordpress.org/extend/plugins/video-sidebar-widgets/" target="_blank">Video Sidebar Widgets Plugin</a>.</p>',
				);
				the_widget('WP_Widget_Text', $inst, $args);
			}
			
			if (class_exists('WP_Widget_Polls')) {
				the_widget('WP_Widget_Polls', array('title' => __('Polls', PADD_THEME_SLUG), 'poll_id' => 1), $args);
			} else {
				$inst = array(
					'title' => __('Polls', PADD_THEME_SLUG),
					'text'  => '<p>Please install the <a href="http://wordpress.org/extend/plugins/wp-polls/" target="_blank">WP Polls Plugin</a>.</p>',
				);
				the_widget('WP_Widget_Text', $inst, $args);
			}
			
			the_widget('WP_Widget_Archives'            , null                                                          , $args);
		}
	?>
</div>