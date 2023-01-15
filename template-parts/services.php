<?php

  $icone    = get_field('icone_service', 'infos');
  $title    = get_field('titre_services', 'infos');
  $text    = get_field('texte_services', 'infos');

?>

<img src="<?php echo $icone_service['url']; ?>" class="style-svg"/>
<p class="test">TEST</p>