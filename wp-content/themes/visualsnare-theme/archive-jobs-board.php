<?php get_header(); ?>

<div class="home splide" role="group" aria-label="Homepage Splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/professional-lady.jpg" alt="" /></li>
            <li class="splide__slide"><img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/basketball-work.jpg" alt="" /></li>
        </ul>
    </div>
    <div class="header-title">
        <h1>Jobs Board</h1>
        <h5 class="mt-3">Helping You Find Entry-Level Roles In The Sports & Entertainment Industry</h5>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/scribbly-line.svg" alt=""
            class="scribbly-line" />
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <?php
           $all_jobs = new WP_Query(array('post_type' => 'jobs-board'));

           if ($all_jobs->have_posts()) {
            while($all_jobs->have_posts()) {
                $all_jobs->the_post();
                $pod = pods('jobs-board', get_the_ID());
        
                // Store job details in variables
                $job_title = get_the_title();
                $company = pods_field_display('company');
                $location = pods_field_display('location');
                $availability = pods_field_display('availability');
                $position = pods_field_display('position');
                $job_link = $pod->field('job_link');
                $deadline = $pod->field('deadline');
        
                // Prepare deadline status
                $status = '';
                if (!empty($deadline) && $deadline !== '0000-00-00') {
                    $current_date = new DateTime();
                    $deadline_date = DateTime::createFromFormat('Y-m-d', $deadline);
                    
                    if ($deadline_date !== false) {
                        $interval = $current_date->diff($deadline_date);
                        $days_remaining = $interval->days;
                        
                        if ($deadline_date < $current_date) {
                            $status = "expired";
                        } else {
                            $status = $days_remaining . " days remaining";
                        }
                    }
                }
                ?>

            <div class="jobs-bloc">
                <div>
                    <h4><?php echo esc_html($job_title); ?></h4>
                    <div class="d-flex flex-wrap justify-content-between" style="width: min(300px, 100%);">
                        <p class="company-name">Company:<?php echo esc_html($company); ?></p>
                        <?php if (!empty($status)): ?>
                        <p class="deadline-status"><i class="bi bi-clock" style="margin-right: .3rem"></i> <?php echo esc_html($status); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="d-flex flex-wrap" style="width: min(500px, 100%); font-size: .8rem;">
                        <p class="location"><?php echo esc_html($location); ?></p>
                        <p class="availability"><?php echo esc_html($availability); ?></p>
                        <p class="position"><?php echo esc_html($position); ?></p>
                    </div>
                </div>
                <div>
                    <a href="<?php echo esc_url($job_link); ?>" target="_blank"><span>View Job</span> <i class="bi bi-arrow-right-short" style="font-size: 2rem"></i></a>
                </div>
            </div>
            <?php
            }
            wp_reset_postdata(); 
        }
            ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>