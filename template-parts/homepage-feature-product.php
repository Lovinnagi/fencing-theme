<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fencing
 */

?>
<section class="bg-green text-white w-100 float-start py-7">
    <div class="container p-0">
        <div class=" ">

            <h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 text-center m-0">Featured Products</h2>
            <h3 class="text-uppercase text-white text-center m-0 mb-sm-4 px-sm-3">No project is too big or too small. We
                do it all.</h3>

            <div class="row mt-5">
                <?php

                    $args = array(
                        'post_type'      => 'service', 
                        'posts_per_page' => -1,     
                        'post_status'    => 'publish',
                        'order' => 'ASC',
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <a href="<?php the_permalink(); ?>" style="text-decoration:none;color:#fff;">
                        <?php if (has_post_thumbnail()) : ?>
                        <img class="w-100" src="<?php the_post_thumbnail_url('large'); ?>"
                            alt="<?php the_title_attribute(); ?>">
                        <?php else : ?>
                        <img class="w-100" src="<?php echo THEME_IMAGE_URL; ?>/placeholder.jpg" alt="Placeholder">
                        <!-- Fallback image -->
                        <?php endif; ?>
                        <h3 class="text-center p-3 fs-5"><?php the_title(); ?></h3>
                    </a>
                </div>
                <?php endwhile;
                    else : ?>
                <p class="text-center">No books found.</p>
                <?php endif;

                    // Reset Post Data
                    wp_reset_postdata();
                    ?>
            </div>


        </div>
    </div>
</section>