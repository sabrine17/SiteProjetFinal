<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package siteformation
 */

get_header();
?>

<main id="primary" class="site-main">
<?php if ( have_posts() ) : ?>


<section id="banniere6">

<div class="conteneur6">

<?php

while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', 'acte1' );

endwhile; ?>

<?php
the_posts_navigation();

else :
	
	get_template_part( 'template-parts/content', 'none' );
	

endif;
?>




</div>

</section>


</main> <!--#main -->


   </div>
 



<?php
get_sidebar();
get_footer();
