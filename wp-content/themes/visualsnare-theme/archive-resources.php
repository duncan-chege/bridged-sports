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
        <h1>Industry Resources</h1>
        <h6>Resources and information to help you better understand the industries, including the different types of
            roles, programmes and opportunities available to you.</h6>
    </div>
</div>

<div class="container mt-3">
    <!-- Tab Navigation -->
    <nav class="category nav nav-pills" id="blogTabs" role="tablist">
        <a class="nav-link active" id="all-tab" data-bs-toggle="tab" href="#all" role="tab" aria-controls="all"
            aria-selected="true">All</a>
        <?php
      $categories = get_categories();
      foreach ($categories as $category) {
        if ($category->slug !== 'uncategorized'){   // Skip the "Uncategorized" category
        echo ' <a class="nav-link" id="'.esc_attr($category->slug).'-tab" data-bs-toggle="tab" href="#'.esc_attr($category->slug).'" role="tab" aria-controls="'.esc_attr($category->slug).'" aria-selected="false">'.esc_html($category->name).'</a>';
      }
    }
      ?>
    </nav>

    <!-- Tab Content -->
    <div class="tab-content" id="blogTabsContent">
        <div class="row gx-5">
            <?php 
          $all_posts = new WP_Query(array('post_type' => 'resources'));
          while($all_posts->have_posts()){ 
          $all_posts->the_post(); 
          $post_categories = get_the_category();
          $category_classes = '';
          foreach ($post_categories as $post_category) {
            if ($post_category->slug !== 'uncategorized'){  // Skip the "Uncategorized" category
            $category_classes .= esc_attr($post_category->slug) . ' ';
          }
        }
        ?>
            <div class="col-lg-4 col-md-6 <?php echo $category_classes; ?>">
                <?php get_template_part('template-parts/blog-card'); ?>
            </div>

            <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var tabs = document.querySelectorAll('#blogTabs a');
        var cards = document.querySelectorAll('.tab-content .row>div');

        tabs.forEach(function (tab) {
            tab.addEventListener('shown.bs.tab', function (event) {
                var selectedCategory = event.target.getAttribute('href').substring(1);

                cards.forEach(function (card) {
                    if (selectedCategory === 'all') {
                        card.classList.add('active');
                    } else {
                        card.classList.toggle('active', card.classList.contains(
                            selectedCategory));
                    }
                });
            });
        });

        // Show all cards by default
        cards.forEach(function (card) {
            card.classList.add('active');
        });
    });
</script>

<?php get_footer(); ?>