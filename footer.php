<?php

$adresse    = get_field('adresse', 'infos');
$adressezip = get_field('adresse_zipcode', 'infos');
$tel        = get_field('tel', 'infos');
$mail       = get_field('Email', 'infos');
$logoFooter = get_field('logo_pied-de-page', 'infos');


?>

</main>

		<footer class="flex -withoutMargin footer">

	    <div class="footer__logo">
            <p class="footer_text"> La ferme à l’armure</p>
            <img src="<?php echo $logoFooter['url']; ?>" class="style-svg"/>
            </img>  
	    </div>

	    <nav class="footer__menu">
	      <h3 class="footer__title">Navigation</h3>
	      <ul class="listUnstyled">
	        <li><a href="#">Accueil</a></li>
	        <li><a href="#">Les chambres</a></li>
	        <li><a href="#">Restauration</a></li>
	        <li><a href="#">La région</a></li>
	        <li><a href="#">Contact & accès</a></li>
	      </ul>
	    </nav>

	    <div class="footer__contact">
	      <h3 class="footer__title">Coordonnées</h3>
	      <address class="footer__address">
	        <?php echo $adresse; ?><br>
	        <?php echo $adressezip; ?><br>
            <a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?></a>
        <br><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
	      </address>
	    </div>

	    <div class="footer_reservation">
	      <p">Nous vous attendons !</p>
          
	    </div>
	  </footer>

	  <?php wp_footer(); ?>
  </body>
</html>