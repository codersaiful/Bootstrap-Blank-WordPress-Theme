<?php
/**
 * Search Form
 *
 * @package WordPress
 * @subpackage Bootstrap_Blank
 * @since Bootstrap-Blank 1.0
 */
?>

<?php $bootstrap_blank_unique_id = 'search_id_btb'; ?>
<div class="col-sm-12 search_form_wrapper">
    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="row">
            <label class="screen-reader-text" for="<?php echo $bootstrap_blank_unique_id; ?>">
                <?php
                $bootstrap_blank_search_for_msg = get_theme_mod( 'bootstrap_blank_search_for_text', __( 'Search for:', 'bootstrap-blank' ) );//'Search for:';
                $bootstrap_blank_search_button_text = get_theme_mod( 'bootstrap_blank_search_text', __( 'Search', 'bootstrap-blank' ) );
                
                ?>
                <span><?php echo $bootstrap_blank_search_for_msg; ?></span>
            </label>
            <div class="search_input_wrapper">
                <input type="search" id="<?php echo $bootstrap_blank_unique_id; ?>" class="search-field form-control pull-left" placeholder="<?php echo esc_attr( $bootstrap_blank_search_button_text ) . ' &hellip;'; ?>" value="<?php echo get_search_query(); ?>" name="s" />
            <button type="submit" class="search-submit btn btn-primary pull-right search_button"><i class="glyphicon glyphicon-search"></i><span class="screen-reader-text"><?php echo $bootstrap_blank_search_button_text; ?></span></button>
            </div>
       </div>
    </form>
</div>