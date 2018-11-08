<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CaribbeanMathAcademy
 */


?>

	
	<?php
				$args = array( 'post_type' => 'self_test', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				
				while ( $loop->have_posts() ) : $loop->the_post();
					the_title();
					echo '<div class="entry-content self-test">';
						the_content();
					echo '</div>';
				endwhile;
				wp_reset_postdata();
				the_post_navigation();
					
?>
	
	
	
	