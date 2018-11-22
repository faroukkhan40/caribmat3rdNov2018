
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CaribbeanMathAcademy
 */

get_header();
?>
   <main id="primary" class="content-area">	

	      
          this is front-page eing displayed
		<?php
		while ( have_posts() ) : the_post();
			

			get_template_part( 'template-parts/content', "front_page" );

			the_post_navigation();

			

		endwhile; // End of the loop.
		?>
         		
	</div><!-- #primary -->

<?php

get_footer();