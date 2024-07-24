<?php
get_header();
get_template_part('parts/preloader');
?>

<header>
<?php get_template_part('parts/header');?>
</header>

<!-- Start Project Section -->
<section class="project-section pt-100">
    <div class="container">
        <div class="section-title">
            <h3>Categories</h3>
        </div>

        <!-- Category Filter Menu -->
        <ul class="filter-menu">
            <li class="filter active" data-filter="all">All</li>
            <?php
            // Fetch all categories
            $categories = get_terms(array(
                'taxonomy' => 'category',
                'hide_empty' => false,
            ));

            foreach ($categories as $category) {
                echo '<li class="filter" data-filter=".' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</li>';
            }
            ?>
        </ul>

        <!-- Project Grid -->
        <div id="Container" class="row">
            <?php
            // Check if a specific category filter is applied
            $filter = isset($_GET['filter']) ? sanitize_text_field($_GET['filter']) : 'all';

            // Adjust query arguments based on the selected filter
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
            );

            if ($filter !== 'all') {
                $args['category'] = get_term_by('slug', $filter, 'category')->term_id;
            }

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <div class="col-lg-4 col-md-6 mix <?php foreach (get_the_category() as $category) { echo esc_attr($category->slug) . ' '; } ?>">
                        <div class="single-project-box">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>

                            <div class="project-hover-content">
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>No projects found.</p>';
            endif;
            ?>
        </div>
    </div>
</section>
<!-- End Project Section -->

<?php
get_template_part('parts/sidebar');
get_footer();
?>
<script>document.addEventListener('DOMContentLoaded', function() {
    const filterMenuItems = document.querySelectorAll('.filter-menu .filter');
    const container = document.getElementById('Container');

    filterMenuItems.forEach(item => {
        item.addEventListener('click', function() {
            const filterValue = this.getAttribute('data-filter');
            filterMenuItems.forEach(menuItem => menuItem.classList.remove('active'));
            this.classList.add('active');
            
            // Apply filter to the container
            const items = container.querySelectorAll('.mix');
            items.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>