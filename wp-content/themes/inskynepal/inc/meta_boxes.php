<?php
    // Setup Meta Box
    function inskynepal_meta_box(){
        add_meta_box('total_dive_time', 'Total Dive Time', 'inskynepal_package_time_callback', 'packages', 'side' );
        add_meta_box('total_dive_height', 'Total Height', 'inskynepal_package_height_callback', 'packages', 'side' );
        add_meta_box('total_dive_price', 'Starting Package Price', 'inskynepal_package_price_callback', 'packages', 'side' );
        add_meta_box('things_to_do_highlights', 'Highlights', 'inskynepal_things_to_do_highlights_callback', 'things-to-do' );
        add_meta_box('things_to_do_best_time', 'Best Time to Visit', 'inskynepal_things_to_do_best_time_callback', 'things-to-do' );
        add_meta_box('things_to_do_price', 'Price Details', 'inskynepal_things_to_do_price_callback', 'things-to-do' );
        add_meta_box('staff_designation', 'Staff Designation', 'inskynepal_staff_designation_callback', 'teams', 'side' );

    }
    add_action('add_meta_boxes', 'inskynepal_meta_box' );

    // PACKAGE META BOXES

    // Time Meta Box
    function inskynepal_package_time_callback( $post ){
        wp_nonce_field('inskynepal_save_package_time_data', 'inskynepal_package_time_meta_box_nonce');

        $value = get_post_meta($post->ID, '_package_time_value_key', true);

        echo '<label for="inskynepal_package_time_field">Total Time: </label>';
        echo '<input type="text" id="inskynepal_package_time_field" name="inskynepal_package_time_field" value="'. esc_attr($value) .'" size="15" />';

    }

    function inskynepal_save_package_time_data($post_id){
        if( ! isset( $_POST['inskynepal_package_time_meta_box_nonce'] ) ) {
            return;
        }

        if( ! wp_verify_nonce( $_POST['inskynepal_package_time_meta_box_nonce'], 'inskynepal_save_package_time_data' ) ) {
            return;
        }

        if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
            return;
        }

        if( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if( ! isset( $_POST['inskynepal_package_time_field'] ) ) {
            return;
        }

        $my_data = sanitize_text_field( $_POST['inskynepal_package_time_field'] );

        update_post_meta( $post_id, '_package_time_value_key', $my_data );
    }
    add_action( 'save_post', 'inskynepal_save_package_time_data' );

    //  Height Meta Box
    function inskynepal_package_height_callback( $post ){
        wp_nonce_field('inskynepal_save_package_height_data', 'inskynepal_package_height_meta_box_nonce');

        $value = get_post_meta($post->ID, '_package_height_value_key', true);

        echo '<label for="inskynepal_package_height_field">Total Height: </label>';
        echo '<input type="text" id="inskynepal_package_height_field" name="inskynepal_package_height_field" value="'. esc_attr($value) .'" size="15" />';

    }

    function inskynepal_save_package_height_data($post_id){
        if( ! isset( $_POST['inskynepal_package_height_meta_box_nonce'] ) ) {
            return;
        }

        if( ! wp_verify_nonce( $_POST['inskynepal_package_height_meta_box_nonce'], 'inskynepal_save_package_height_data' ) ) {
            return;
        }

        if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
            return;
        }

        if( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if( ! isset( $_POST['inskynepal_package_height_field'] ) ) {
            return;
        }

        $my_data = sanitize_text_field( $_POST['inskynepal_package_height_field'] );

        update_post_meta( $post_id, '_package_height_value_key', $my_data );
    }
    add_action( 'save_post', 'inskynepal_save_package_height_data' );

    //Price Meta Box
    function inskynepal_package_price_callback( $post ){
        wp_nonce_field('inskynepal_save_package_price_data', 'inskynepal_package_price_meta_box_nonce');

        $value = get_post_meta($post->ID, '_package_price_value_key', true);

        echo '<label for="inskynepal_package_price_field">Starting Price: </label>';
        echo '<input type="text" id="inskynepal_package_price_field" name="inskynepal_package_price_field" value="'. esc_attr($value) .'" size="15" />';

    }

    function inskynepal_save_package_price_data($post_id){
        if( ! isset( $_POST['inskynepal_package_price_meta_box_nonce'] ) ) {
            return;
        }

        if( ! wp_verify_nonce( $_POST['inskynepal_package_price_meta_box_nonce'], 'inskynepal_save_package_price_data' ) ) {
            return;
        }

        if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
            return;
        }

        if( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if( ! isset( $_POST['inskynepal_package_price_field'] ) ) {
            return;
        }

        $my_data = sanitize_text_field( $_POST['inskynepal_package_price_field'] );

        update_post_meta( $post_id, '_package_price_value_key', $my_data );
    }
    add_action( 'save_post', 'inskynepal_save_package_price_data' );

    // THINGS TO DO META BOXES

    // Highlights Meta Box
    function inskynepal_things_to_do_highlights_callback( $post ){
        wp_nonce_field('inskynepal_save_things_to_do_highlights_data', 'inskynepal_things_to_do_highlights_meta_box_nonce');

        $value = get_post_meta($post->ID, '_things_to_do_highlights_value_key', true);

        //echo '<label for="inskynepal_things_to_do_highlights_field">Highlights: </label>';
        ?> <textarea id="inskynepal_things_to_do_highlights_field" name="inskynepal_things_to_do_highlights_field" rows="4" cols="50"><?php echo esc_attr($value); ?> </textarea>; <?php

    }

    function inskynepal_save_things_to_do_highlights_data($post_id){
        if( ! isset( $_POST['inskynepal_things_to_do_highlights_meta_box_nonce'] ) ) {
            return;
        }

        if( ! wp_verify_nonce( $_POST['inskynepal_things_to_do_highlights_meta_box_nonce'], 'inskynepal_save_things_to_do_highlights_data' ) ) {
            return;
        }

        if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
            return;
        }

        if( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if( ! isset( $_POST['inskynepal_things_to_do_highlights_field'] ) ) {
            return;
        }

        $my_data = sanitize_text_field( $_POST['inskynepal_things_to_do_highlights_field'] );

        update_post_meta( $post_id, '_things_to_do_highlights_value_key', $my_data );
    }
    add_action( 'save_post', 'inskynepal_save_things_to_do_highlights_data' );

    // Best Time to Visit Meta Box
    function inskynepal_things_to_do_best_time_callback( $post ){
        wp_nonce_field('inskynepal_save_things_to_do_best_time_data', 'inskynepal_things_to_do_best_time_meta_box_nonce');

        $value = get_post_meta($post->ID, '_things_to_do_best_time_value_key', true);

        //echo '<label for="inskynepal_things_to_do_best_time_field">Best Time: </label>';
        ?> <textarea id="inskynepal_things_to_do_best_time_field" name="inskynepal_things_to_do_best_time_field" rows="4" cols="50"><?php echo esc_attr($value); ?> </textarea>; <?php

    }

    function inskynepal_save_things_to_do_best_time_data($post_id){
        if( ! isset( $_POST['inskynepal_things_to_do_best_time_meta_box_nonce'] ) ) {
            return;
        }

        if( ! wp_verify_nonce( $_POST['inskynepal_things_to_do_best_time_meta_box_nonce'], 'inskynepal_save_things_to_do_best_time_data' ) ) {
            return;
        }

        if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
            return;
        }

        if( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if( ! isset( $_POST['inskynepal_things_to_do_best_time_field'] ) ) {
            return;
        }

        $my_data = sanitize_text_field( $_POST['inskynepal_things_to_do_best_time_field'] );

        update_post_meta( $post_id, '_things_to_do_best_time_value_key', $my_data );
    }
    add_action( 'save_post', 'inskynepal_save_things_to_do_best_time_data' );

     // Price Meta Box
     function inskynepal_things_to_do_price_callback( $post ){
        wp_nonce_field('inskynepal_save_things_to_do_price_data', 'inskynepal_things_to_do_price_meta_box_nonce');

        $value = get_post_meta($post->ID, '_things_to_do_price_value_key', true);

        //echo '<label for="inskynepal_things_to_do_price_field">Price Details: </label>';
        ?> <textarea id="inskynepal_things_to_do_price_field" name="inskynepal_things_to_do_price_field" rows="4" cols="50"><?php echo esc_attr($value); ?> </textarea>; <?php

    }

    function inskynepal_save_things_to_do_price_data($post_id){
        if( ! isset( $_POST['inskynepal_things_to_do_price_meta_box_nonce'] ) ) {
            return;
        }

        if( ! wp_verify_nonce( $_POST['inskynepal_things_to_do_price_meta_box_nonce'], 'inskynepal_save_things_to_do_price_data' ) ) {
            return;
        }

        if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
            return;
        }

        if( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if( ! isset( $_POST['inskynepal_things_to_do_price_field'] ) ) {
            return;
        }

        $my_data = sanitize_text_field( $_POST['inskynepal_things_to_do_price_field'] );

        update_post_meta( $post_id, '_things_to_do_price_value_key', $my_data );
    }
    add_action( 'save_post', 'inskynepal_save_things_to_do_price_data' );

    // Our Team Meta Box

    // Staff Designation Meta Box
    function inskynepal_staff_designation_callback( $post ){
        wp_nonce_field('inskynepal_save_staff_designation_data', 'inskynepal_staff_designation_meta_box_nonce');

        $value = get_post_meta($post->ID, '_staff_designation_value_key', true);

        echo '<label for="inskynepal_staff_designation_field">Staff Designation: </label>';
        echo '<input type="text" id="inskynepal_staff_designation_field" name="inskynepal_staff_designation_field" value="'. esc_attr($value) .'" size="15" />';

    }

    function inskynepal_save_staff_designation_data($post_id){
        if( ! isset( $_POST['inskynepal_staff_designation_meta_box_nonce'] ) ) {
            return;
        }

        if( ! wp_verify_nonce( $_POST['inskynepal_staff_designation_meta_box_nonce'], 'inskynepal_save_staff_designation_data' ) ) {
            return;
        }

        if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
            return;
        }

        if( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }

        if( ! isset( $_POST['inskynepal_staff_designation_field'] ) ) {
            return;
        }

        $my_data = sanitize_text_field( $_POST['inskynepal_staff_designation_field'] );

        update_post_meta( $post_id, '_staff_designation_value_key', $my_data );
    }
    add_action( 'save_post', 'inskynepal_save_staff_designation_data' );


    
?>