<!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>
	  <meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet"> 

	  <?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<header class="header headroom">
		<div class="header__start">
		<?php 
	        if ( has_custom_logo() ) :
	          $logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) );
	      ?>
		<a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Logo de la ferme">
		<img src="<?php echo $logo[0]; ?>" class="style-svg"/>
				</a>
	      <?php endif; ?>
	</div>
	<div class="header__end">
	
	<button class="header__menuBtn menuBurger" aria-label="menu" aria-expanded="false" aria-controls="mainNav">
		  <span class="menuBurger__bar" aria-hidden="true"></span>
	  </button>

  
	<!-- Début du menu-->
	<nav class="header__menu menu" id="mainNav" aria-label="Menu principal">
	  <ul class="menu__list">
		<li class="menu__item"><a class="menu__link" href="/lafermealarmure/accueil.html">Accueil</a></li>
		<li class="menu__item"><a class="menu__link" href="/lafermealarmure/chambres.html">Les chambres</a></li>
		<li class="menu__item"><a class="menu__link" href="/lafermealarmure/la-region.html">La région</a></li>
		<li class="menu__item"><a class="menu__link" href="/lafermealarmure/contact.html">Contact & Accès</a></li>
		<li class="menu__item -btn"><a class="menu__link" href="/lafermealarmure/reserver.html">Réserver</a></li>
	  </ul>
	</nav>
	<!-- Fin du menu-->
  
  </div>

		</header>
		<main>