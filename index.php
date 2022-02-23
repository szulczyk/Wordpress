<?php get_header(); ?>
	
	<div id="main-menu">
		<a id="close">X</a>
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</nav>
	</div>

	<div class="banner">
	
		<a id="burger"></a>
	
		<h1><?php echo get_bloginfo('name') ?></h1>
		
	</div>
	
	<div class="content">
			
		<div class="container">
		
			<div class="info">
					
				<img class="profile" src="<?php echo get_stylesheet_directory_uri(); ?>/img/profile.png" alt="0" />
				<h1><?php echo get_bloginfo('description') ?></h1>
				<h2>muslimmahin@gmail.com</h2>
				
			</div>
			
		</div>
			
		<div class="blog-area">
			
			<div class="container">
			
				<div class="left-col">
					
					<?php get_template_part('content'); ?>
					
				</div>
					
				<div class="right-col">
				
					<?php get_sidebar(); ?>
					
				</div>
					
			</div>
	
		</div>
	
	</div>
	
<?php get_footer(); ?>
























