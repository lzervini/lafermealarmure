<?php 

if( have_rows( 'services', 'infos' ) ): ?>
<div class="essai">
  <?php while(have_rows('services', 'infos')): the_row(); 
$icone    = get_sub_field('icone_service');
$title    = get_sub_field('titre_services');
$text    = get_sub_field('texte_services');?>
  <img src="<?php echo $icone['url']; ?>"></img>  
<h2> <?php   echo $title; ?></h2>
<p> <?php echo $text; ?></p>
<?php
			

  echo $icone;
  echo $title;
  echo $text;
endwhile;
endif;
?>


