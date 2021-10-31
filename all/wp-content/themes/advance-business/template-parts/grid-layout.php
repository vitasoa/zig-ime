<?php
/**
 * The template part for displaying services
 *
 * @package advance-business
 * @subpackage advance-business
 * @since advance-business 1.0
 */
?>
<div class="col-md-4 col-sm-4">
    <div class="page-box">
        <h4><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
        <div class="metabox">
            <span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
            <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>       
            <span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'advance-business'), __('0 Comments', 'advance-business'), __('% Comments', 'advance-business') ); ?> </span>
        </div>
        <div class="box-image">
            <?php the_post_thumbnail();?>
        </div>
        <div class="new-text">
            <p><?php the_excerpt();?></p>
            <div class="second-border">
                <a href="<?php echo esc_url( get_permalink() );?>" title="<?php esc_attr_e( 'Read More', 'advance-business' ); ?>"><?php esc_html_e('Read More','advance-business'); ?></a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>