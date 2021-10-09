
<div id="fwa-wrap">
	<div id="fwa">
		<?php
			$args = array(
				'before_title' => '<h2 class="widget-title">',
				'after_title'  => '</h2>'
			);
		?>
		<div id="fwa-1" class="fwa-bar">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1')) : ?>
			<?php the_widget('Padd_Theme_Widget_Recent_Comments', null, $args); ?>
			<?php endif; ?>
		</div><!-- #fwa-1 -->

		<div id="fwa-2" class="fwa-bar">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2')) : ?>
			<?php the_widget('Padd_Theme_Widget_Tweets', array('number' => 4), $args); ?>
			<?php endif; ?>
		</div><!-- #fwa-2 -->

		<div id="fwa-3" class="fwa-bar">
			<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3')) : ?>
			<?php
				$inst = array(
					'title' => __('About', PADD_THEME_SLUG),
					'text'  => '
						<p>Etiam id orci at mauris suscipit sagittis. Pellentesque eu faucibus ipsum. Suspendisse magna dui, vulputate at eleifend ut, condimentum sit amet odio. Proin nec eros quam. Vestibulum hendrerit tempus interdumil. Mauris convallis quam eu est sosto elementum quels  accumsan. Nulla in ligula quis lorem sollicitudin male.</p>
						<p>Sed et mauris nunc. Vestibulum tempus augue sittol  mauris scelerisque eleifend. Nam ut purus dolor est. Aliquam pulvinar suscipit feugiat. Aenean a facilisis lorem.</p>
						<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
					',
				);
				the_widget('WP_Widget_Text', $inst, $args);
			?>
			<?php endif; ?>
		</div><!-- #fwa-3 -->

		<div class="clear"></div>

	</div><!-- #fwa -->
</div><!-- #fwa-wrap -->
