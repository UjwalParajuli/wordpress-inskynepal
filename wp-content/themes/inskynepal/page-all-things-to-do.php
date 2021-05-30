<?php get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
?>
<main>
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

    <article>
    <section class="insky-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <p class="lh-180 mb-5">
                                <?php the_content(); ?>
                            </p>                            
                        </div>
                    </div>

                    <?php
                            $args = array(
                                'post_type' => 'things-to-do'
                            );
                            $reviews = new WP_Query($args);
                            while($reviews->have_posts()): $reviews->the_post(); 
                        ?>
                    <div class="team-single">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="w-100">
                            </div>    
                            <div class="col-md-8">
                                <strong class="name"><?php the_title(); ?></strong>
                                <p class="description">
                                    <?php the_content(); ?> 
                                </p>
                                <ul class="things-info">
                                    <li><strong>Highlights: </strong><?php echo get_post_meta($post->ID, '_things_to_do_highlights_value_key', true); ?></li>
                                    <li><strong>Best Time to Visit: </strong><?php echo get_post_meta($post->ID, '_things_to_do_best_time_value_key', true);  ?></li>
                                    <li><strong>Price Details: </strong><?php echo get_post_meta($post->ID, '_things_to_do_price_value_key', true); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <hr class="thin-hr"/>
                        <?php endwhile; wp_reset_postdata(); ?>
                    <div class="row">
                        <div class="col-12">
                            <p>Note: There are more activity that can be performed for more detail information as well as to do the above mentioned activity the customer can contact us by any medium possible.</p>
                        </div>
                    </div>
    
    </article>
                </div>
    </section>



<?php 
get_footer();
?>