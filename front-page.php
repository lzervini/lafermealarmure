<?php get_header(); ?>

<?php
 	if ( have_posts() ) :
 		while ( have_posts() ) : the_post();

		 the_title( '<h1>', '</h1>' );
 			the_post_thumbnail( );
 			the_content('');
			  echo do_shortcode( '[trustindex no-registration=google]' ); 
			  echo '<h3>' . get_post_type() . '</h3>';
			  +			get_template_part( 'template-parts/services.php', get_post_type() );
 		endwhile;
 	endif;
 ?>

<?php get_footer(); ?>