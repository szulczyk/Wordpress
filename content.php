<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
?>

<div class="post wrapper">

	<div class="postcontent">
	
		<a class="category"><?php the_category();?></a>
		<div class="dot"></div>
		<span class="date"><?php the_date('j F Y');?></span>
		<?php the_title('<h1>', '</h1>');?>
		<?php the_content();?>
		
	</div>
	
</div>

<?php 
		} 
	}

pagination();
?>