<?php 
/**
 * Template Name: Fullwidth Blank 
 */
?>
<?php get_header('blank'); ?>

<section class="container-fluid content_section">
    <div <?php post_class( 'fullwidth_page' );?>>
            <?php if( have_posts() ):while( have_posts() ):the_post();?>
                    <?php the_content(); ?>
            <?php
            endwhile;
            else:
                get_template_part( 'inc/nopost' );
            endif;
            ?>

    </div>
</section>

<?php get_footer('blank'); ?>


























