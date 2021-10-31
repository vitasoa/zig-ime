<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package advance-business
 */

get_header(); ?>

<section id="our-services">
    <div class="innerlightbox">
        <div class="container">
        <?php
            $left_right = get_theme_mod( 'advance_business_layout_options','Right Sidebar');
            if($left_right == 'Left Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <?php get_sidebar();?>
                </div>
                <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
                   <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-business'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                    <?php if ( have_posts() ) :
                      /* Start the Loop */
                      while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content' ); 
                      endwhile;
                      else :
                        get_template_part( 'no-results' ); 
                      endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'advance-business' ),
                                'next_text'          => __( 'Next page', 'advance-business' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>',
                            ) );
                        ?>
                    </div> 
                </div>
            </div>
        <?php }else if($left_right == 'Right Sidebar'){ ?>
            <div class="row">
                <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-8 col-md-8'); ?>>
                   <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-business'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content' ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'advance-business' ),
                                'next_text'          => __( 'Next page', 'advance-business' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>',
                            ) );
                        ?>
                     </div> 
                </div>
                <div class="col-lg-4 col-md-4">
                    <?php get_sidebar();?>
                </div>
            </div>
        <?php }else if($left_right == 'One Column'){ ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-business'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                <?php if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content' ); 
                    endwhile;
                    else :
                        get_template_part( 'no-results' ); 
                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'advance-business' ),
                            'next_text'          => __( 'Next page', 'advance-business' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>',
                        ) );
                    ?>
                </div> 
            </div>
        <?php }else if($left_right == 'Three Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 col-md-6'); ?>>
                    <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-business'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                    <?php if ( have_posts() ) :
                      /* Start the Loop */
                      while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content' ); 
                      endwhile;
                      else :
                        get_template_part( 'no-results' ); 
                      endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'advance-business' ),
                                'next_text'          => __( 'Next page', 'advance-business' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>',
                            ) );
                        ?>
                    </div> 
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
            </div>
        <?php }else if($left_right == 'Four Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-1');?></div>
                <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-3'); ?>>
                   <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-business'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                    <?php if ( have_posts() ) :
                      /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/content' ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'advance-business' ),
                                'next_text'          => __( 'Next page', 'advance-business' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>',
                            ) );
                        ?>
                    </div> 
                </div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-2');?></div>
                <div id="sidebar" class="col-lg-3 col-md-3"><?php dynamic_sidebar('sidebar-3');?></div>
            </div>
        <?php }else if($left_right == 'Grid Layout'){ ?>
            <div class="row">
                <div id="post-<?php the_ID(); ?>" <?php post_class('col-lg-9 col-md-9 row'); ?>>
                   <h1 class="entry-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Results For: %s','advance-business'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>

                    <?php if ( have_posts() ) :
                      /* Start the Loop */
                        while ( have_posts() ) : the_post();
                            get_template_part( 'template-parts/grid-layout' ); 
                        endwhile;
                        else :
                            get_template_part( 'no-results' ); 
                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'advance-business' ),
                                'next_text'          => __( 'Next page', 'advance-business' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>',
                            ) );
                        ?>
                    </div> 
                </div>
                <div class="col-lg-3 col-md-3">
                    <?php get_sidebar();?>
                </div>
            </div>
        <?php }?>
        <div class="clearfix"></div>
      </div>
    </div>
</section>

<?php get_footer(); ?>