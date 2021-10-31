<?php
function powerwp_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_powerwp_sociallinks', array( 'title' => esc_html__( 'Social Links', 'powerwp' ), 'panel' => 'powerwp_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'powerwp_options[hide_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'powerwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'powerwp_hide_social_buttons_control', array( 'label' => esc_html__( 'Hide Social Buttons', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[hide_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'powerwp_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'powerwp_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'powerwp_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_githublink_control', array( 'label' => esc_html__( 'Github URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'powerwp_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'powerwp_sanitize_email' ) );

    $wp_customize->add_control( 'powerwp_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'powerwp_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'powerwp_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'powerwp' ), 'section' => 'sc_powerwp_sociallinks', 'settings' => 'powerwp_options[rsslink]', 'type' => 'text' ) );

}