<?php
/**
* Social profile buttons options
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function freshwp_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_freshwp_sociallinks', array( 'title' => esc_html__( 'Social Links', 'freshwp' ), 'panel' => 'freshwp_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'freshwp_options[hide_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_social_buttons_control', array( 'label' => esc_html__( 'Hide Social Buttons', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[hide_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'freshwp_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'freshwp_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_githublink_control', array( 'label' => esc_html__( 'Github URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'freshwp_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_email' ) );

    $wp_customize->add_control( 'freshwp_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'freshwp_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'freshwp' ), 'section' => 'sc_freshwp_sociallinks', 'settings' => 'freshwp_options[rsslink]', 'type' => 'text' ) );

}