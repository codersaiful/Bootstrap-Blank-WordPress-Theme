<?php
/**
 * For displaying comment section
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */


if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            printf( _nx( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'bootstrap-blank' ), number_format_i18n( get_comments_number() ), get_the_title() );
            ?>
        </h2>


        <ul class="list-unstyled">
            <?php
            // Bootstap comment walwal included in functions.php file. see there.
            wp_list_comments( array(
                'style' => 'ul',
                'short_ping' => true,
                'avatar_size' => '64',
                'walker' => new Bootstrap_Comment_Walker(),
            ) );
            ?>
        </ul><!-- .comment-list -->
    <?php endif; // have_comments().
    ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'bootstrap-blank' ); ?></p>
    <?php endif; ?>

    <?php
    /**
     * Adding bootstrap support to comment form,
     * and some form validation using javascript.
     */

    ob_start();
    $commenter = wp_get_current_commenter();
    $req = true;
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $comments_arg = array(
        'form' => array(
            'class' => 'form-horizontal'
        ),
        'fields' => apply_filters( 'comment_form_default_fields', array(
            'autor' => '<div class="form-group">' . '<label for="author">' . __('Name', 'bootstrap-blank') . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
            '<input id="author" name="author" class="form-control" type="text" value="" size="30"' . $aria_req . ' />' .
            '<p id="d1" class="text-danger"></p>' . '</div>',
            'email' => '<div class="form-group">' . '<label for="email">' . __('Email', 'bootstrap-blank') . '</label> ' . ( $req ? '<span>*</span>' : '' ) .
            '<input id="email" name="email" class="form-control" type="text" value="" size="30"' . $aria_req . ' />' .
            '<p id="d2" class="text-danger"></p>' . '</div>',
            'url' => '') ),
        'comment_field' => '<div class="form-group">' . '<label for="comment">' . __('Comment', 'bootstrap-blank') . '</label><span>*</span>' .
        '<textarea id="comment" class="form-control" name="comment" rows="3" aria-required="true"></textarea><p id="d3" class="text-danger"></p>' . '</div>',
        'comment_notes_after' => '',
        'class_submit' => 'btn btn-default'
    );
    ?>
    <?php
    comment_form( $comments_arg );
    echo str_replace( 'class="comment-form"', 'class="comment-form" name="commentForm" onsubmit="return validateForm();"', ob_get_clean() );
    ?>

</div><!-- .comments-area -->
