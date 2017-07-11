<?php

/**
 * Add custom debug Log
 *
 * @package     AddCustomDebugLog
 * @author      Codice Ovvio
 * @copyright   2016 Codice Ovvio
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Add Custom Debug Log
 * Plugin URI:  http://github.com/codiceovvio/add-custom-debug-log
 * Description: Little helper plugin to add custom debug notices directly to the default WordPress debug.log file. The WP_DEBUG constant in wp-config.php must be set to true for the plugin to actually work.
 * Version:     0.3.0
 * Author:      Codice Ovvio
 * Author URI:  http://github.com/codiceovvio
 * Text Domain: none
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
Online: http://www.gnu.org/licenses/gpl.txt
*/

if ( ! function_exists( 'write_log' ) ) {

	/**
	 * A custom log for a string, array or object
	 *
	 * Handles the correct type of log for each variable type passed.
	 * @param mixed $log string, array or object to debug.
	 * @param bool $die whether to exit script execution or not.
	 *
	 * @example to log some information:
	 *          write_log( "The post {$post_to_track} was accessed by {$user_id}" );
	 * @return mixed
	 */
	function write_log( $log, $die ) {

		if ( is_wp_error( $log ) ) {
			$error_string = $log->get_error_message();
			error_log( $error_string );
		} elseif ( is_array( $log ) || is_object( $log ) ) {
			ob_start();
			var_dump( $string );
			$content = ob_get_contents();
			ob_end_clean();
			error_log( print_r( $content, true ) );
		} else {
			error_log( $log );
		}

		if ( true == $die ) {
			die();
		}

	}
}
