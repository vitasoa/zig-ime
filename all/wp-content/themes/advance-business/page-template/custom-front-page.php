<?php
/**
 * Template Name: Custom home
 */

get_header(); ?>

<?php do_action( 'advance_business_above_slider' ); ?>


<?php if( get_theme_mod( 'advance_business_slider_hide') != '') { ?>
  <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
          <?php $pages = array();
            for ( $count = 1; $count <= 3; $count++ ) {
              $mod = intval( get_theme_mod( 'advance_business_slider_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $pages[] = $mod;
              }
            }
            if( !empty($pages) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $pages,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                $i = 1;
          ?>     
          <div class="carousel-inner" role="listbox">
              <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
                <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                  <img src="<?php the_post_thumbnail_url('full'); ?>"/>
                  <div class="carousel-caption">
                    <div class="inner_carousel">
                      <h2><?php the_title(); ?></h2>
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( advance_business_string_limit_words( $excerpt,20 ) ); ?></p>
                      <div class="know-btn">
                        <a href="<?php the_permalink(); ?>"><?php echo esc_html_e('READ MORE','advance-business'); ?><i class="fas fa-long-arrow-alt-right"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php $i++; endwhile; 
              wp_reset_postdata();?>
          </div>
          <?php else : ?>
              <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          </a>
      </div>
      <div class="clearfix"></div>
  </section>
<?php } ?>

<?php do_action( 'advance_business_below_slider' ); ?>

<?php if( get_theme_mod( 'advance_business_location') != '') { ?>
  <section id="business-contact">
    <div class="container">
      <div class="contact-box">      
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <?php if( get_theme_mod( 'advance_business_location','' ) != '') { ?>
            <div class="contact">
              <div class="row">
                <div class="col-lg-3 col-md-3">
                  <i class="fas fa-map"></i>
                </div>
                <div class="col-lg-9 col-md-9">
                  <p><?php echo esc_html( get_theme_mod('advance_business_location',__('+14 256 265 2589','advance-business') )); ?></p>
                  <p class="heading-line"><?php echo esc_html(get_theme_mod('advance_business_location_title','')); ?> </p>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="col-lg-4 col-md-4">
            <?php if( get_theme_mod( 'advance_business_email','' ) != '') { ?>
             <div class="contact">
                <div class="row">
                  <div class="col-lg-3 col-md-3">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                  <div class="col-lg-9 col-md-9">
                    <p><?php echo esc_html( get_theme_mod('advance_business_email',__('example@123.com','advance-business')) ); ?></p>
                    <p class="heading-line"><?php echo esc_html(get_theme_mod('advance_business_email_title','')); ?> </p>
                  </div>
                </div>
            </div>
            <?php } ?>
          </div>
          <div class="col-lg-4 col-md-4">
             <?php if( get_theme_mod( 'advance_business_contact','' ) != '') { ?>
              <div class="contact">
                <div class="row">
                  <div class="col-lg-3 col-md-3">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="col-lg-9 col-md-9">
                    <p><?php echo esc_html( get_theme_mod('advance_business_contact',__('+14 256 265 2589','advance-business') )); ?></p>
                    <p class="heading-line"><?php echo esc_html(get_theme_mod('advance_business_contact_title','')); ?> </p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php do_action( 'advance_business_below_business_contact' ); ?>

<?php if( get_theme_mod( 'advance_business_projects_title') != '') { ?>
  <section id="latest-projects">
    <div class="container">
        <?php if( get_theme_mod('advance_business_projects_title') != ''){ ?>
          <div class="project_title">
            <h3><?php echo esc_html(get_theme_mod('advance_business_projects_title','')); ?> </h3>
            <hr class="project-hr">
          </div>
        <?php } ?>
        <div class="row">
          <?php 
           $catData =  get_theme_mod('advance_business_projects_category_category');
           if($catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html($catData,'advance-business')));?>
              <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                <div class="col-lg-6 col-md-12">
                  <div class="project-box">
                    <div class="row m-0">
                      <div class="col-lg-6 col-md-6 p-0">
                        <div><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?></div>
                      </div>
                      <div class="col-lg-6 col-md-6 p-0">
                        <div class="project_content">
                          <a href="<?php the_permalink(); ?>" class="" ><h4><?php the_title(); ?></h4></a>
                          <p><?php $excerpt = get_the_excerpt(); echo esc_html( advance_business_string_limit_words( $excerpt,12 ) ); ?></p>
                          <div class="know-btn">
                            <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Know More', 'advance-business' ); ?>"><?php esc_html_e('Read More','advance-business'); ?><i class="fas fa-angle-double-right"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_postdata();
               }
           ?>
        </div>
    </div>
  </section>
<?php }?>

<?php do_action( 'advance_business_below_latest_projects' ); ?>

<div id="content">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</div>

<?php get_footer(); ?>