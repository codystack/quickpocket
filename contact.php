<?php
include "./components/header.php";
include "./components/navbar.php";
?>

    <div class="page_wrapper">

        <section class="contact_section">
            <div class="container">
                <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
                    <span class="title_badge">Talk to us</span>
                    <h2>Contact us <span>let's talk</span></h2>
                    <p>Our friendly customer support team is ready to assist you with any inquiries you might have. <br>Whether it's about using our services, troubleshooting issues, <br>or providing feedback, we're just a message away.</p>
                </div>
                <ul class="contact_listing">
                    <li data-aos="fade-up" data-aos-duration="1500">
                        <span class="icon">
                            <img src="images/mail_icon.png" alt="image">
                        </span>
                        <span class="lable">Email us</span>
                        <a href="mailto:hello@quickpocket.com">hello@quickpocket.com</a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500" data-aos-delay="150">
                        <span class="icon">
                            <img src="images/phone_icon.png" alt="image">
                        </span>
                        <span class="lable">Call us</span>
                        <a href="tel:+2348061360063">+234 806-136-0063</a>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                        <span class="icon">
                            <img src="images/location_icon.png" alt="image">
                        </span>
                        <span class="lable">Our location</span>
                        <a target="_blank" href="https://maps.app.goo.gl/G9qKRGCWijA5V9oy7">Open Google Maps</a>
                    </li>
                </ul>
            </div>
        </section>
        
        <section class="contact_form white_text row_am" data-aos="fade-in" data-aos-duration="1500">
            <div class="contact_inner">
                <div class="container">
                    <div class="dotes_blue">
                        <img src="images/blue_dotes.png" alt="image">
                    </div>
                    <div class="section_title" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                        <span class="title_badge">Message us</span>
                        <h2>Drop a message us</h2>
                        <p>Fill up form below, our team will get back soon</p>
                    </div>
                    <form data-aos="fade-up" data-aos-duration="1500">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name *" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Comments"></textarea>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="coustome_checkbox">
                                    <label for="term_checkbox">
                                        <input type="checkbox" id="term_checkbox">
                                        <span class="checkmark"></span>
                                        I agree to receive emails, newsletters and promotional messages
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4 text-right">
                                <div class="btn_block">
                                    <button class="btn puprple_btn ml-0">Submit</button>
                                    <div class="btn_bottom"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        
        <div class="map_block row_am" data-aos="fade-in" data-aos-duration="1500">
            <div class="container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6631058980547!2d3.4612911!3d6.437296700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf5aaea972555%3A0xad77123e648e5e2!2s21%20Bisola%20Durosinmi%20Etti%20Dr%2C%20Lekki%20Phase%20I%2C%20Lekki%20106104%2C%20Lagos!5e0!3m2!1sen!2sng!4v1729668022074!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

<?php include "./components/footer.php"; ?>    