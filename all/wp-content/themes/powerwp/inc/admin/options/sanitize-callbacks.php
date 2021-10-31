<?php
function powerwp_sanitize_checkbox( $input ) {
    return ( ( isset( $input ) && ( true == $input ) ) ? true : false );
}

function powerwp_sanitize_html( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

function powerwp_sanitize_thumbnail_link( $input, $setting ) {
    $valid = array('yes','no');
    if ( in_array( $input, $valid ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function powerwp_sanitize_post_style( $input, $setting ) {
    $valid = array('standard','list','grid','full','featured');
    if ( in_array( $input, $valid ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function powerwp_sanitize_email( $input, $setting ) {
    if ( '' != $input && is_email( $input ) ) {
        $input = sanitize_email( $input );
        return $input;
    } else {
        return $setting->default;
    }
}

function powerwp_sanitize_related_posts_number( $input, $setting ) {
    $valid = array(4, 8, 12, 16);
    if ( in_array( $input, $valid ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function powerwp_sanitize_fonts( $input, $setting ) {
    global $powerwp_font_families;
 
    if ( array_key_exists( $input, $powerwp_font_families ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function powerwp_sanitize_font_sizes( $input, $setting ) {
    global $powerwp_font_sizes;
 
    if ( array_key_exists( $input, $powerwp_font_sizes ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function powerwp_sanitize_font_weights( $input, $setting ) {
    global $powerwp_font_weights;
 
    if ( array_key_exists( $input, $powerwp_font_weights ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function powerwp_sanitize_font_styles( $input, $setting ) {
    global $powerwp_font_styles;
 
    if ( array_key_exists( $input, $powerwp_font_styles ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function powerwp_sanitize_line_height( $input, $setting ) {
    $input = (float) $input;
    return ( 0 < $input ) ? $input : $setting->default;
}

function powerwp_sanitize_font_subsets( $input, $setting ) {
    global $powerwp_font_subsets;

    foreach ($input as $value) {
        if ( !array_key_exists( $value, $powerwp_font_subsets ) ) {
            return $setting->default;
        }
    }
    return $input;
}

function powerwp_sanitize_read_more_length( $input, $setting ) {
    $input = absint( $input ); // Force the value into non-negative integer.
    return ( 0 < $input ) ? $input : $setting->default;
}