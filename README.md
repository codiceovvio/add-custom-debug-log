# Add custom debug log

###### _Little helper plugin to add custom debug notices directly to the default WordPress debug.log_
###### _Current version: v0.4.0_

***

##### The plugin includes 3 functions which act in a quite similar way but with different outputs:

- **"write_log"**
  - _Send a customized output to the WordPress debug.log, using an appropriate function for each type to log, e.g. print_r for an array, var_dump for an object, etc..._
  - _It accepts also a second parameter (boolean) to quit execution after the debug stack point._

- **"print_warning_here"**
  - _Handle console notices via WP_CLI, as well as writing its infos into the main WP log file._

- **"stack_debug"**
  - _Create a stack breakpoint, and prints results to the screen_.
  - _It accepts also a second parameter (boolean) to quit execution after the debug stack point._

***

##### The WP_DEBUG constant in wp-config.php must be set to true for the plugin to actually work:

A useful settings to output all the logs to a file instead of a default screen, can be achieved with the following settings of a debug environment in wp-config.php:

```
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */

// Turns WordPress debugging on
define('WP_DEBUG', true);
// Tells WordPress to log everything to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);
// Doesn't force the PHP 'display_errors' variable to be on
define('WP_DEBUG_DISPLAY', false);
// Turn these off unless needed
define('SCRIPT_DEBUG', false);
define('SAVEQUERIES', false);
// Hides errors from being displayed on-screen
// @ini_set('display_errors', 0);
ini_set( 'display_errors', 0 );
ini_set( 'log_errors', 1 );
ini_set( 'error_log', dirname(__FILE__) . '/wp-content/uploads/debug.log' );
ini_set( 'error_reporting', E_ALL ^ E_NOTICE );
```
