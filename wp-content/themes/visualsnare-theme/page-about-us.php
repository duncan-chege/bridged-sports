<?php

  /*Template Name: About Page*/  

get_header(); ?>

<div class="home splide" role="group" aria-label="Homepage Splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/sport-photographer.png" alt="" /></li>
            <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/party-goers.png"
                    alt="" /></li>
        </ul>
    </div>
    <div class="header-title">
        <h1><?php echo get_the_title(); ?></h1>
    </div>
</div>

<div class="mission">
    <div class="bloc">
        <div>
            <h2>Our Mission</h2>
            <p>To show that Sports and Entertainment are viable industries with vast career options for young aspiring
                individuals by creating better access to information, opportunities, and resources</p>
        </div>
        <div class="bloc-img"></div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mission-wave.svg" alt="" class="mission-wave" />
</div>

<div class="founder">
    <div></div>
    <div>
        <h2> From Our Founder </h2>
        <?php the_content(); ?>
    </div>
</div>

<div class="team">
    <h2> Meet The Team </h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center my-3">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ella-ireri-headshot.jpg" alt=""
                        class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title"> Ella Ireri </h5>
                        <p class="card-text"> Founder </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center my-3">
                <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mweni-photo.png" alt=""
                        class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title"> Mweni Chola </h5>
                        <p class="card-text"> Social Media & Content Writer </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>