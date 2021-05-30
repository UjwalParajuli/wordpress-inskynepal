<?php get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
?>
<main class="reviews-page">
<section class="hero-mini" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?php echo get_the_title(); ?></h1>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
    </section>
    <?php
    } // end while
} // end if
?>

<section class="insky-section">
                <div class="container">
                    <div class="row row-eq-height justify-content-md-center mb-4">
                    <?php
                            $args = array(
                                'post_type' => 'reviews'
                            );
                            $reviews = new WP_Query($args);
                            while($reviews->have_posts()): $reviews->the_post(); 
                        ?>
                        <div class="col-md-5">
                            <div class="reviews-single">
                                <div class="quote">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/double-quotes.svg">
                                </div>
                                <strong><?php the_excerpt(); ?></strong>
                                <p><?php the_content(); ?></p>
                                <span>- <?php the_title(); ?></span>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
</section>



<?php get_footer(); ?>