<?php 

/*
*  Query posts for a relationship value.
*  This method uses the meta_query LIKE to match the string "123" to the database value a:1:{i:0;s:3:"123";} (serialized array)
*/

$doctors = get_posts(array(
	'post_type' => 'post',//doctors
	'meta_query' => array(
		array(
			'key' => 'self-test', // (location) name of custom field
			'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
			'compare' => 'LIKE'
		)
	)
));

?>
<?php if( $post ): ?>
	<ul>
	<?php foreach( $post as $post): ?><!-- must be called post -->
		<?php 

		$lesson = get_field('lesson', $post->ID);//photo/lesson

		?>
		<li>
			<a href="<?php echo get_permalink( $post->ID ); ?>">
				<img src="<?php echo $lesson['url']; ?>" alt="<?php echo $lesson['alt']; ?>" width="30" />
				<?php echo get_the_title( $doctor->ID ); ?>
			</a>
		</li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>




<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
	'post_type'			=> 'self_test'
));

<?php if( $doctors ): ?>
							<ul>
							<?php foreach( $doctors as $doctor ): ?>
								<?php 

								$photo = get_field('photo', $doctor->ID);

								?>
								<li>
									<a href="<?php echo get_permalink( $doctor->ID ); ?>">
										<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" width="30" />
										<?php echo get_the_title( $doctor->ID ); ?>
									</a>
								</li>
							<?php endforeach; ?>
							</ul>
						<?php endif; ?>




if( $posts ): ?>
	
	<ul>
		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	
	<?php endforeach; ?>
	
	</ul>
	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>


<?php wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
		'menu_class'     => "nav navbar-nav", 
	) ); ?>

<button class="menu-toggle" aria-controls="primary-menu" 
	  aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'math-cseccxc' ); ?></button>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'menu-1', 'CaribbeanMathAcademy' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo CaribbeanMathAcademy_get_svg( array( 'icon' => 'bars' ) );
		echo CaribbeanMathAcademy_get_svg( array( 'icon' => 'close' ) );
		_e( 'Menu', 'CaribbeanMathAcademy' );
		?>
	</button>


<?php wp_nav_menu( array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
		'menu_class'     => "nav navbar-nav", 
	) ); ?>


<header id="masthead" class="site-header" >
		
		<?php if ( get_header_image() ) : ?>
				<div id="site-header">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
					</a>
				</div>
		<?php endif; ?>
	
		
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$math_cseccxc_description = get_bloginfo( 'description', 'display' );
			if ( $math_cseccxc_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $math_cseccxc_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'math-cseccxc' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',// (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented
				'menu_class'        => "nav navbar-nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
				'container'         => "", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
				'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
				'container_id'      => "", // (string) The ID that is applied to the container.
				'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
				'before'            => "", // (string) Text before the link markup.
				'after'             => "", // (string) Text after the link markup.
				'link_before'       => "", // (string) Text before the link text.
				'link_after'        => "",
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->




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