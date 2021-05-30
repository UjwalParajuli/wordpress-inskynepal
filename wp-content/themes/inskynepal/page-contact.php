<?php get_header(); ?>
<main class="contact-page">
<section class="hero-mini" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Contact Us</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, placeat! Qui quaerat eos temporibus aspernatur cupiditate minus! Ea incidunt eligendi vitae enim, praesentium nostrum odit, cupiditate velit a facilis magnam?</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="insky-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h2>Other ways to connect</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum distinctio ut molestias harum in dicta sapiente id.</p>

                            <div class="contact-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/map-marker.svg">
                                                </td>
                                                <td>
                                                    <strong>Address</strong>
                                                    <span><?php echo get_option('inskynepal_address'); ?></span>
                                                </td>
                                            </tr>
                                        </table> 
                                    </div>
                                    <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/clock_blue.svg">
                                                </td>
                                                <td>
                                                    <strong>Hours</strong>
                                                    <span>Sun-Sat<br/>10am - 8pm</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone-call.svg">
                                                </td>
                                                <td>
                                                    <strong>Phone</strong>
                                                    <span><?php echo get_option('inskynepal_phone'); ?></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/email.svg">
                                                </td>
                                                <td>
                                                    <strong>Email</strong>
                                                    <span><?php echo esc_attr( get_option('inskynepal_email') ); ?></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <h2>Send us a message</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <?php echo do_shortcode('[contact-form-7 id="50" title="Contact form 1" html_class="insky-form"]'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section id="map">
                <iframe src="<?php echo esc_attr( get_option('inskynepal_googlemap_link') ); ?>" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </section>
<?php get_footer();?>