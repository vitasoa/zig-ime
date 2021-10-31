<?php
/**
 * The template for displaying Search Results pages.
 * @package Blogger Hub
 */

get_header(); ?>

<?php
    $left_right = get_theme_mod( 'blogger_hub_layout','Right Sidebar');
    if($left_right == 'Right Sidebar'){ ?>
        <section id="blog_post">    
            <div class="innerlightbox">
                <div class="container">        
                    <div class="col-md-9 col-sm-9">
                        <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','blogger-hub'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                    'next_text'          => __( 'Next page', 'blogger-hub' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>      
                    <div class="col-md-3 col-sm-3"><?php get_sidebar();?></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    <?php }else if($left_right == 'Left Sidebar'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="col-md-3 col-sm-3"><?php get_sidebar();?></div>
                    <div class="col-md-9 col-sm-9">
                        <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','blogger-hub'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                    'next_text'          => __( 'Next page', 'blogger-hub' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
    <?php }else if($left_right == 'One Column'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div class="col-md-12 col-sm-12">
                        <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','blogger-hub'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                    'next_text'          => __( 'Next page', 'blogger-hub' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </section>
    <?php }else if($left_right == 'Three Columns'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-md-6 col-sm-6">
                        <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','blogger-hub'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                    'next_text'          => __( 'Next page', 'blogger-hub' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                    <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2');?></div>               
                </div>
            </div>
        </section>
    <?php }else if($left_right == 'Four Columns'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">
                    <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-1');?></div>
                    <div class="col-md-3 col-sm-3">
                        <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','blogger-hub'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                        <?php if ( have_posts() ) :
                            /* Start the Loop */
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_format() );
                            endwhile;
                              else :
                                get_template_part( 'no-results' ); 
                            endif; 
                        ?>
                        <div class="navigation">
                            <?php
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                    'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                    'next_text'          => __( 'Next page', 'blogger-hub' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div> 
                    <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-2');?></div>
                    <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar('sidebar-3');?></div>
                </div>
            </div>
        </section>
    <?php }else if($left_right == 'Grid Layout'){ ?>
        <section id="blog_post">
            <div class="innerlightbox">
                <div class="container">        
                    <div class="col-md-8 col-sm-8">
                        <h1 class="search-title"><?php /* translators: %s: search term */ printf( esc_html__( 'Search Results for: %s','blogger-hub'), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
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
                                    'prev_text'          => __( 'Previous page', 'blogger-hub' ),
                                    'next_text'          => __( 'Next page', 'blogger-hub' ),
                                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-hub' ) . ' </span>',
                                ) );
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>      
                    <div class="col-md-4 col-sm-4"><?php get_sidebar();?></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
    <?php } ?>

<?php get_footer(); ?>