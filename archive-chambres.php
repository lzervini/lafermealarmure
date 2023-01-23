<?php get_header(); ?>
<div class="wp-block-cover">
	<span class="wp-block-cover__background has-white-background-color has-background-dim-20 has-background-dim"></span>
	<img class ="wp-block-cover__image-background wp-post-image" src="https://localhost/lafermealarmure/wp-content/uploads/2023/01/pexels-cottonbro-studio-4108807-1-1024x246.png" alt="" sizes="(max-width: 1500px) 100vw, 1500px">
	<div class="wp-block-cover__inner-container">
<p class="has-text-align-center bannerText has-text-color" style="">Les chambres</p>
</div>
</div>
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
<br>
<br>
<hr class="littleLine">
<div class="body-centered">
	<?php get_template_part('template-parts/services');?>
</div>


<?php get_footer(); ?>