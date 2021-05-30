$ = jQuery.noConflict();

jQuery(document).ready(function($){
    //perform media upload operation in the admin option page
    var mediaUploader;

    $( '#upload_qrcode_button' ).on('click', function(e) {
        e.preventDefault();  
        if( mediaUploader ){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Upload QR Code',
            button: {
                text: 'Choose QR Code Image'
            },
            multiple: false
        });

        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#inskynepal_qrcode').val(attachment.url);
            $('#preview').attr("src",attachment.url);
        });

        mediaUploader.open();

    });

    var mediaUploader_2;

    $( '#upload_landing_image_1_button' ).on('click', function(e) {
        e.preventDefault();  
        if( mediaUploader_2 ){
            mediaUploader_2.open();
            return;
        }

        mediaUploader_2 = wp.media.frames.file_frame = wp.media({
            title: 'Upload Landing Image 1',
            button: {
                text: 'Choose Landing Image 1'
            },
            multiple: false
        });

        mediaUploader_2.on('select', function(){
            attachment = mediaUploader_2.state().get('selection').first().toJSON();
            $('#inskynepal_landing_page_image_1').val(attachment.url);
            $('#preview_landing_image_1').attr("src",attachment.url);
        });

        mediaUploader_2.open();

    });

    var mediaUploader_3;

    $( '#upload_landing_image_2_button' ).on('click', function(e) {
        e.preventDefault();  
        if( mediaUploader_3 ){
            mediaUploader_3.open();
            return;
        }

        mediaUploader_3 = wp.media.frames.file_frame = wp.media({
            title: 'Upload Landing Image 2',
            button: {
                text: 'Choose Landing Image 2'
            },
            multiple: false
        });

        mediaUploader_3.on('select', function(){
            attachment = mediaUploader_3.state().get('selection').first().toJSON();
            $('#inskynepal_landing_page_image_2').val(attachment.url);
            $('#preview_landing_image_2').attr("src",attachment.url);
        });

        mediaUploader_3.open();

    });


    var mediaUploader_4;

    $( '#upload_landing_image_3_button' ).on('click', function(e) {
        e.preventDefault();  
        if( mediaUploader_4 ){
            mediaUploader_4.open();
            return;
        }

        mediaUploader_4 = wp.media.frames.file_frame = wp.media({
            title: 'Upload Landing Image 3',
            button: {
                text: 'Choose Landing Image 3'
            },
            multiple: false
        });

        mediaUploader_4.on('select', function(){
            attachment = mediaUploader_4.state().get('selection').first().toJSON();
            $('#inskynepal_landing_page_image_3').val(attachment.url);
            $('#preview_landing_image_3').attr("src",attachment.url);
        });

        mediaUploader_4.open();

    });


  
});