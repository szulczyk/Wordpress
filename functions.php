<?php
	function reg_mymenu() {
	  register_nav_menu('header-menu',__( 'Menu główne' ));
	}
	add_action( 'init', 'reg_mymenu');
	
	
	function themename_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}

	function pagination() {
    
    global $wp_query;
    
    if ($wp_query->max_num_pages > 1) { echo '<p class="pages" role="navigation">' . paginate_links( array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_text' => __('« '),
        'next_text'    => __(' »'),
    ) ) . '</p>'; }
}