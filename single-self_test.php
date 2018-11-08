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

	<div id="primary" class="content-area" style="border:2px solid purple;width:70%;float:left;clear:both;margin:2px;">
		<main id="main" class="site-main">
             single-self_test.php
		<?php
		while ( have_posts() ) : the_post();

			
			get_template_part( 'template-parts/content', get_post_type() );

           		

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		
	</div><!-- #primary -->
	
<?php
	
get_sidebar();
get_footer();
?>
