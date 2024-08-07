<?php get_header(); ?>

<div class="home splide" role="group" aria-label="Homepage Splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/formula-1.png"
                    alt="" /></li>
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/musician-hero-3.png" alt="" /></li>
        </ul>
    </div>
    <div class="header-title">
        <h1>Industry Insights</h1>
        <h6>Insights from those working in Sports and Entertainment on their current roles, experiences, and journeys in
            the
            industry.</h6>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php while(have_posts()){ the_post(); ?>
        <div class="col-lg-4 col-md-6">
            <div class="blog-card">
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <a href="<?php echo get_the_permalink(); ?>">
                    <div class="card-details">

                        <?php $categories = get_the_category();
                if (!empty($categories)) {
                    echo '<p class="category mt-2 mb-1">' . esc_html($categories[0]->name) . '</p>';
                } ?>

                        <h6> <?php the_title(); ?></h6>
                        <p class="excerpt"> <?php echo wp_html_excerpt(get_the_excerpt(), 85, '...' ); ?> </p>
                    </div>
                </a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php get_footer(); ?>