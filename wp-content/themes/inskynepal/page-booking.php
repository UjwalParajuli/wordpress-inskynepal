<?php
    get_header();
    date_default_timezone_set("Asia/Kathmandu");
    
    $background_image = get_the_post_thumbnail_url();
?>

<main id="booking-page">
            <section class="hero-mini" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Book skydiving</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, placeat! Qui quaerat eos temporibus aspernatur cupiditate minus! Ea incidunt eligendi vitae enim, praesentium nostrum odit, cupiditate velit a facilis magnam?</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ------------------------------------------------------------------------ -->
            
            <section class="insky-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                        <form action="<?php echo get_template_directory_uri(). '/inc/package_booking.php'?>" method="post" class="insky-form booking-form" enctype="multipart/form-data">
                            <div class="booking-position">
                                        <button class="active" data-switch="0">1</button> &rarr;
                                        <button data-switch="1">2</button> &rarr;
                                        <button data-switch="2">3</button>
                            </div>

                            <div class="booking-tab booking-basic active">
                                <strong class="tab-title">Basic Information</strong>
                                <div class="form-group">
                                    <label for="full-name">Full Name</label>
                                    <input type="text" id="full-name" name="full_name" required>
                                </div>

                                <div class="form-group">
                                    <label for="jump-date">Date to perform jump</label>
                                    <input type="date" id="jump-date" name="jump_date" min="<?php echo date('Y-m-d'); ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" id="phone" name="phone" required>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Relatives Phone</label>
                                    <input type="text" id="relatives_phone" name="relatives_phone" required>
                                </div>

                                <div class="form-group checkbox">
                                    <input type="checkbox" id="is_photo" name="is_photo" value="Yes">
                                    <label for="is_photo">Include Photos and Videos</label>
                                </div>

                                <div class="form-group">
                                    <label for="no-of-divers">Number of divers</label>
                                    <input type="number" min="1" id="no-of-divers" name="no_of_divers" required>
                                </div>

                                <div class="form-group form-nav">
                                    <button class="next insky-btn">Next</button>
                                </div>
                            </div>

                            <div class="booking-tab booking-divers">
                                <strong class="tab-title">Divers Information</strong>
                                <div class="diver-form">
                                    <strong class="tab-title">Diver <span>1</span></strong>
                                    <div class="form-group">
                                        <label for="diver-name-1">Full Name</label>
                                        <input type="text" id="diver-name-1" name="diver_name[]" class="diver-name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="diver-age-1">Age</label>
                                        <input type="number" id="diver-age-1" name="diver_age[]" class="diver-age" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="diver-gender-1">Gender</label>
                                        <select id="diver-gender-1" name="diver-gender-1[]" class="diver-gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="diver-package-1">Package</label>
                                        <select id="diver-package-1" name="diver-package-1[]" class="diver-package">
                                            <option value="Pokhara SkyDive">Pokhara SkyDive</option>
                                            <option value="Everest SkyDive">Everest SkyDive</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="diver-nationality-1">Nationality</label>
                                        <select id="diver-nationality-1" name="diver-nationality-1[]" class="diver-nationality">
                                            <option value="Nepalese">Nepalese</option>
                                            <option value="Foreigner">Foreigner</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="diver-weight-1">Weight</label>
                                        <input type="text" id="diver-weight-1" name="diver_weight[]" class="diver-weight" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="air_ticket">Air Ticket Photo (Only for Foreigners):</label>
                                        <input type="file" id="air_ticket" name="air_ticket[]" class="diver-air-ticket" accept="image/x-png,image/gif,image/jpeg">
                                    </div>

                                    <hr class="thin-hr">
                                </div>

                                <div class="form-group form-nav">
                                    <button class="prev insky-btn">Previous</button>
                                    <button class="next insky-btn">Next</button>
                                </div>
                            </div>

                            <div class="booking-tab booking-confirmation">
                                <strong class="tab-title text-center">Confirm booking details</strong>

                                <div class="confirmation">
                                    <div class="conf-single conf-basic">
                                        <ul>
                                            <li><strong>Booked by: </strong><span></span></li>
                                            <li><strong>Date to perform jump: </strong><span></span></li>
                                            <li><strong>Phone: </strong><span></span></li>
                                            <li><strong>Relative's Phone: </strong><span></span></li>
                                            <li><strong>Photos included: </strong><span></span></li>
                                            <li><strong>No. of travellers: </strong><span></span></li>
                                        </ul>
                                    </div>
                                    
                                    <hr class="thin-hr" />

                                    <div class="conf-single conf-divers">
                                        <div class="row">
                                            <div class="col-md-6 diver-display-single">
                                                <strong class="tab-title">Diver <span class="disp-count">1</span></strong>
                                                <ul>
                                                    <li><strong>Full name: </strong><span></span></li>
                                                    <li><strong>Age: </strong><span></span></li>
                                                    <li><strong>Gender: </strong><span></span></li>
                                                    <li><strong>Package: </strong><span></span></li>
                                                    <li><strong>Nationality: </strong><span></span></li>
                                                    <li><strong>Weight: </strong><span></span></li>
                                                    <li><strong>Air ticket: </strong>
                                                        <img class="booking-air-ticket" src="https://images.unsplash.com/photo-1603145560266-5f6651ef3429?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Confirm and complete booking" class="insky-btn">
                                </div>
                            </div>
                        </form>
                        <div class="booking-final text-center d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100px" height="100px" viewBox="0 0 295 295"><defs><style>.cls-1{fill:#3ef76d;}</style></defs><title>tick svg</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="118.04 220.56 52.05 154.57 66.19 140.43 118.04 192.28 228.81 81.51 242.95 95.65 118.04 220.56"/><path class="cls-1" d="M147.5,295C66.17,295,0,228.83,0,147.5S66.17,0,147.5,0,295,66.17,295,147.5,228.83,295,147.5,295Zm0-275A127.5,127.5,0,1,0,275,147.5,127.65,127.65,0,0,0,147.5,20Z"/></g></g></svg>
                            <p class="mt-3">Your booking has been successful!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
    get_footer();
?>
