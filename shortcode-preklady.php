<?php
/*
Plugin Name: Shortcodes Ultimate překlad
Plugin URI: http://wordpress.org/extend/plugins/shortcodes-ultimate-preklad/
Description: Přeloží plugin shortcodes-ultimate do více jazyků včetně češtiny a slovenštiny. Pro aktuální verzi navštivte web pluginu
Version: 1.0
Author: Expres-Web.cz
Author URI: http://wpguru.eu
Text Domain: app

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Maybe load the Shortcodes Ultimate překlad.
 *
 * @since 1.0
 */
function app_load_textdomain() {
	$mofile = WP_PLUGIN_DIR . '/shortcode-preklad/jazyky/' . apply_filters( 'shortcodes-ultimate_locale', get_locale() ) . '.mo';

	if ( file_exists( $mofile ) )
		return load_textdomain( 'shortcodes-ultimate', $mofile );
}
add_action( 'bp_loaded', 'app_load_textdomain' );
