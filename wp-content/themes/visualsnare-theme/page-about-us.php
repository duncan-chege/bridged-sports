<?php

  /*Template Name: About Page*/  

get_header(); ?>

<div class="home splide" role="group" aria-label="Homepage Splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/athlete-hero.png"
                    alt="" /></li>
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/musician-hero-2.png" alt="" /></li>
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
                individuals.</p>
            <p>We do this by creating better access to industry information and resources and sharing the experiences of
                those in the industries.</p>
        </div>
        <div class="bloc-img"></div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mission-wave.svg" alt="" class="mission-wave" />
</div>

<div class="vision">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vision-wave.svg" alt="" class="vision-wave" />
    <div class="bloc">
        <div class="bloc-img"></div>
        <div>
            <h2>Why We Do This</h2>
            <p>We do this to enhance the visibility of diverse professionals in the Sports and Entertainment industries
                and to provide better access to information</p>
            <p>This will improve the perception of these fields as viable career options for young individuals.</p>
        </div>
    </div>

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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ella-ireri.png" alt="" class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title"> Ella Ireri </h5>
                        <p class="card-text"> Founder </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center my-3">
            <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ella-ireri.png" alt="" class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title"> Ella Ireri </h5>
                        <p class="card-text"> Founder </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center my-3">
            <div class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ella-ireri.png" alt="" class="card-img-top" />
                    <div class="card-body">
                        <h5 class="card-title"> Ella Ireri </h5>
                        <p class="card-text"> Founder </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>