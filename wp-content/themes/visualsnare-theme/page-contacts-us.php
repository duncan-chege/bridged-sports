<?php

  /*Template Name: Contact Us Page*/  

get_header(); ?>

<div class="home splide" role="group" aria-label="Homepage Splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/football-in-field.jpg" alt="" /></li>
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/sports-broadcaster.png" alt="" />
            </li>
        </ul>
    </div>
    <div class="header-title">
        <h1>Contact Us</h1>
        <h6>Please get in touch with us if you have any questions or would like to contribute as someone working in the
            industry.</h6>
    </div>
</div>

<div class="contact-bloc">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="email-bloc">
                    <h4>Reach Us Via Email</h4>
                    <a href="mailto:ella@bridgedinternational.com">ella@bridgedinternational.com</a>
                    <a href="mailto:ishwari@bridgedinternational.com">ishwari@bridgedinternational.com</a>
                </div>
                <div class="social-media-bloc">
                    <h4>Follow Our Social Media</h4>
                    <div>
                        <a href="https://www.linkedin.com/company/bridged-international/" target="_blank"><i class="bi bi-linkedin"></i></a>
                        <a href="https://www.instagram.com/bridgedinternational/" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.tiktok.com/@bridgedinternational" target="_blank"><img class="mt-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/tiktok-icon.svg" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="message-bloc">
                    <h4 class="text-center"> Send Us A Message </h4>
                    <?php echo do_shortcode('[forminator_form id="141"]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>