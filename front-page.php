<?php get_header(); ?>
<?php
 	if ( have_posts() ) :
 		while ( have_posts() ) : 
			the_post();?>
			<?php the_content('');
			echo do_shortcode( '[trustindex no-registration=google]' ); ?>
			<?php get_template_part('template-parts/services');?>
		<?php endwhile;
 	endif;

 ?>

<?php get_footer(); ?>