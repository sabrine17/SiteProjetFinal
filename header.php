<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siteformation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'siteformation' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$siteformation_description = get_bloginfo( 'description', 'display' );
			if ( $siteformation_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $siteformation_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
		<button class='"menu-toggle"'  onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
     		<svg class="essai1" width="30" height="30" viewBox="0 0 100 100">
      	 	<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
       		<path class="line line2" d="M 20,50 H 80" />
        	<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
      		</svg>

			  
    		</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->





<!--
-----BANNIERE 2--------------------
<section id="banniere2">
	<div class="conteneur2">
	<div class="petitconteneur2">
	<ul><li>Gameplay</li></ul>
	<ul><li>Mécanique</li></ul>
	<ul><li>Compétence de joueur</li></ul>
	<ul><li>Inputs</li></ul>
	<ul><li>Paramètres atomiques</li></ul>
	<ul><li>Ingrédient et ld pattern</li></ul>
	<ul><li>Signes et feedback</li></ul>
	</div>	
	<div class="petitconteneurs2">
		<p class="expJeu">Expérience de jeu</p>
		<p class="listeJeu">Liste des éléments nécessaire pour la création d'une bonne expérience de jeu pour les joueurs.</p>
	</div>	
	</div>
	</div>
	<br>
</section>

		-->


<!--BANNIERE 3-------------------------
<p class="titreconteneur3">Compétences mentales et inputs</p>

<section id="banniere3">

	<div class="conteneur3">

		<div class="petitconteneur4">
		<p>Mémorisation</p>
		 <figcaption>
   		<h3>Mémorisation</h3>
    	<p>Weekends don't count unless you spend them doing something completely pointless.</p>
  		</figcaption>
		</div>
		<div class="petitconteneur5">
		<p>Logique</p>
		 <figcaption>
		<h3>Logique</h3>
    	<p>Weekends don't count unless you spend them doing something completely pointless.</p>
  		</figcaption>
		</div>
		<div class="petitconteneur6">
		<p>Sens de l'observation</p>
		 <figcaption>
		<h3>Sens de l'observation</h3>
    	<p>Weekends don't count unless you spend them doing something completely pointless.</p>
  		</figcaption>
		</div>
		</div>
		<button class="button3">
		<div>
			<a href="#banniere4"class="textButton2">Explorer d'autres compétences</a>
		</div>
		</button>
	
</section>
		-->



<!--BANNIERE 4--------------------------

<p class="titreconteneur4">Compétences sociales et inputs</p>
<section id="banniere4">

	<div class="conteneur4">

		<div class="petitconteneur7">
		<p>Face à face</p>
		</div>
		<div class="petitconteneur8">
		<p>Communication en ligne</p>
		</div>
		<div class="petitconteneur9">
		<p>Réalité virtuelle</p>
		</div>
		</div>
		<button class="button4">
		<div>
			<a href="#banniere5" class="textButton2">Explorer d'autres compétences</a>
		</div>
		</button>
	
</section>
<p class="titreconteneur4">Compétences sociales et inputs</p>
<section id="banniere4">
<div class="conteneur4">
<figure class="petitconteneur7"><figcaption>
<h3>Face à face</h3>
Weekends don't count unless you spend them doing something completely pointless.

</figcaption><a href="#"></a></figure>
<figure class="petitconteneur8">
<figcaption>
<h3>Communication en ligne</h3>
I'm killing time while I wait for life to shower me with meaning and happiness. -

</figcaption>  <a href="#"></a></figure>
<figure class="petitconteneur9">
<figcaption>
<h3>Réalité virtuelle</h3>
The only skills I have the patience to learn are those that have no real application in life.

</figcaption>  <a href="#"></a></figure>
</div>
<button class="button4">
<div>
			<a href="#banniere5" class="textButton2">Explorer d'autres compétences</a></div>
</button>

</section>
		-->

<!--BANNIERE 5--------------------------
<p class="titreconteneur5">Compétences physiques et inputs</p>
<section id="banniere5">

	<div class="conteneur5">

		<div class="petitconteneur9">
		<p>Clavier/Souris</p>
		</div>
		<div class="petitconteneur10">
		<p>Tactile</p>
		</div>
		<div class="petitconteneur11">
		<p>Équilibre</p>
		</div>
		</div>
		<button class="button5">
		<div>
			<a href="#banniere1" class="textButton2">Explorer d'autres compétences</a>
		</div>
		</button>
	
</section>
	-->
<!--BANNIERE 6--------------------------
<p class="titreconteneur5">Compétences physiques et inputs</p>
<section id="banniere5">
<div class="conteneur5">
<figure class="petitconteneur8"><figcaption>
<h3>Face à face</h3>
Weekends don't count unless you spend them doing something completely pointless.

</figcaption><a href="#"></a></figure>
<figure class="petitconteneur9">
<figcaption>
<h3>Communication en ligne</h3>
I'm killing time while I wait for life to shower me with meaning and happiness. -

</figcaption>  <a href="#"></a></figure>
<figure class="petitconteneur11">
<figcaption>
<h3>Réalité virtuelle</h3>
The only skills I have the patience to learn are those that have no real application in life.

</figcaption>  <a href="#"></a></figure>
</div>


</section>
-->
<!--BANNIERE 6--------------------------
<p class="titreconteneur6">Aide-mémoire</p>
<section id="banniere6">

	<div class="conteneur6">

		<div class="petitconteneur12">
		<p>Le gameplay oriente l'univers du jeu.</p>
		</div>
		<div class="petitconteneur13">
		<p>La forme est l'expression d'un concept. Elle fournit des indications claires sur ses fonctions.</p>
		</div>
		<div class="petitconteneur14">
		<p>L'univers oriente le gameplay.</p>
		</div>
		</div>
		</div>
	
</section>

		-->

<!--BANNIERE 7--------------------------
<p class="titreconteneur7">Matrice de variétés</p>
<section id="banniere7">

	<div class="conteneur7">

		<div class="petitconteneur15">
		<p>Habiletés du personnage</p>
		</div>
		<div class="petitconteneur16">
		<p>Modificateurs d'espace & rythme</p>
		</div>
		<div class="petitconteneur17">
		<p>Interface utilisateur</p>
		</div>
		<div class="petitconteneur18">
		<p>Activités</p>
		</div>
		</div>
		
	
</section>
<div class="info">
		<img width="150" height="150" src="https://eddym8.sg-host.com/wp-content/uploads/2021/12/projetSab1-150x150.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy"><h1>Modélisation 3D</h1>	</div>








<div class="contenu displayed" id="desc-1298">
	<a class="close">☒</a>
		<div>
			<h2>Modélisation d’une statue</h2><img width="640" height="360" src="https://eddym8.sg-host.com/wp-content/uploads/2021/12/statue-3D-KevinLaRue-1024x576.jpg" class="attachment-large size-large wp-post-image" alt="" loading="lazy" srcset="https://eddym8.sg-host.com/wp-content/uploads/2021/12/statue-3D-KevinLaRue-1024x576.jpg 1024w, https://eddym8.sg-host.com/wp-content/uploads/2021/12/statue-3D-KevinLaRue-300x169.jpg 300w, https://eddym8.sg-host.com/wp-content/uploads/2021/12/statue-3D-KevinLaRue-768x432.jpg 768w, https://eddym8.sg-host.com/wp-content/uploads/2021/12/statue-3D-KevinLaRue.jpg 1280w" sizes="(max-width: 640px) 100vw, 640px"><!-- wp:paragraph -->
			<!--<p>Conception d'une statue crée par un étudiant de 3ème année avec le logiciel de Maya dans le cadre du cours de modélisation 3D.</p>
/wp:paragraph 	</div>	</div>
		-->




<!--BANNIERE 11--------------------------
<p class="titreconteneur11">La forme defini la fonction</p>
<section id="banniere11">

	<div class="conteneur11">

		<div class="petitconteneur19">
		<p>Visuels</p>
		<div class="miniconteneur19">
		</div>
		</div>
		<div class="petitconteneur20">
		<p>Sons</p>
		<div class="miniconteneur20">
		</div>
		</div>
		<div class="petitconteneur21">
		<p>Vibrations/toucher</p>
		<div class="miniconteneur21">
		</div>
		</div>
		<div class="petitconteneur22">
		<p>Odeurs</p>
		<div class="miniconteneur22">
		</div>
		</div>
		</div>
		<div class="contenu displayed>
			<a class="close">☒</a>
			<div>
			<h2>Modélisation d’une statue</h2><img width="640" height="360" src="https://eddym8.sg-host.com/wp-content/uploads/2021/12/statue-3D-KevinLaRue-1024x576.jpg" class="attachment-large size-large wp-post-image" alt="" loading="lazy" srcset="https://eddym8.sg-host.com/wp-content/uploads/2021/12/statue-3D-KevinLaRue-1024x576.jpg 1024w, https://eddym8.sg-host.com/wp-content/uploads/2021/12/statue-3D-KevinLaRue-300x169.jpg 300w, https://eddym8.sg-host.com/wp-content/uploads/2021/12/statue-3D-KevinLaRue-768x432.jpg 768w, https://eddym8.sg-host.com/wp-content/uploads/2021/12/statue-3D-KevinLaRue.jpg 1280w" sizes="(max-width: 640px) 100vw, 640px"><!-- wp:paragraph -->
			<!--<p>Conception d'une statue crée par un étudiant de 3ème année avec le logiciel de Maya dans le cadre du cours de modélisation 3D.</p>
/wp:paragraph 	</div>	</div>
	
</section>
		-->
	




<!--BANNIERE 12-------------------------
<p class="titreconteneur12">Deux types d'approche</p>

<section id="banniere12">

	<div class="conteneur12">

		<div class="petitconteneur23">
		
		</div>
		<div class="petitconteneur24">
		
		</div>
	
		
	
</section>
		-->



</div></div>




	</header><!-- #masthead -->
	<script>
        let burger = document.getElementById('burger')
        let bar1 = document.querySelector('#burger div:nth-of-type(1)')
        let bar2 = document.querySelector('#burger div:nth-of-type(2)')
        let bar3 = document.querySelector('#burger div:nth-of-type(3)')
    </script>
	