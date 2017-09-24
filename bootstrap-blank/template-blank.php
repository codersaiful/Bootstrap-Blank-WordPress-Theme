<?php 
/**
 * Template Name: Blank 
 */ 
?>
<?php get_header( 'blank' ); ?>

<section class="container content_section">
    <div class="col-md-12">
        <div <?php post_class( 'post_entry single_page_content' ); ?>>
            <?php if( have_posts() ):while( have_posts() ):the_post();?>
            <div class="row post_single">
                <div class="single_post_content">
                    <?php the_content(); ?>
                </div>
            </div>
            
            <?php endwhile;
            else:
                get_template_part( 'inc/nopost' );
            endif; 
            ?>

        </div>
    </div>
</section>

<?php get_footer( 'blank' ); ?>