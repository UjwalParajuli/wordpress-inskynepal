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

    <section class="insky-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-5">
                            <article>
                                <?php echo get_the_content(); ?>
                            </article>                            
                        </div>
                    </div>

                    <?php
                            $args = array(
                                'post_type' => 'teams',
                                 'orderby' => 'date',
                                 'order'   => 'ASC'
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
                                    <span class="designation">
                                        <?php echo get_post_meta($post->ID, '_staff_designation_value_key', true); ?>
                                    </span>
                                    <?php echo get_the_content(); ?> 
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr class="thin-hr team-hr"/>
                        <?php endwhile; wp_reset_postdata(); ?>
                </div>
    </section>



<?php 
get_footer();
?>