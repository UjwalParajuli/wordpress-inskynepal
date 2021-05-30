<?php get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
?>
<main class="faq-page">
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
                <div class="col-12">
                <?php
                    $args = array(
                    'get' => 'all',
                    'hide_empty' => 1,
                    'parent' => 0
                    );
                    
                    $categories = get_categories( $args );
                    foreach ($categories as $category):
                        if($category->name == "Uncategorized") continue;
                        $args2 = array(
                            'post_type' => 'faq',
                            'posts_per_page' => 30,
                            'category_name' => $category->name
                        );
                        $faqs = new WP_Query($args2);
                        echo '<strong class="faq-header">'. $category->name .'</strong>';
                        while($faqs->have_posts()): $faqs->the_post(); 
                        ?>
                        <div class="faq-single">
                            <div class="heading">
                                <strong><?php the_title(); ?></strong>
                                <button class="toggle-faq">
                                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 512 512">
                                        <g data-name="&lt;Group&gt;">
                                        <polygon fill="#262626" points="256 217.463 403.785 365.248 439.141 329.893 256 146.752 72.859 329.893 108.215 365.248 256 217.463" data-name="&lt;Path&gt;"/></g>
                                    </svg>
                                </button>
                            </div>
                            
                            <p><?php the_content(); ?></p>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>

                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>