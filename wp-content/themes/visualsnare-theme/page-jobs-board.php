<?php

  /*Template Name: Jobs Board Page*/  

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

<?php
    while(have_posts()){
        the_post(); ?>
<h2> <?php the_title(); ?></h2>
<?php the_content(); } ?>

<?php get_footer(); ?>