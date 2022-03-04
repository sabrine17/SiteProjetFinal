<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package siteformation
 */

get_header();
?>

<!-----BANNIERE 1 --------------------->
		

<section id="bannierePrincipale">
	<div class="conteneur1">
		<p class="soustitre1">Rational Game Design</p>
		<p class="soustitre2">Odyssey Game Creator</p>
		<button class="button1">
		<div>
			<a href="http://localhost:8888/siteFormationSab/category/acte-1/" class="textButton1">NAVIGUER DANS MES APPRENTISSAGES</a>
		</div>
		</button>
	</div>
</section>

<!--
<div class="controller">
<img class="manette"> </img>
</div>-->

<div class="demo">
  <div class="perspective-container">
    <div class="card"></div>
  </div>
</div>

	</main><!-- #main -->

	



<?php

get_footer();



