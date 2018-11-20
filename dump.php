

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