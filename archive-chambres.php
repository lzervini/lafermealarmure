<?php get_header(); ?>
<div class="card_all">

<?php
 	if ( have_posts() ) :
		while ( have_posts() ) : the_post();?>
		<article class="card_middle">
			<div class="card_top">
				<p> TEST</p>
			</div>
			<div class="card_bottom">
				<?php the_title( '<h2>', '</h2>' ); ?>
				<!-- <?php the_post_thumbnail( '' ); ?> -->
				<p ><?php echo get_the_excerpt(); ?></p>
				<div class="wp-block-button aligncetner main-button">
					<a class="wp-block-button__link" href="<?php the_permalink(); ?>"> Voir la chambre</a>
				</div>
			</div>
		</article>


	<?php	endwhile;
	endif;
 ?>
</div>

<?php get_footer(); ?>