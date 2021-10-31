<?php if ( !(powerwp_get_option('hide_social_buttons')) ) { ?>
<div class="powerwp-social-icons clearfix">
<div class="powerwp-social-icons-inner clearfix">
<div class='powerwp-container clearfix'>
    <?php if ( powerwp_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('twitterlink') ); ?>" target="_blank" class="powerwp-social-icon-twitter" title="<?php esc_attr_e('Twitter','powerwp'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('facebooklink') ); ?>" target="_blank" class="powerwp-social-icon-facebook" title="<?php esc_attr_e('Facebook','powerwp'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('googlelink') ); ?>" target="_blank" class="powerwp-social-icon-google-plus" title="<?php esc_attr_e('Google Plus','powerwp'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('pinterestlink') ); ?>" target="_blank" class="powerwp-social-icon-pinterest" title="<?php esc_attr_e('Pinterest','powerwp'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('linkedinlink') ); ?>" target="_blank" class="powerwp-social-icon-linkedin" title="<?php esc_attr_e('Linkedin','powerwp'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('instagramlink') ); ?>" target="_blank" class="powerwp-social-icon-instagram" title="<?php esc_attr_e('Instagram','powerwp'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('flickrlink') ); ?>" target="_blank" class="powerwp-social-icon-flickr" title="<?php esc_attr_e('Flickr','powerwp'); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('youtubelink') ); ?>" target="_blank" class="powerwp-social-icon-youtube" title="<?php esc_attr_e('Youtube','powerwp'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('vimeolink') ); ?>" target="_blank" class="powerwp-social-icon-vimeo" title="<?php esc_attr_e('Vimeo','powerwp'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('soundcloudlink') ); ?>" target="_blank" class="powerwp-social-icon-soundcloud" title="<?php esc_attr_e('SoundCloud','powerwp'); ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('lastfmlink') ); ?>" target="_blank" class="powerwp-social-icon-lastfm" title="<?php esc_attr_e('Lastfm','powerwp'); ?>"><i class="fa fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('githublink') ); ?>" target="_blank" class="powerwp-social-icon-github" title="<?php esc_attr_e('Github','powerwp'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('bitbucketlink') ); ?>" target="_blank" class="powerwp-social-icon-bitbucket" title="<?php esc_attr_e('Bitbucket','powerwp'); ?>"><i class="fa fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('tumblrlink') ); ?>" target="_blank" class="powerwp-social-icon-tumblr" title="<?php esc_attr_e('Tumblr','powerwp'); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('digglink') ); ?>" target="_blank" class="powerwp-social-icon-digg" title="<?php esc_attr_e('Digg','powerwp'); ?>"><i class="fa fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('deliciouslink') ); ?>" target="_blank" class="powerwp-social-icon-delicious" title="<?php esc_attr_e('Delicious','powerwp'); ?>"><i class="fa fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('stumblelink') ); ?>" target="_blank" class="powerwp-social-icon-stumbleupon" title="<?php esc_attr_e('Stumbleupon','powerwp'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('redditlink') ); ?>" target="_blank" class="powerwp-social-icon-reddit" title="<?php esc_attr_e('Reddit','powerwp'); ?>"><i class="fa fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('dribbblelink') ); ?>" target="_blank" class="powerwp-social-icon-dribbble" title="<?php esc_attr_e('Dribbble','powerwp'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('behancelink') ); ?>" target="_blank" class="powerwp-social-icon-behance" title="<?php esc_attr_e('Behance','powerwp'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('codepenlink') ); ?>" target="_blank" class="powerwp-social-icon-codepen" title="<?php esc_attr_e('Codepen','powerwp'); ?>"><i class="fa fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('jsfiddlelink') ); ?>" target="_blank" class="powerwp-social-icon-jsfiddle" title="<?php esc_attr_e('JSFiddle','powerwp'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('stackoverflowlink') ); ?>" target="_blank" class="powerwp-social-icon-stackoverflow" title="<?php esc_attr_e('Stack Overflow','powerwp'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('stackexchangelink') ); ?>" target="_blank" class="powerwp-social-icon-stackexchange" title="<?php esc_attr_e('Stack Exchange','powerwp'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('bsalink') ); ?>" target="_blank" class="powerwp-social-icon-buysellads" title="<?php esc_attr_e('BuySellAds','powerwp'); ?>"><i class="fa fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('slidesharelink') ); ?>" target="_blank" class="powerwp-social-icon-slideshare" title="<?php esc_attr_e('SlideShare','powerwp'); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( powerwp_get_option('skypeusername') ); ?>?chat" class="powerwp-social-icon-skype" title="<?php esc_attr_e('Skype','powerwp'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( powerwp_get_option('emailaddress') ); ?>" class="powerwp-social-icon-email" title="<?php esc_attr_e('Email Us','powerwp'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( powerwp_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( powerwp_get_option('rsslink') ); ?>" target="_blank" class="powerwp-social-icon-rss" title="<?php esc_attr_e('RSS','powerwp'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php endif; ?>
</div>
</div>
</div>
<?php } ?>


<?php if ( !(powerwp_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'powerwp-footer-1' ) || is_active_sidebar( 'powerwp-footer-2' ) || is_active_sidebar( 'powerwp-footer-3' ) || is_active_sidebar( 'powerwp-footer-4' ) ) : ?>
<div class='powerwp-container'>
<div id='powerwp-footer-container' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='clearfix' id='powerwp-footer-widgets'>

<div class='powerwp-footer-widgets-column'>
<?php dynamic_sidebar( 'powerwp-footer-1' ); ?>
</div>

<div class='powerwp-footer-widgets-column'>
<?php dynamic_sidebar( 'powerwp-footer-2' ); ?>
</div>

<div class='powerwp-footer-widgets-column'>
<?php dynamic_sidebar( 'powerwp-footer-3' ); ?>
</div>

<div class='powerwp-footer-widgets-column'>
<?php dynamic_sidebar( 'powerwp-footer-4' ); ?>
</div>

</div>
</div>
</div>
<?php endif; ?>
<?php } ?>


<div class='powerwp-container'>
<div id='powerwp-copyrights-container'>
<div id='powerwp-copyrights'>
<?php if ( powerwp_get_option('footer_text') ) : ?>
  <?php echo esc_html(powerwp_get_option('footer_text')); ?>
<?php else : ?>
  <?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'powerwp' ), esc_html(date_i18n(__('Y','powerwp'))) . ' ' . esc_html(get_bloginfo( 'name' )) ); ?>
<?php endif; ?>
</div>
<div id='powerwp-credits'>
<div id="easywp-credits"><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'powerwp' ), 'ThemesDNA.com' ); ?></a></div>
</div>
</div>
</div>


</div><!-- .powerwp-wrapper -->

<?php wp_footer(); ?>
</body>
</html>