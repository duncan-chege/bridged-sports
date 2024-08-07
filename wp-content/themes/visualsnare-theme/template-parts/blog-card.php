<div class="blog-card">
    <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
    <a href="<?php echo get_the_permalink(); ?>">
        <div class="card-details">
            <?php $categories = get_the_category(); 
                if (!empty($categories)) { 
                  echo '<p class="category mt-2 mb-1">' . esc_html($categories[0]->name) . '</p>'; 
                } 
              ?>
            <h6><?php the_title(); ?></h6>
            <p class="excerpt"><?php echo wp_html_excerpt(get_the_excerpt(), 85, '...' ); ?></p>
        </div>
    </a>
</div>