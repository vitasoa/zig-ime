<?php
/**
 * The Template for displaying all single posts.
 *
 * @package advance-business
 */

get_header(); ?>

<div class="container">
    <div class="middle-align">
    	<?php
            $left_right = get_theme_mod( 'advance_business_layout_options','Right Sidebar');
            if($left_right == 'Left Sidebar'){ ?>
            <div class="row">
		    	<div id="sidebar" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
				<div class="col-lg-8 col-md-8" id="content-ts">
					<?php while ( have_posts() ) : the_post(); ?>
						<h1><?php the_title();?></h1>
						<div class="metabox">
							<span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>
							<span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
							<span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'advance-business'), __('0 Comments', 'advance-business'), __('% Comments', 'advance-business') ); ?> </span>
						</div>
						<?php if(has_post_thumbnail()) { ?>
							<hr>
							<div class="feature-box">	
								<img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
							</div>
							<hr>					
						<?php } 
						the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'advance-business' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
							
						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'advance-business' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'advance-business' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'advance-business' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'advance-business' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'advance-business' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
		                
		                echo '<div class="clearfix"></div>'; 
						the_tags(); 

		                // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
		            endwhile; // end of the loop. ?>
		            <div class="clearfix"></div>
		       	</div>
		    </div>
	    <?php }else if($left_right == 'Right Sidebar'){ ?>
	    	<div class="row">
		       	<div class="col-lg-8 col-md-8" id="content-ts">
					<?php while ( have_posts() ) : the_post(); ?>
						<h1><?php the_title();?></h1>
						<div class="metabox">
							<span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>
							<span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
							<span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'advance-business'), __('0 Comments', 'advance-business'), __('% Comments', 'advance-business') ); ?> </span>
						</div>
						<?php if(has_post_thumbnail()) { ?>
							<hr>
							<div class="feature-box">	
								<img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
							</div>
							<hr>					
						<?php } 
						the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'advance-business' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
							
						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'advance-business' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'advance-business' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'advance-business' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'advance-business' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'advance-business' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
		                
						the_tags(); 

		                // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
		            endwhile; // end of the loop. ?>
		       	</div>
				<div id="sidebar" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
			</div>
		<?php }else if($left_right == 'One Column'){ ?>
			<div id="content-ts">
				<?php while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title();?></h1>
					<div class="metabox">
						<span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>
						<span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
						<span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'advance-business'), __('0 Comments', 'advance-business'), __('% Comments', 'advance-business') ); ?> </span>
					</div>
					<?php if(has_post_thumbnail()) { ?>
						<hr>
						<div class="feature-box">	
							<img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
						</div>
						<hr>					
					<?php } 
					the_content();

					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'advance-business' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					) );
						
					if ( is_singular( 'attachment' ) ) {
						// Parent post navigation.
						the_post_navigation( array(
							'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'advance-business' ),
						) );
					} elseif ( is_singular( 'post' ) ) {
						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'advance-business' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'advance-business' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'advance-business' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'advance-business' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );
					}
	                
	                echo '<div class="clearfix"></div>';
	                
					the_tags(); 

	                // If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
	            endwhile; // end of the loop. ?>
	       	</div>
	    <?php }else if($left_right == 'Three Columns'){ ?>
	    	<div class="row">
		    	<div id="sidebar" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
				<div class="col-lg-6 col-md-6" id="content-ts">
					<?php while ( have_posts() ) : the_post(); ?>
						<h1><?php the_title();?></h1>
						<div class="metabox">
							<span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>
							<span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
							<span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'advance-business'), __('0 Comments', 'advance-business'), __('% Comments', 'advance-business') ); ?> </span>
						</div>
						<?php if(has_post_thumbnail()) { ?>
							<hr>
							<div class="feature-box">	
								<img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
							</div>
							<hr>					
						<?php } 
						the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'advance-business' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
							
						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'advance-business' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'advance-business' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'advance-business' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'advance-business' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'advance-business' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
		                
		                echo '<div class="clearfix"></div>';
		                
						the_tags(); 

		                // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
		            endwhile; // end of the loop. ?>
		       	</div>
				<div id="sidebar"  class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebar-2'); ?>
				</div>
			</div>
		<?php }else if($left_right == 'Four Columns'){ ?>
			<div class="row">
		    	<div id="sidebar" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
				<div class="col-lg-3 col-md-3" id="content-ts">
					<?php while ( have_posts() ) : the_post(); ?>
						<h1><?php the_title();?></h1>
						<div class="metabox">
							<span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>
							<span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
							<span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'advance-business'), __('0 Comments', 'advance-business'), __('% Comments', 'advance-business') ); ?> </span>
						</div>
						<?php if(has_post_thumbnail()) { ?>
							<div class="feature-box">	
								<img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
							</div>					
						<?php } 
						the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'advance-business' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
							
						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'advance-business' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'advance-business' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'advance-business' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'advance-business' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'advance-business' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
		                
		                echo '<div class="clearfix"></div>';
		                
						the_tags(); 

		                // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
		            endwhile; // end of the loop. ?>
		       	</div>
				<div id="sidebar" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebar-2'); ?>
				</div>
				<div id="sidebar" class="col-lg-3 col-md-3">
					<?php dynamic_sidebar('sidebar-3'); ?>
				</div>
			</div>
		<?php }else if($left_right == 'Grid Layout'){ ?>
			<div class="row">
				<div class="col-lg-8 col-md-8" id="content-ts">
					<?php while ( have_posts() ) : the_post(); ?>
						<h1><?php the_title();?></h1>
						<div class="metabox">
							<span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></span>
							<span class="entry-author"><i class="fas fa-user"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
							<span class="entry-comments"><i class="fas fa-comments"></i> <?php comments_number( __('0 Comment', 'advance-business'), __('0 Comments', 'advance-business'), __('% Comments', 'advance-business') ); ?> </span>
						</div>
						<?php if(has_post_thumbnail()) { ?>
							<hr>
							<div class="feature-box">	
								<img src="<?php the_post_thumbnail_url('full'); ?>" width="100%">
							</div>
							<hr>
						<?php } 
						the_content();

						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'advance-business' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'advance-business' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
							
						if ( is_singular( 'attachment' ) ) {
							// Parent post navigation.
							the_post_navigation( array(
								'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'advance-business' ),
							) );
						} elseif ( is_singular( 'post' ) ) {
							// Previous/next post navigation.
							the_post_navigation( array(
								'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'advance-business' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Next post:', 'advance-business' ) . '</span> ' .
									'<span class="post-title">%title</span>',
								'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'advance-business' ) . '</span> ' .
									'<span class="screen-reader-text">' . __( 'Previous post:', 'advance-business' ) . '</span> ' .
									'<span class="post-title">%title</span>',
							) );
						}
		                
		                echo '<div class="clearfix"></div>';
		                
						the_tags(); 

		                // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
		            endwhile; // end of the loop. ?>
		       	</div>
				<div id="sidebar" class="col-lg-4 col-md-4">
					<?php dynamic_sidebar('sidebar-2'); ?>
				</div>
			</div>
		<?php }?>
	    <div class="clearfix"></div>
    </div>
</div>

<?php get_footer(); ?>