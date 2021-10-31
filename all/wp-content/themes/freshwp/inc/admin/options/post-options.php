<?php
/**
* Post Options
*
* @package FreshWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license licennse URI, for example : http://www.gnu.org/licenses/gpl-2.0.html
* @author ThemesDNA <themesdna@gmail.com>
*/

function freshwp_post_options($wp_customize) {

    $wp_customize->add_section( 'sc_freshwp_posts', array( 'title' => esc_html__( 'Post Options', 'freshwp' ), 'panel' => 'freshwp_main_options_panel', 'priority' => 260 ) );

    $wp_customize->add_setting( 'freshwp_options[posts_heading]', array( 'default' => esc_html__( 'Recent Posts', 'freshwp' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'freshwp_posts_heading_control', array( 'label' => esc_html__( 'HomePage Posts Heading', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[posts_heading]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'freshwp_options[thumbnail_link]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_thumbnail_link' ) );

    $wp_customize->add_control( 'freshwp_thumbnail_link_control', array( 'label' => esc_html__( 'Thumbnail Link', 'freshwp' ), 'description' => __('Do you want single post thumbnail to be linked to their post?', 'freshwp'), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[thumbnail_link]', 'type' => 'select', 'choices' => array( 'yes' => __('Yes', 'freshwp'), 'no' => __('No', 'freshwp') ) ) );

    $wp_customize->add_setting( 'freshwp_options[post_style]', array( 'default' => 'list', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_post_style' ) );

    $wp_customize->add_control( 'freshwp_post_style_control', array( 'label' => esc_html__( 'Non-Singular Posts Style', 'freshwp' ), 'description' => __('Select the post style you want for home/categories/tags/archive/search-results pages.', 'freshwp'), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[post_style]', 'type' => 'select', 'choices' => array( 'list' => __('List', 'freshwp'), 'full' => __('Full', 'freshwp') ) ) );

    $wp_customize->add_setting( 'freshwp_options[read_more_length]', array( 'default' => 25, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_read_more_length' ) );

    $wp_customize->add_control( 'freshwp_read_more_length_control', array( 'label' => esc_html__( 'Auto Post Summary Length', 'freshwp' ), 'description' => __('Enter the number of words need to display in the post summary. Default is <b>25</b> words.', 'freshwp'), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[read_more_length]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'freshwp_options[read_more_text]', array( 'default' => esc_html__( 'Continue Reading...', 'freshwp' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'freshwp_read_more_text_control', array( 'label' => esc_html__( 'Read More Text', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[read_more_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_posted_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_posted_date_control', array( 'label' => esc_html__( 'Hide Posted Date', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_posted_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_post_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_post_author_control', array( 'label' => esc_html__( 'Hide Post Author', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_post_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_post_categories]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_post_categories_control', array( 'label' => esc_html__( 'Hide Post Categories', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_post_categories]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_post_tags]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_post_tags_control', array( 'label' => esc_html__( 'Hide Post Tags', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_post_tags]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_comments_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_comments_link_control', array( 'label' => esc_html__( 'Hide Comment Link', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_comments_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_post_edit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_post_edit_control', array( 'label' => esc_html__( 'Hide Post Edit Link', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_post_edit]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_thumbnail_control', array( 'label' => esc_html__( 'Hide Thumbnails from Every Page', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_thumbnail_single]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_thumbnail_single_control', array( 'label' => esc_html__( 'Hide Thumbnails from Posts/Pages', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_thumbnail_single]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_post_snippet]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_post_snippet_control', array( 'label' => esc_html__( 'Hide Post Snippet', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_post_snippet]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_read_more_button]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_read_more_button_control', array( 'label' => esc_html__( 'Hide Read More Button', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_read_more_button]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'freshwp_options[hide_author_bio_box]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'freshwp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'freshwp_hide_author_bio_box_control', array( 'label' => esc_html__( 'Hide Author Bio Box', 'freshwp' ), 'section' => 'sc_freshwp_posts', 'settings' => 'freshwp_options[hide_author_bio_box]', 'type' => 'checkbox', ) );

}