<?php
/*
 * Plugin Name: Category Locale
 * Plugin URI: https://github.com/keichan34/category-locale
 */

function k_cl_load_locale() {
  if (is_category("japanese") || has_category("japanese")) {
    switch_to_locale("ja");
  }
}
add_action( 'wp', 'k_cl_load_locale' );
