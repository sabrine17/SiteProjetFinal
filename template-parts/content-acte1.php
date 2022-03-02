<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package siteformation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header"> 
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-acte1">', '</h1>' );
		else :
			the_title( '<h2 class="entry-acte1"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
		
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php siteformation_post_thumbnail(); ?>
	<section id="banniere2">
		<div class="conteneur2">
		<div class="petitconteneur2">

			
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'siteformation' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

	
		?>

</div>
		</div>
	</section>


	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
