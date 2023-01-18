<?php get_header(); ?>
<div class="card_all">

<?php
 	if ( have_posts() ) :
		while ( have_posts() ) : the_post();?>
		<article class="card_middle">
		<img class="img-card" src="<?php echo catch_that_image()?>"></img>
			<div class="card_text">
			<?php the_title( '<h2>', '</h2>' );?>
			<p><?php echo get_the_excerpt(); ?></p>
			<div class="wp-block-button aligncetner main-button flex-self-end">
					<a class="wp-block-button__link " href="<?php the_permalink(); ?>"> Voir la chambre</a>
				</div>
			</div>
		</article>


	<?php	endwhile;
	endif;
 ?>
</div>

<?php get_footer(); ?>