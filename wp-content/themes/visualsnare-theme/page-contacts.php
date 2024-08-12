<?php get_header(); ?>

<div class="home splide" role="group" aria-label="Homepage Splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/man-woman-exercising.png" alt="" /></li>
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/sports-broadcaster.png" alt="" />
            </li>
        </ul>
    </div>
    <div class="header-title">
        <h1>Contact Us</h1>
        <h6>Please get in touch with us if you have any questions or would like to contribute as someone working in the
            industry</h6>
    </div>
</div>

<div class="contact-bloc">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="email-bloc">
                    <h4>Reach Us Via Email</h4>
                    <a href="mailto:ella@bridgedinternational.co.uk">ella@bridgedinternational.co.uk</a>
                    <a href="mailto:ishwari@bridgedinternational.co.uk">ishwari@bridgedinternational.co.uk</a>
                </div>
                <div class="social-media-bloc">
                    <h4>Follow Our Social Media</h4>
                    <div>
                        <i class="bi bi-linkedin"></i>
                        <i class="bi bi-instagram"></i>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tiktok-icon.svg" alt="" />
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