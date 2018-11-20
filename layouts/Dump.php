<?php

$args = [
    'post_type'      => 'product',
    'posts_per_page' => 10,
];
$loop = new WP_Query($args);
while ($loop->have_posts()) {
    $loop->the_post();
    ?>
    <div class="entry-content">
        <?php the_title(); ?>
        <?php the_content(); ?>
    </div>
    
}

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
             single-self_test.php
		<?php
		while ( have_posts() ) :
			the_post();

            
            
                    the_title();
                    echo '<div class="entry-content">';
                            the_content();
                    echo '</div>';
               
			the_post_navigation();

			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidear();
get_footer();

