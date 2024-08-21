<?php 
    get_header();
?>

<div class="home splide" role="group" aria-label="Homepage Splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/f1-hero.jpg"
                    alt="" /></li>
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/cheering-crowd-concert.png" alt="" />
            </li>
        </ul>
    </div>
    <div class="header-title">
        <h1>Making the Sports & Entertainment Industry Accessible to you</h1>
    </div>
</div>

<div class="in-brief">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1><span style="color: #9FB6BC">WE ARE</span><br> BRIDGED</h1>
            </div>
            <div class="col-md-6 offset-md-2 text-center">
                <div class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <h5>Empowering Individuals</h5>
                                <p class="fw-medium">Offering insights, resources, and networking opportunities to help
                                    individuals kickstart and advance their careers.</p>
                            </li>
                            <li class="splide__slide">
                                <h5>Diversifying Talent Pools</h5>
                                <p class="fw-medium">Providing sports and entertainment organisations with a diverse
                                    pool of qualified candidates for recruitment.</p>
                            </li>
                            <li class="splide__slide">
                                <h5>Industry Accessibility</h5>
                                <p class="fw-medium">Collaborating with leading sports and entertainment organisations
                                    to make the industry more accessible and inclusive.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="<?php echo home_url(); ?>/about-us">About Us</a>
            </div>
        </div>
    </div>
</div>

<div class="career-section">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
        <path fill="#fff" fill-opacity="1" d="M0,122L1440,0L1440,0L0,0Z"></path>
    </svg>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>A CAREER IN SPORTS AND ENTERTAINMENT</h2>
                <h6>It is possible for you to have a career in sports and entertainment. All you need is the right
                    information, opportunities, and resources.
                </h6>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 py-3">
                <h5>Industry Insights</h5>
                <p> Insights from those working in Sport and Entertainment on their career journeys, experiences, and
                    current roles. </p>
                <a href="<?php echo home_url(); ?>/insights">Read</a>
                <div class="vl"></div>
            </div>
            <div class="col-md-4 py-3">
                <h5>Industry Resources</h5>
                <p>Resources and information to help you better understand the industry, including different types of
                    roles, programmes and opportunities available.
                </p>
                <a href="<?php echo home_url(); ?>/resources">Learn</a>
            </div>
            <div class="col-md-4 pt-3">
                <h5>Industry networking</h5>
                <p>Begin to build your network by connecting with professionals working in the industry</p>
                <a href="<?php echo home_url(); ?>/networks">Connect</a>
            </div>
        </div>
    </div>
</div>

<div class="community-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/community-connect.jpg" alt="" />
            </div>
            <div class="col-md-6 offset-md-1 d-flex flex-column justify-content-center align-items-center text-center">
                <h2> THE BRIDGED COMMUNITY HUB </h2>
                <p class="mt-3 mb-4"> Created to support aspiring individuals from diverse and underrepresented
                    backgrounds who are facing barriers accessing and starting their careers in the sports industry.
                </p>
                <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                            <p class="mx-3 mt-3 mb-0">Supporting individuals from diverse and underrepresented
                                backgrounds who are facing
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

<div class="need-work">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200">
        <path fill="#fff" fill-opacity="1" d="M0,122L1440,0L1440,0L0,0Z"></path>
    </svg>
    <div class="bloc">
        <div class="bloc-img"></div>
        <div class="d-flex flex-column justify-content-center align-items-center text-center">
            <h2>LOOKING FOR YOUR NEXT ROLE?</h2>
            <a href="#">View Jobs</a>
        </div>
    </div>
</div>

<div class="testimonials">
    <h2 class="text-center"> TESTIMONIALS </h2>
    <div class="splide" role="group" aria-label="Testimonials Splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div class="bloc">
                        <p>Through the Bridged network, I connected with talented individuals who supported me during my
                            recruiting
                            period, leading to invaluable lessons and a job at the world's largest sports marketing
                            agency.
                        </p>
                        <small class="fw-bold">Stephanie Kibet</small><br>
                        <small>Global partnerships operation, IMG Football events</small>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="bloc">
                        <p>Bridged transformed my Sports Management journey by providing invaluable networking
                            opportunities and direct learning from industry professionals, leading to an internship and
                            a placement in corporate sales and operations.
                        </p>
                        <small class="fw-bold">Zach Robertson</small><br>
                        <small>Sports Management Student
                        </small>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="bloc">
                        <p>Bridged has helped me gain information on jobs available within the sports industry and given
                            me the opportunity to connect with more like-minded individuals who are interested in sports
                        </p>
                        <small class="fw-bold">
                            Ian Tze Yang Hing</small><br>
                        <small>Sports Business Management Student, Leeds Beckett University</small>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="instagram">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2> CHECK OUT <br>OUR INSTAGRAM </h2>
                <div class="ig-account"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-icon.svg" alt="" />
                    @bridged_international </div>
            </div>
            <div class="col-md-8 text-center">
                <?php echo do_shortcode('[instagram feed="75"]'); ?>
                <a href="">Follow Us</a>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>