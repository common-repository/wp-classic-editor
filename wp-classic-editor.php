<?php
/**
 * Plugin Name: WP Classic Editor
 * Version:     1.0.0
 * Plugin URI:  https://wordpress.org/support/plugin/wp-classic-editor/
 * Author:      The Nine Soft
 * Author URI:  http://theninesoft.com/
 * Text Domain: wp-classic-editor
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Description: Enables the WP Classic Editor plugin and the old-style Edit Post screen with TinyMCE, Meta Boxes, etc.
 *
 * Compatible with WordPress 4.6 through 5.0.3+.
 *
 * =>> Read the accompanying readme.txt file for instructions and documentation.
 * =>> Also, visit the plugin's homepage for additional information and updates.
 * =>> Or visit: https://wordpress.org/support/plugin/wp-classic-editor/
 *
 * @package Wp_Classic_Editor
 * @author  The Nine Soft
 * @version 1.0.0
 */

/*
	Copyright (c) 2013-2019 by The Nine Soft

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
*/

defined( 'ABSPATH' ) or die();

if ( ! class_exists( 'b2s_WpClassic_Editor' ) ) :

class b2s_WpClassic_Editor {

	/**
	 * Returns version of the plugin.
	 *
	 * @since 1.0
	 */
	public static function version() {
		return '1.0.0';
	}

	/**
	 * Prevent instantiation.
	 *
	 * @since 1.0
	 */
	private function __construct() {}

	/**
	 * Prevent unserializing an instance.
	 *
	 * @since 1.0
	 */
	private function __wakeup() {}

	/**
	 * Initializes the plugin.
	 */
	public static function init() {
		add_filter('use_block_editor_for_post', '__return_false');
	}

	/**
	 * Performs actual initialization tasks.
	 *
	 * @since 1.5
	 */
	public static function do_init() {
		// Load textdomain.
		load_plugin_textdomain( 'wp-classic-editor' );

	}

} // end b2s_WpClassic_Editor


b2s_WpClassic_Editor::init();

endif; // end if !class_exists()
