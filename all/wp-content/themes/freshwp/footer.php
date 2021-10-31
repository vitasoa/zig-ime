<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php if ( !(freshwp_get_option('hide_social_buttons')) ) { ?>
<div class='freshwp-social-icons-outer-container'>
<div class='freshwp-container clearfix'>
<div class="freshwp-social-icons clearfix">
<div class="freshwp-social-icons-inner clearfix">
    <?php if ( freshwp_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('twitterlink') ); ?>" target="_blank" class="freshwp-social-icon-twitter" title="<?php esc_attr_e('Twitter','freshwp'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('facebooklink') ); ?>" target="_blank" class="freshwp-social-icon-facebook" title="<?php esc_attr_e('Facebook','freshwp'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('googlelink') ); ?>" target="_blank" class="freshwp-social-icon-google-plus" title="<?php esc_attr_e('Google Plus','freshwp'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('pinterestlink') ); ?>" target="_blank" class="freshwp-social-icon-pinterest" title="<?php esc_attr_e('Pinterest','freshwp'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('linkedinlink') ); ?>" target="_blank" class="freshwp-social-icon-linkedin" title="<?php esc_attr_e('Linkedin','freshwp'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('instagramlink') ); ?>" target="_blank" class="freshwp-social-icon-instagram" title="<?php esc_attr_e('Instagram','freshwp'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('flickrlink') ); ?>" target="_blank" class="freshwp-social-icon-flickr" title="<?php esc_attr_e('Flickr','freshwp'); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('youtubelink') ); ?>" target="_blank" class="freshwp-social-icon-youtube" title="<?php esc_attr_e('Youtube','freshwp'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('vimeolink') ); ?>" target="_blank" class="freshwp-social-icon-vimeo" title="<?php esc_attr_e('Vimeo','freshwp'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('soundcloudlink') ); ?>" target="_blank" class="freshwp-social-icon-soundcloud" title="<?php esc_attr_e('SoundCloud','freshwp'); ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('lastfmlink') ); ?>" target="_blank" class="freshwp-social-icon-lastfm" title="<?php esc_attr_e('Lastfm','freshwp'); ?>"><i class="fa fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('githublink') ); ?>" target="_blank" class="freshwp-social-icon-github" title="<?php esc_attr_e('Github','freshwp'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('bitbucketlink') ); ?>" target="_blank" class="freshwp-social-icon-bitbucket" title="<?php esc_attr_e('Bitbucket','freshwp'); ?>"><i class="fa fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('tumblrlink') ); ?>" target="_blank" class="freshwp-social-icon-tumblr" title="<?php esc_attr_e('Tumblr','freshwp'); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('digglink') ); ?>" target="_blank" class="freshwp-social-icon-digg" title="<?php esc_attr_e('Digg','freshwp'); ?>"><i class="fa fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('deliciouslink') ); ?>" target="_blank" class="freshwp-social-icon-delicious" title="<?php esc_attr_e('Delicious','freshwp'); ?>"><i class="fa fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('stumblelink') ); ?>" target="_blank" class="freshwp-social-icon-stumbleupon" title="<?php esc_attr_e('Stumbleupon','freshwp'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('redditlink') ); ?>" target="_blank" class="freshwp-social-icon-reddit" title="<?php esc_attr_e('Reddit','freshwp'); ?>"><i class="fa fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('dribbblelink') ); ?>" target="_blank" class="freshwp-social-icon-dribbble" title="<?php esc_attr_e('Dribbble','freshwp'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('behancelink') ); ?>" target="_blank" class="freshwp-social-icon-behance" title="<?php esc_attr_e('Behance','freshwp'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('codepenlink') ); ?>" target="_blank" class="freshwp-social-icon-codepen" title="<?php esc_attr_e('Codepen','freshwp'); ?>"><i class="fa fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('jsfiddlelink') ); ?>" target="_blank" class="freshwp-social-icon-jsfiddle" title="<?php esc_attr_e('JSFiddle','freshwp'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('stackoverflowlink') ); ?>" target="_blank" class="freshwp-social-icon-stackoverflow" title="<?php esc_attr_e('Stack Overflow','freshwp'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('stackexchangelink') ); ?>" target="_blank" class="freshwp-social-icon-stackexchange" title="<?php esc_attr_e('Stack Exchange','freshwp'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('bsalink') ); ?>" target="_blank" class="freshwp-social-icon-buysellads" title="<?php esc_attr_e('BuySellAds','freshwp'); ?>"><i class="fa fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('slidesharelink') ); ?>" target="_blank" class="freshwp-social-icon-slideshare" title="<?php esc_attr_e('SlideShare','freshwp'); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( freshwp_get_option('skypeusername') ); ?>?chat" class="freshwp-social-icon-skype" title="<?php esc_attr_e('Skype','freshwp'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( freshwp_get_option('emailaddress') ); ?>" class="freshwp-social-icon-email" title="<?php esc_attr_e('Email Us','freshwp'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( freshwp_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( freshwp_get_option('rsslink') ); ?>" target="_blank" class="freshwp-social-icon-rss" title="<?php esc_attr_e('RSS','freshwp'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php endif; ?>
</div>
</div>
</div>
</div>
<?php } ?>


<?php if ( !(freshwp_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'freshwp-footer-1' ) || is_active_sidebar( 'freshwp-footer-2' ) || is_active_sidebar( 'freshwp-footer-3' ) || is_active_sidebar( 'freshwp-footer-4' ) ) : ?>
<div class='freshwp-footer-outer-container'>
<div class='freshwp-container'>
<div id='freshwp-footer-container' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='clearfix' id='freshwp-footer-widgets'>

<div class='freshwp-footer-widgets-column'>
<?php dynamic_sidebar( 'freshwp-footer-1' ); ?>
</div>

<div class='freshwp-footer-widgets-column'>
<?php dynamic_sidebar( 'freshwp-footer-2' ); ?>
</div>

<div class='freshwp-footer-widgets-column'>
<?php dynamic_sidebar( 'freshwp-footer-3' ); ?>
</div>

<div class='freshwp-footer-widgets-column'>
<?php dynamic_sidebar( 'freshwp-footer-4' ); ?>
</div>

</div>
</div>
</div>
</div>
<?php endif; ?>
<?php } ?>


<div class='freshwp-copyrights-outer-container'>
<div class='freshwp-container'>
<div id='freshwp-copyrights-container'>
<div id='freshwp-copyrights'>
<?php if ( freshwp_get_option('footer_text') ) : ?>
  <?php echo esc_html(freshwp_get_option('footer_text')); ?>
<?php else : ?>
  <?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'freshwp' ), esc_html(date_i18n(__('Y','freshwp'))) . ' ' . esc_html(get_bloginfo( 'name' )) ); ?>
<?php endif; ?>
</div>
<div id="freshwp-credits"><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'freshwp' ), 'ThemesDNA.com' ); ?></a></div>
</div>
</div>
</div>


</div><!-- .freshwp-wrapper -->

<?php wp_footer(); ?>
</body>
</html>