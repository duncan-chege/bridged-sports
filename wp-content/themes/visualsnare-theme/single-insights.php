<?php get_header(); ?>

<div class="top-insight-bloc">
    <div></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            </div>
            <div class="col-lg-8 py-3 d-flex flex-column justify-content-center">

                <?php $categories = get_the_category();
                if (!empty($categories)) {
                    echo '<h6 class="category my-2">' . esc_html($categories[0]->name) . '</h6>';
                } ?>

                <h1> <?php the_title(); ?></h1>
                <p class="excerpt"> <?php echo get_the_excerpt(); ?> </p>

                <?php
                    // Retrieve the post content and excerpt
                    $content = get_the_content();
                    $excerpt = get_the_excerpt();

                    // Calculate and display the reading time
                    $reading_time = calculate_reading_time($content, $excerpt);
                    echo '<p>' . esc_html($reading_time) . '</p>';
                ?>
            </div>
        </div>
    </div>

</div>

<div class='container'>
    <div class='row'>
        <div class='col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 my-5'>
            <?php the_content(); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>