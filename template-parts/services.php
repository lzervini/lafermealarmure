<?php 

$icone    = get_sub_field('icone_service', 'infos');
$title    = get_field('titre_services', 'infos');
$text    = get_field('texte_services', 'infos');

if( have_rows( 'services', 'infos' ) ): ?>
<div class="essai">
  <?php while(have_rows('services', 'infos')): the_row(); ?>
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

