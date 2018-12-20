<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
      

	<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu"
			 aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'CaribbeanMathAcademy' ); ?></button>
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
		
</nav><!-- #site-navigation -->
