</main>

        <!--Footer starts-->
        <footer>
            <div class="footer-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 mb-4 mb-md-0">
                            <strong>Insky Skydiving Nepal</strong>
                            <div class="contact-info">
                                <div class="row">
                                    <div class="col-12">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri().'/assets/img/icons/map-marker.svg'?>">
                                                </td>
                                                <td>
                                                    <span><?php echo get_option('inskynepal_address'); ?></span>
                                                </td>
                                            </tr>
                                        </table> 
                                    </div>
                                    <div class="col-12">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri().'/assets/img/icons/phone-call.svg'?>">
                                                </td>
                                                <td>
                                                    <span><?php echo get_option('inskynepal_phone'); ?></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-12">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri().'/assets/img/icons/email.svg'?>">
                                                </td>
                                                <td>
                                                    <span><?php echo esc_attr( get_option('inskynepal_email') ); ?></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4 mb-md-0">
                            <strong>Social Links</strong>
                            <div class="social-icons">
                                <div class="social-icon">
                                    <a href="<?php echo esc_attr( get_option('inskynepal_facebook_link') ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/icons/facebook.svg'?>" alt="Facebook" title="Facebook"></a>
                                </div>
                                <div class="social-icon">
                                    <a href="<?php echo esc_attr( get_option('inskynepal_instagram_link') ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/icons/instagram.svg'?>" alt="Instagram" title="Instagram"></a>
                                </div>
                            </div>
                            <strong>Recommended On:</strong>
                            <a href="<?php echo esc_attr( get_option('inskynepal_tripadvisor_link') ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/img/trip_advisor_final.jpg'?>" alt="Trip Advisor" title="Trip Advisor" class="trip-advisor"></a>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <strong>WeChat QR Code</strong>
                            <img src="<?php echo get_option('inskynepal_qrcode')?>" alt="QR Code" class="qr-code">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-2">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <span class="d-block d-md-inline">Copyright &copy; <?php echo date("Y"); ?>, In-Sky Skydiving Nepal, All Rights Reserved.</span> 
                            <span class="d-block d-md-inline">Site by <a href="https://sangambk.com.np" class="text-btn">Sheru Web Studio</a></span>
                        </div>
                    </div>
                </div>                
            </div>
        </footer>
        <!--Footer ends-->

        <button id="scroll-to-top" class="hidden">
            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 512 512">
                <g data-name="&lt;Group&gt;">
                <polygon fill="#ffffff" points="256 217.463 403.785 365.248 439.141 329.893 256 146.752 72.859 329.893 108.215 365.248 256 217.463" data-name="&lt;Path&gt;"/></g>
            </svg>
        </button>

        <?php wp_footer(); ?>
        
    </body>
</html>