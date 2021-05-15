<?php
get_header();
?>
<div class="row">
	<div class="col-lg-9">
	<article class="content px-3 py-5 p-md-5">
	<?php 
		if( have_posts() ){
			while( have_posts() ){
				the_post();
				get_template_part('template-parts/content','page');
			}
		}
	?>
	
</article>
	</div>
	<div class="col-lg-3">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php 
get_footer();
?>
