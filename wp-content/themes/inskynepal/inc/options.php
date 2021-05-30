<?php

    function inskynepal_options(){
        add_menu_page('In-Sky Nepal', 'In-Sky Nepal Options', 'administrator', 'inskynepal_options', 'inskynepal_adjustments',
         '', 20);

        add_submenu_page('inskynepal_options', 'Bookings', 'Bookings', 'administrator', 'inskynepal_bookings',
        'inskynepal_bookings');

    }
    add_action('admin_menu', 'inskynepal_options');

    function inskynepal_settings() {
        // Social Media and Video Links Group
        register_setting('inskynepal_options_links', 'inskynepal_facebook_link');
        register_setting('inskynepal_options_links', 'inskynepal_instagram_link');
        register_setting('inskynepal_options_links', 'inskynepal_tripadvisor_link');
        register_setting('inskynepal_options_links', 'inskynepal_video_link');
        register_setting('inskynepal_options_links', 'inskynepal_googlemap_link');

        // Contact Information Group
        register_setting('inskynepal_options_links', 'inskynepal_address');
        register_setting('inskynepal_options_links', 'inskynepal_phone');
        register_setting('inskynepal_options_links', 'inskynepal_email');
        register_setting('inskynepal_options_links', 'inskynepal_qrcode');

        //Background Images for Landing Page
        register_setting('inskynepal_options_links', 'inskynepal_landing_page_image_1');
        register_setting('inskynepal_options_links', 'inskynepal_landing_page_image_2');
        register_setting('inskynepal_options_links', 'inskynepal_landing_page_image_3');

        //Value Propostion
        register_setting('inskynepal_options_links', 'inskynepal_value_proposition');

    }
    add_action('init', 'inskynepal_settings');

    function inskynepal_adjustments() { ?>
        <div class="wrap">
            <?php settings_errors(); ?>
            <form action="options.php" method="post">
                <?php
                    settings_fields('inskynepal_options_links');
                    do_settings_sections('inskynepal_options_links');
                ?>
                <h1>Social Media, Video and Google Map Links</h1>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Facebook Link: </th>
                        <td>
                            <input type="url" size="50" name="inskynepal_facebook_link" value="<?php echo esc_attr( get_option('inskynepal_facebook_link') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Instagram Link: </th>
                        <td>
                            <input type="url" size="50" name="inskynepal_instagram_link" value="<?php echo esc_attr( get_option('inskynepal_instagram_link') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Trip Advisor Link: </th>
                        <td>
                            <input type="url" size="50" name="inskynepal_tripadvisor_link" value="<?php echo esc_attr( get_option('inskynepal_tripadvisor_link') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Video Link: </th>
                        <td>
                            <input type="url" size="50" name="inskynepal_video_link" value="<?php echo esc_attr( get_option('inskynepal_video_link') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Google Map Link: </th>
                        <td>
                            <input type="url" size="50" name="inskynepal_googlemap_link" value="<?php echo esc_attr( get_option('inskynepal_googlemap_link') ); ?>">
                        </td>
                    </tr>
                </table>

                <hr>               
                <h1>Contact Information</h1>

                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Address: </th>
                        <td>
                            <input type="text" size="50" name="inskynepal_address" value="<?php echo esc_attr( get_option('inskynepal_address') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Phone Number: </th>
                        <td>
                            <input type="text" size="50" name="inskynepal_phone" value="<?php echo esc_attr( get_option('inskynepal_phone') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Email: </th>
                        <td>
                            <input type="email" size="50" name="inskynepal_email" value="<?php echo esc_attr( get_option('inskynepal_email') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">QR Code: </th>
                        <td>
                            <img id="preview" src="<?php echo get_option('inskynepal_qrcode')?>">
                            <input type="button" class="button button-secondary" value="Upload QR Code" id="upload_qrcode_button"><input type="hidden" id="inskynepal_qrcode" name="inskynepal_qrcode" value="<?php echo esc_attr( get_option('inskynepal_qrcode') ); ?>">
                        </td>
                    </tr>
                </table>

                <hr>               
                <h1>Background Images for Landing Page</h1>
                
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Image 1: </th>
                        <td>
                            <img id="preview_landing_image_1" src="<?php echo get_option('inskynepal_landing_page_image_1')?>">
                            <input type="button" class="button button-secondary" value="Upload Landing Page Image 1" id="upload_landing_image_1_button"><input type="hidden" id="inskynepal_landing_page_image_1" name="inskynepal_landing_page_image_1" value="<?php echo esc_attr( get_option('inskynepal_landing_page_image_1') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Image 2: </th>
                        <td>
                            <img id="preview_landing_image_2" src="<?php echo get_option('inskynepal_landing_page_image_2')?>">
                            <input type="button" class="button button-secondary" value="Upload Landing Page Image 2" id="upload_landing_image_2_button"><input type="hidden" id="inskynepal_landing_page_image_2" name="inskynepal_landing_page_image_2" value="<?php echo esc_attr( get_option('inskynepal_landing_page_image_2') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Image 3: </th>
                        <td>
                            <img id="preview_landing_image_3" src="<?php echo get_option('inskynepal_landing_page_image_3')?>">
                            <input type="button" class="button button-secondary" value="Upload Landing Page Image 3" id="upload_landing_image_3_button"><input type="hidden" id="inskynepal_landing_page_image_3" name="inskynepal_landing_page_image_3" value="<?php echo esc_attr( get_option('inskynepal_landing_page_image_3') ); ?>">
                        </td>
                    </tr>
                </table>

                <hr>               
                <h1>Landing Page Value Proposition</h1>

                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Value Proposition: </th>
                        <td>
                            <input type="text" size="50" name="inskynepal_value_proposition" value="<?php echo esc_attr( get_option('inskynepal_value_proposition') ); ?>">
                        </td>
                    </tr>
                </table>

                <?php submit_button(); ?>

            </form>
        </div>


    <?php }

    function inskynepal_bookings(){?>
        <div class="wrap">
            <h1>Bookings</h1>
            <br>
            <form class="form-group" method='post' style="margin-bottom: -5px;">
                  Start Date <input class="form-group" type='date' class='dateFilter' name='dateFrom' value='<?php if(isset($_POST['dateFrom'])) echo $_POST['dateFrom']; ?>'>

                  End Date <input class="form-group" type='date' class='dateFilter' name='dateTo' value='<?php if(isset($_POST['dateTo'])) echo $_POST['dateTo']; ?>'>

                  <input type='submit' name='but_search' value='Search'>
            </form> 
            <br>
            <table class="wp-list-table widefat striped">
                <thead>
                    <tr>
                        <th class="manage-column">ID</th>
                        <th class="manage-column">Booked By</th>
                        <th class="manage-column">Phone</th>
                        <th class="manage-column">Photo and Video</th>
                        <th class="manage-column">Booked On</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once 'db_connect.php';
                        if(isset($_POST['dateFrom']) && isset($_POST['dateTo'])){
                            $dateFrom = $dateTo = "";
                            $dateFrom = date("Y-m-d", strtotime($_POST['dateFrom']));
                            $dateTo = date("Y-m-d", strtotime($_POST['dateTo']));

                            $qry = "select * from insky_bookings";
                            $result = mysqli_query($conn, $qry);
                            while($rows = mysqli_fetch_assoc($result)):
                                if (date("Y-m-d", strtotime($rows['booked_on'])) >= $dateFrom && date("Y-m-d", strtotime($rows['booked_on'])) <= $dateTo) {
                            ?>

                                <tr>
                                    <td><?php echo $rows['booking_id']; ?></td>
                                    <td><a href="../wp-content/themes/inskynepal/divers.php?id=<?php echo $rows['booking_id']; ?>"><?php echo $rows['booked_by']; ?></a></td>
                                    <td><?php echo $rows['phone']; ?></td>
                                    <td><?php echo $rows['is_photo']; ?></td>
                                    <td><?php echo $rows['booked_on']; ?></td>
                                </tr>
                                <?php 
                                
                                }
                                ?>
                            <?php endwhile; ?>

                  <?php }
                        else{
                            $qry = "select * from insky_bookings";
                            $result = mysqli_query($conn, $qry);
                            while($rows = mysqli_fetch_assoc($result)):
                            ?>
    
                                <tr>
                                    <td><?php echo $rows['booking_id']; ?></td>
                                    <td><a href="../wp-content/themes/inskynepal/divers.php?id=<?php echo $rows['booking_id']; ?>"><?php echo $rows['booked_by']; ?></a></td>
                                    <td><?php echo $rows['phone']; ?></td>
                                    <td><?php echo $rows['is_photo']; ?></td>
                                    <td><?php echo $rows['booked_on']; ?></td>
                                </tr>
                                
                            <?php endwhile; ?>
                    <?php
                        }
                    ?>
                        
                       
                            
                </tbody>
            </table>
        
        </div>
<?php
    }

    
?>