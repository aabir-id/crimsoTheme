<aside class="widget-area" id="secondary">
    <section class="widget widget_search">
        <?php get_search_form(); ?>
    </section>

    <section class="widget widget_crimso_posts_thumb">
        <h3 class="widget-title">Popular Posts</h3>

        <?php
        // Example of recent posts, replace with your query if needed
        $popular_posts = new WP_Query(array(
            'posts_per_page' => 3,
            'orderby' => 'comment_count',
            'order' => 'DESC',
        ));
        while ($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
            <article class="item">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" class="thumb">
                        <?php the_post_thumbnail('thumbnail', array('class' => 'fullimage cover')); ?>
                    </a>
                <?php endif; ?>
                <div class="info">
                    <time><?php echo get_the_date(); ?></time>
                    <h4 class="title usmall"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
            </article>
        <?php endwhile; wp_reset_postdata(); ?>
    </section>

    <section class="widget widget_categories">
        <h3 class="widget-title">Categories</h3>
        <ul>
            <?php wp_list_categories(array('title_li' => '')); ?>
        </ul>
    </section>

    <section class="widget widget_recent_comments">
        <h3 class="widget-title">Recent Comments</h3>
        <ul>
            <?php
            $recent_comments = get_comments(array(
                'number' => 5,
                'status' => 'approve',
            ));
            foreach ($recent_comments as $comment) : ?>
                <li>
                    <span class="comment-author-link">
                        <a href="<?php echo get_comment_link($comment->comment_ID); ?>"><?php echo get_comment_author($comment->comment_ID); ?></a>
                    </span>
                    on
                    <a href="<?php echo get_comment_link($comment->comment_ID); ?>"><?php echo get_the_title($comment->comment_post_ID); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="widget widget_recent_entries">
        <h3 class="widget-title">Recent Posts</h3>
        <ul>
            <?php
            $recent_posts = new WP_Query(array(
                'posts_per_page' => 5,
                'post_status' => 'publish',
            ));
            while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </section>

    <section class="widget widget_archive">
        <h3 class="widget-title">Archives</h3>
        <ul>
            <?php wp_get_archives(array('type' => 'monthly')); ?>
        </ul>
    </section>

    <section class="widget widget_tag_cloud">
        <h3 class="widget-title">Tags</h3>
        <div class="tagcloud">
            <?php wp_tag_cloud(); ?>
        </div>
    </section>
</aside>
