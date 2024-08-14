<?php get_header(); ?>

<div class="container search">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <?php if (have_posts()) : ?>
            <h2 class="text-center">Search results for "<?php echo get_search_query(); ?>"</h2>
        <?php else : ?>
            <h2 class="text-center">No results found for "<?php echo get_search_query(); ?>"</h2>
            <p class="text-center"> Search again here <?php echo do_shortcode('[ivory-search id="143" title="Custom Search Form"]'); ?>
        <?php endif; ?>
        </div>
        <?php while(have_posts()){
        the_post(); ?>

        <div class="col-md-12">
            <div class="result-bloc">
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div>
                    <h5><?php the_title(); ?></h5>
                    <p class="excerpt"><?php echo wp_html_excerpt(get_the_excerpt(), 85, '...' ); ?></p>
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>

<?php  get_footer(); ?>