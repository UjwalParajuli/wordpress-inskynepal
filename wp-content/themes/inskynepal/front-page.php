<?php get_header(); ?>
<main>
<!--Hero Section starts-->
<section id="hero-section" style="background-image: url('<?php echo get_option('inskynepal_landing_page_image_2'); ?>');">
    <img src="<?php echo get_option('inskynepal_landing_page_image_3'); ?>" class="hero-cloud">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 id="value-prop">
                                <?php echo get_option('inskynepal_value_proposition');?>
                            </h1>
                        </div>
                        <div class="col-md-5 offset-md-1">
                            <img src="<?php echo get_option('inskynepal_landing_page_image_1');?>" alt="Skydiver" class="w-100">
                        </div>
                    </div>
                </div>
            </section>
            <!--Hero Section ends-->

            <!--Package Section starts-->
            <section id="packages" class="landing-section">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1-heli.png" class="fla-img fla-top-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="landing-title">
                                <div class="divider">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/skydiver_svg.svg" class="header-bg">
                                    </figure>                                    
                                </div>

                                <h2>Choose to jump from <br />2 different destinations</h2>

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud.png" class="cloud">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-md-center">
                        <?php $args = array(
                            'post_type' => 'packages'
                        );
                        $packages = new WP_Query($args);
                        while($packages->have_posts()): $packages->the_post();
                        ?>
                        <div class="col-md-4">
                            <div class="package-box">
                                <figure>
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                </figure>

                                <div class="package-desc">
                                    <strong><?php the_title(); ?></strong>
                                    <div class="package-info">
                                        <div class="time">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/clock.svg">
                                            <?php echo get_post_meta($post->ID, '_package_time_value_key', true); ?>
                                        </div>
                                        <div class="altitude">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/extreme-skydiving.svg">
                                            <?php echo get_post_meta($post->ID, '_package_height_value_key', true); ?>
                                        </div>
                                    </div>
                                    <hr>
                                </div>

                                <div class="pricing">
                                    <div class="row">
                                        <div class="col">
                                            <span>Package starts from</span>
                                            <strong><?php echo get_post_meta($post->ID, '_package_price_value_key', true); ?></strong>
                                        </div>
                                        <div class="col">
                                            <a href="<?php the_permalink(); ?>" class="insky-btn">View Package</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
            <!--Package Section ends-->

            <!--Features Section starts-->
            <section id="features" class="landing-section pt-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2-bag.png" class="fla-img fla-bag">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="landing-title">
                                <div class="divider">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/skydiver_svg.svg" class="header-bg">
                                    </figure>                                    
                                </div>

                                <h2>Why you can trust us?</h2>
                                
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud.png" class="cloud">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 pb-3 order-md-1">
                            <strong>#1</strong>
                            <h3>Experienced Pilots</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="col-md-4 pb-3 order-md-3">
                            <strong>#2</strong>
                            <h3>Tested Equipments</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="col-md-4 pb-3 order-md-4">
                            <strong>#3</strong>
                            <h3>Reasonable Price</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="col-md-4 order-md-5"></div>
                        <div class="col-md-4 pb-3 order-md-6">
                            <strong>#4</strong>
                            <h3>Breath-taking View</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="col-md-4 order-md-2">
                            <figure class="position-relative">
                                <div class="paragliding-anim">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sky_bg.svg" class="w-100 position-absolute">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sky_para.png" class="w-100 position-absolute">
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
            <!--Features Section ends-->


            <!--Reviews Section starts-->
            <section id="reviews" class="landing-section">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/3-goggles.png" class="fla-img fla-goggles">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="landing-title">
                                <div class="divider">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/skydiver_svg.svg" class="header-bg">
                                    </figure>                                    
                                </div>

                                <h2>Words from our <br/> satisfied customers</h2>
                                
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloud.png" class="cloud">
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-md-center mb-4">
                        <?php
                            $args = array(
                                'post_type' => 'reviews',
                                'posts_per_page' => 2
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

                    <div class="text-center">
                        <a href="https://www.inskynepal.com/all-reviews" class="text-btn">See all reviews</a>
                    </div>
                    
                </div>
            </section>
            <!--Reviews Section ends-->


            <!--Video Section starts-->
            <section id="video" class="landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>A picture is worth a thousand words <br/>while a video is worth a million</h2>

                            <p>Still not sure about jumping with us? Take a look at our video. It might change your mind.</p>

                            <div class="video-frame">
                                <iframe src="<?php echo esc_attr( get_option('inskynepal_video_link') ); ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Video Section ends-->

            <!--Final CTA Section starts-->
            <section id="final-cta" class="landing-section pt-md-0">
                <strong>
                    So are you ready to fly freeeeee?
                </strong>
                <a href="https://www.inskynepal.com/booking" class="insky-btn">Book my jump now!</a>
            </section>
            <!--Final CTA Section ends-->
<?php get_footer(); ?>