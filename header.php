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
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'siteformation' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->


<!-----BANNIERE 1 --------------------->
		

<section id="bannierePrincipale">
	<div class="conteneur1">
		<p class="soustitre1">Rational Game Design</p>
		<p class="soustitre2">Odyssey Game Creator</p>
		<button class="button1">
		<div>
			<a class="textButton1">NAVIGUER DANS MES APPRENTISSAGES</a>
		</div>
		</button>
	</div>
</section>

<!-------BANNIERE 2--------------------->
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




<!--BANNIERE 3--------------------------->
<p class="titreconteneur3">Compétences mentales et inputs</p>

<section id="banniere3">

	<div class="conteneur3">

		<div class="petitconteneur4">
		<p>Mémorisation</p>
		</div>
		<div class="petitconteneur5">
		<p>Logique</p>
		</div>
		<div class="petitconteneur6">
		<p>Sens de l'observation</p>
		</div>
		</div>
		<button class="button3">
		<div>
			<a class="textButton2">Explorer d'autres compétences</a>
		</div>
		</button>
	
</section>



<!--BANNIERE 4--------------------------->

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
			<a class="textButton2">Explorer d'autres compétences</a>
		</div>
		</button>
	
</section>



<!--BANNIERE 5--------------------------->
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
			<a class="textButton2">Explorer d'autres compétences</a>
		</div>
		</button>
	
</section>


<!--BANNIERE 6--------------------------->
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



</div></div>




	</header><!-- #masthead -->
