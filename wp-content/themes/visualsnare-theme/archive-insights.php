<?php get_header(); ?>

<div class="home splide" role="group" aria-label="Homepage Splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/formula-1.png"
                    alt="" /></li>
            <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/musician-hero-3.png"
                    alt="" /></li>
        </ul>
    </div>
    <div class="header-title">
        <h1>Industry Insights</h1>
        <h6>Insights from those working in Sports and Entertainment on their current roles, experiences, and journeys in
            the
            industry.</h6>
    </div>
</div>

<?php
    while(have_posts()){
        the_post(); ?>
<h2> <?php the_title(); ?></h2>
<?php the_content(); } ?>

<?php get_footer(); ?>