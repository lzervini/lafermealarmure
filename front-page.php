<?php get_header(); ?>

<?php
 	if ( have_posts() ) :
 		while ( have_posts() ) : the_post();

 			the_title( '<h1 class="title -big">', '</h1>' );
 			the_content('');

 		endwhile;
 	endif;
 ?>

<?php get_footer(); ?>