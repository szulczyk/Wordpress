<div class="sidebar">	
	<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-primary' ) ) : ?>
			<aside class="search wrapper">
				<?php get_template_part('search'); ?>
			</aside>
			<aside class="tags wrapper">
				<?php get_template_part('tags'); ?>
			</aside>
			<aside class="newsletter wrapper">
				<?php get_template_part('newsletter'); ?>
			</aside>
	   <?php endif; ?>
</div>