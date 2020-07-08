<?php
/*
 * Plugin Name: Category Locale
 * Plugin URI: https://keita.blog/category-locale/
 * License: GPL v3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Author: Keitaroh Kobayashi
 * Author URI: https://keita.blog/
 * Requires at least: 4.7
 * Requires PHP: 5.6
 */

function k_cl_load_locale() {
  if (is_category("japanese") || (is_singular() && has_category("japanese"))) {
    switch_to_locale("ja");
  }
}
add_action( 'wp', 'k_cl_load_locale' );
