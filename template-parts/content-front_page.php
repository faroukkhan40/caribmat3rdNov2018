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
            <div class="entry-content">
			    <ul>
				   <li style="float:left;clear:both;">	
				        <div class= "site-content.widget-area">

									<?php if ( is_active_sidebar( 'self-test' ) ) : ?>
									<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
										<?php dynamic_sidebar( 'self-test' ); ?>
									</div><!-- #primary-sidebar -->
									<?php endif; ?>

							</div><!-- .widget-area -->	
				  </li>	


				   <li style="float:right;margin:25px;">		
							<div class= "site-content.widget-area">

									<?php if ( is_active_sidebar( 'past-papers' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'past-papers' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>

							</div><!-- .widget-area -->
				 </li>	
							
				  <li style="float:right;">		
							<div class= "site-content.widget-area">

									<?php if ( is_active_sidebar( 'video-lessons' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'video-lessons' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>

							</div><!-- .widget-area -->
				 </li>	

							

           </ul>
    	   </div><!-- .End entry-content -->


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
		


