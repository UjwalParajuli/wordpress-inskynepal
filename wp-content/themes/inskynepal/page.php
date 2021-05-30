<?php 

    get_header();
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

        <section class="insky-section">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <article>
                            <?php the_content(); ?>
                        </article>
                    </div>
                </div>
            </div>
        </section>


<?php
        } // end while
    } // end if

    get_footer();
?>