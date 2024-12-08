<?php get_header(); ?>

<section id="single-service" class="mt-md-11 mt-lg-8">
    <!-- Page Heading -->
    <div class="heading text-center py-5 bg-dark text-white"
        style="background-image:url('<?php the_post_thumbnail_url('large'); ?>')">
        <h1><?php the_title(); ?></h1>
        <p class="breadcrumb"><?php the_breadcrumb(); // Replace with a breadcrumb plugin or custom code ?></p>
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <?php
                // Start the Loop
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile;
                else : ?>
                <p>No content found.</p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php
get_template_part('template-parts/homepage', 'why-choose-us');
get_template_part('template-parts/homepage', 'contact');
?>

<?php get_footer(); ?>