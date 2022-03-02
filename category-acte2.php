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

			<header class="page-header">
				<?php
			
				echo '<h1 class="titleActe2"> ACTE 2 </h1>';
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<!-- <div class="entry-content"> -->

			<div class="conteneurFutur">
			<?php
			/* Start the Loop */
			$precedent = 0;
			
			while ( have_posts() ) :
				the_post();
				get_the_title(); 
                get_template_part( 'template-parts/content', 'acte2' );
				
			endwhile;
            
			//the_posts_navigation();
            
            else :
                
                //get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<!-- </div> -->
	</main><!-- #main -->
	</div>
<?php

get_footer();
