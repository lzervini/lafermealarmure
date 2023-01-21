<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La ferme à l'armure</title>
</head>
<body>
<?php get_header(); ?>
 <?php
 	if ( have_posts() ) :
		while ( have_posts() ) : the_post();?>

				<?php the_content();?>
			<!-- </div> -->
			<?php get_template_part('template-parts','services');

		endwhile;
	endif;
 ?>
<?php get_footer(); ?>
</body>
</html>