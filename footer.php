<?php

$adresse    = get_field('adresse', 'infos');
$adressezip = get_field('adresse_zipcode', 'infos');
$tel        = get_field('tel', 'infos');
$mail       = get_field('Email', 'infos');
$title 		= get_field('title-footer', 'infos');
$logoGite 	= get_field('gite-de-france', 'infos');
$rgpd 	= get_field('rgpd', 'infos');
$mentions 	= get_field('mentions_legales', 'infos');
$accessibilite 	= get_field('accessibilite', 'infos');
$plan	= get_field('plan_du_site', 'infos');
$lienFooter = get_field('bouton_footer', 'infos');

?>

</main>

		<footer class="-withoutMargin footer">
			<div class="flex">
				<div class="footer__logo">
				<p class="title-footer"><?php echo $title; ?></p><br>
					<img src="<?php echo $logoGite['url']; ?>" class="style-svg"/>
					</img>  
				</div>
		
				<nav class="footer__menu">
				<h3 class="footer__title">Navigation</h3>
					<?php wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'container'      => false,
					'menu_class'     => 'listUnstyled',
					'depth'          => 1
				) ); ?>
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
				  <div class="wp-block-button main-button">
					  <a class=" wp-block-button__link" href="<?php echo $lienFooter;?>" style="color:white">
						  Voir les chambres
				  </a>

				  </div>
				</div>
			</div>
		<hr>
		<div class=" footer_droit">
			<a href="<?php echo $rgpd; ?>">RGPD</a>
			<span>-</span>
			<a href="<?php echo $mentions; ?>">Mentions Légales</a>
			<span>-</span>
			<a href="<?php echo $accessibilite; ?>">Accessibilité</a>
			<span class="footerNone">-</span>
			<a href="<?php echo $plan; ?>">Plan du site</a>
		</div>
	  </footer>

	  <?php wp_footer(); ?>
  </body>
</html>