<?php

  /*Template Name: Community Hub Page*/  

get_header(); ?>

<div class="home splide" role="group" aria-label="Homepage Splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/ladies-enjoying.png" alt="" /></li>
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/men-playing-rugby.png" alt="" /></li>
        </ul>
    </div>
    <div class="header-title">
        <h1><?php echo get_the_title(); ?></h1>
        <h5 class="mt-3"> Existing to level the playing field </h5>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/scribbly-line.svg" alt=""
            class="scribbly-line" />
    </div>
</div>

<div class="brief-summary">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/community-connect.jpg" alt="">
            </div>
            <div class="col-md-6 offset-md-1 d-flex align-items-center">
                <p>The Bridged Community Hub is a diverse and inclusive space created to support aspiring individuals
                    from diverse and underrepresented backgrounds who are facing barriers accessing and starting their
                    careers in the sports and entertainment industry.</p>
            </div>
        </div>
    </div>
</div>

<div class="member-benefits">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5"> Member Benefits </h2>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><i class="bi bi-circle-fill"></i> Meet and connect with like-minded individuals.</li>
                    <li><i class="bi bi-circle-fill"></i> First access to our full list of job openings across the
                        industry</li>
                    <li><i class="bi bi-circle-fill"></i> Access to private LinkedIn and WhatsApp groups</li>
                    <li><i class="bi bi-circle-fill"></i> First access to our Industry Insights and Resource articles
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><i class="bi bi-circle-fill"></i> Online webinars and panel sessions with industry professionals
                    </li>
                    <li><i class="bi bi-circle-fill"></i> Networking and mentorship opportunities</li>
                    <li><i class="bi bi-circle-fill"></i> Apply for exclusive work opportunities at leading sports
                        organisations.</li>
                    <li><i class="bi bi-circle-fill"></i> CV, cover letter, and job application advice</li>
                </ul>
            </div>
            <div class="col-md-12 text-center mt-3">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Join The Hub
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content text-start">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Bridged Community Sign Up Form</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <p class="mx-3 mt-3 mb-0">Supporting individuals from diverse and underrepresented backgrounds who are facing
                            barriers breaking into the sports and entertainment industry</p>
                            <div class="modal-body">
                            <?php echo do_shortcode('[forminator_form id="151"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="work-with">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-5"> Who We Work With </h2>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fuse-logo.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="fuse-bloc">
                    <div class="circle"></div>
                    <h5>Fuse</h5>
                    <p>We’re excited to announce our first long-term partnership with Fuse, a global sports and
                        entertainment marketing agency! Together, we’re committed to inspiring talented individuals from
                        underrepresented and diverse backgrounds to pursue careers in the Sports and Entertainment
                        Industry.</p>
                    <a href="#">Read More </a>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ovg-logo.png" alt="">
            </div>
            <div class="col-md-6">
                <div class="fuse-bloc">
                    <div class="circle"></div>
                    <h5>Oak View Group (OVG)</h5>
                    <p>We were retained by OVG to recruit two summer
                        interns for 2024, offering members of the Community Hub
                        first and exclusive access to apply for these roles.</p>
                    <a href="#">Read More </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hub-contact">
    <h2> Get In Touch </h2>
    <div class="container">
        <div class="row">
            <div class="d-flex align-items-start flex-wrap">
                <div class="col-md-5 col-12">
                    <div class="nav flex-column me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="active" id="v-pills-hire-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-hire" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Are You Looking To Hire Diverse Talent</button>
                        <button class="" id="v-pills-looking-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-looking" type="button" role="tab" aria-controls="v-pills-looking"
                            aria-selected="false">Are you from a diverse or underrepresented background looking for
                            work?</button>
                    </div>
                </div>
                <div class="col-md-7 col-12">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active hub-form-bloc" id="v-pills-hire" role="tabpanel"
                            aria-labelledby="v-pills-hire-tab" tabindex="0">
                            <?php echo do_shortcode('[forminator_form id="149"]'); ?></div>
                        <div class="tab-pane fade hub-form-bloc" id="v-pills-looking" role="tabpanel"
                            aria-labelledby="v-pills-looking-tab" tabindex="0">
                            <?php echo do_shortcode('[forminator_form id="150"]'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>