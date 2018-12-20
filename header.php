<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CaribbeanMathAcademy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'math-cseccxc' ); ?></a>

	


	
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
	

	<div id="content" class="site-content">

