<?php
/**
 * Displays header media
 *
 * @package Caribmath
 * @subpackage Caribmath
 * @since 1.0
 * @version 1.0
 * position: relative;text-align: center;
 * <div class="site-branding" style="position:absolute; bottom: 8px; left: 16px;">
 * grid-template-columns:4fr,2fr,2fr,3fr,6fr;
 */

?>
<div class="custom-header" style="position:relative;display:grid;width:2000px;">

		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
		</div>

		<div class="site-branding" style="position:absolute;grid-row:6;grid-column:1/6;">

				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

		</div><!-- .site-branding -->
		

</div><!-- .custom-header -->
