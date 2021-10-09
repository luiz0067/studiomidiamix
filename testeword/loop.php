<?php
	$title = the_title_attribute('echo=0');
	$title = !empty($title) ? $title : __('(untitled)', PADD_THEME_SLUG);
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
	<div class="entry-header">
		<div class="entry-thumbnail">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', PADD_THEME_SLUG), $title); ?>">
				<?php
					$padd_image_def = get_template_directory_uri() . '/styles/images/default-archive.png';
					if (has_post_thumbnail()) {
						the_post_thumbnail(Padd_Setup::get_image_name('archive'));
					} else {
						echo '<img class="image-thumbnail" alt="Default thumbnail." src="' . $padd_image_def . '" />';
					}
				?>
			</a>
		</div>
		<h2 class="entry-title">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', PADD_THEME_SLUG), $title); ?>">
				<?php
					$title = get_the_title();
					if (!empty($title)) {
						echo $title;
					} else {
						_e('(untitled)', PADD_THEME_SLUG);
					}
				?>
			</a>
		</h2>
	</div>
	<?php $type = get_post_type(); ?>
	<?php if ('post' == $type) : ?>
	<p class="meta">
		
		<span class="author-time">
			<?php echo __('by ', PADD_THEME_SLUG); the_author(); ?>, 
			<?php the_time(__('F j, Y', PADD_THEME_SLUG)); ?>
		</span>
		<span class="comment-cat">
			<span class="category">
			<?php the_category(', '); ?>
			</span>
			<a class="comments" href="<?php comments_link(); ?>"><?php echo get_comments_number(); ?></a>
		</span>
	</p>
	<?php endif; ?>
	<div class="entry-excerpt">
		<?php the_excerpt();?>
	</div>
</div>