<div class="comments-area">
    <?php
    // Check if comments are open and if there are comments
    if (post_password_required()) {
        echo '<p class="no-comments">This post is password protected. Enter the password to view comments.</p>';
        return;
    }

    if (have_comments()):
        ?>
        <h3 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            if ($comment_count === 1) {
                echo '1 Comment:';
            } else {
                printf('%s Comments:', number_format_i18n($comment_count));
            }
            ?>
        </h3>

        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style' => 'ol',
                    'short_ping' => true,
                    'avatar_size' => 60,
                )
            );
            ?>
        </ol>

        <?php
        // Pagination for comments
        if (get_comment_pages_count() > 1 && get_option('page_comments')):
            ?>
            <nav class="comment-navigation" role="navigation">
                <h2 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'text-domain'); ?></h2>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'text-domain')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'text-domain')); ?></div>
            </nav>
            <?php
        endif;

    else:
        // If no comments, display a message
        if (comments_open()):
            echo '<p class="no-comments">Be the first to comment.</p>';
        else:
            echo '<p class="no-comments">Comments are closed.</p>';
        endif;
    endif;
    ?>

    <?php
    // Display the comment form
    comment_form(
        array(
            'title_reply' => 'Leave a Reply',
            'comment_field' => '<p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea></p>',
            'fields' => array(
                'author' => '<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label><input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" required="required"></p>',
                'email' => '<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label><input id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" required="required"></p>',
                'url' => '<p class="comment-form-url"><label for="url">Website</label><input id="url" name="url" type="url" value="' . esc_attr($commenter['comment_author_url']) . '" size="30"></p>',
            ),
            'class_form' => 'comment-form',
        )
    );
    ?>
</div>