<?php get_header(); ?>

<div class="top-insight-bloc">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/insight-vector.svg" class="insight-vector">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
            <div class="col-lg-8 py-3">

                <?php $categories = get_the_category();
                if (!empty($categories)) {
                    echo '<h6 class="category my-2">' . esc_html($categories[0]->name) . '</h6>';
                } ?>

                <h1> <?php the_title(); ?></h1>
                <p class="excerpt"> <?php echo get_the_excerpt(); ?> </p>
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