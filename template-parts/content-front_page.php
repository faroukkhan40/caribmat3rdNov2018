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
			
	   		<header class="entry-header">
				Header for slider and captions
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			

       <!----------------------------------- Page-content------------------------------------- -->
       <!-------------------------------------contains 3 custom widgetize areas------------------------------------------------ -->
		<!----------------------------------- Page-content------------------------------------- -->
       <!-------------------------------------contains 3 custom widgetize areas------------------------------------------------ -->
	   <section id="frontpage" class="widget-area">
			
			    
			<div class="frontpage-widget">

					<?php if ( is_active_sidebar( 'self-test' ) ) : ?>
							
								<?php dynamic_sidebar( 'self-test' ); ?>
							
						<?php endif; ?>

			</div><!-- .widget-area -->	
	  


		   
			<div class="frontpage-widget" >

						<?php if ( is_active_sidebar( 'past-papers' ) ) : ?>
							
								<?php dynamic_sidebar( 'past-papers' ); ?>
							
						<?php endif; ?>

			</div><!-- .widget-area -->
		 
				
		 
			<div class="frontpage-widget">

						<?php if ( is_active_sidebar( 'video-lessons' ) ) : ?>
							
								<?php dynamic_sidebar( 'video-lessons' ); ?>
							
						<?php endif; ?>

			</div><!-- .widget-area -->			

				

</section><!-- .End frontpage-content-wrapper -->


		
		
		
		


		<!----------------------------------- Page-footer------------------------------------- -->
        <!----------------------------------- ------------------------------------------------ -->
		<footer class="entry-footer">
			   Footer for customer reviews
			   <?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
			?>		   
			
		</footer><!-- .entry-footer -->
		  
		  
		   
		


