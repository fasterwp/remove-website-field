<?php
/**
 * Plugin Name: Remove Website Field from Comments
 * Plugin URI: https://github.com/fasterwp
 * Description: Simple utility plugin that removes the website field from the standard WordPress comments form.
 * Version: 1.0
 * Author: Andrei Chira
 * Author URI: https://simplenet.ro/
 */

function remove_website_field( $fields ) {
    if ( isset( $fields['url'] ) ) {
        unset( $fields['url'] );
    }
    return $fields;
}

add_filter( 'comment_form_default_fields', 'remove_website_field' );
