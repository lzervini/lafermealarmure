<?php 

if( have_rows( 'services', 'infos' ) ): ?>
<div class="services">
  <?php while(have_rows('services', 'infos')): the_row(); 
$icone    = get_sub_field('icone_service');
$title    = get_sub_field('titre_services');
$text    = get_sub_field('texte_services');?>
<div class="cardService">
  <img src="<?php echo $icone['url']; ?>"></img>  
<h2> <?php echo $title; ?></h2>
<p> <?php echo $text; ?></p>
</div>
<?php

endwhile;
endif;
?>


