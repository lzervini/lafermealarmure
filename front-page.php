<?php get_header(); ?>

<?php
 	if ( have_posts() ) :
 		while ( have_posts() ) : 
			the_post();
			the_content('');
			echo do_shortcode( '[trustindex no-registration=google]' ); 
			get_template_part('template-parts/services.php', 'services');
		endwhile;
	else :
			get_template_part( 'template-parts/content', 'none' );

 	endif;

 ?>

<?php get_footer(); ?>