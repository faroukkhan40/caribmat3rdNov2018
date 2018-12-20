
<?php/**"border:2px solid black;margin:5px;background: #d9d9d9"
 * 
 * <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
		
	   <?php endif; ?>*/


#primary.content-area {
			float: left;
			width: 40%;
		}
<?php if ( is_active_sidebar( 'self-test' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'self-test' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>

                                    <?php if ( is_active_sidebar( 'past-papers' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'past-papers' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>

                                    <?php if ( is_active_sidebar( 'video-lessons' ) ) : ?>
										<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
											<?php dynamic_sidebar( 'video-lessons' ); ?>
										</div><!-- #primary-sidebar -->
									<?php endif; ?>