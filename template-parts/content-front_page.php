<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CaribbeanMathAcademy
 */
?>


		
       <!--------------------------------------------Page-header------------------------------ -->
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->


       <!----------------------------------- Page-content------------------------------------- -->
       <!-------------------------------------contains 3 custom widgetize areas------------------------------------------------ -->
		<main class="frontpage-content-wrapper" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(150px, 1fr);grid-gap:1rem;">
			
			    
				        <div class="frontpage-widget-area" style="display:flex; flex-flow:column; border:2px solid black; margin:3px;">

								<?php if ( is_active_sidebar( 'self-test' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'self-test' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>

						</div><!-- .widget-area -->	
				  


				   	
						<div class="frontpage-widget-area" style="border:2px solid black;display:flex;flex-flow:column;border:2px solid black;margin:3px;">

									<?php if ( is_active_sidebar( 'past-papers' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'past-papers' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>

						</div><!-- .widget-area -->
				 	
							
				 	
						<div class="frontpage-widget-area" style="display:flex;flex-flow:column;border:2px solid black;">

									<?php if ( is_active_sidebar( 'video-lessons' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'video-lessons' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>

						</div><!-- .widget-area -->
					

							

           
    	   </main><!-- .End frontpage-content-wrapper -->


		<!----------------------------------- Page-footer------------------------------------- -->
        <!----------------------------------- ------------------------------------------------ -->
           <footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'math-cseccxc' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
		


