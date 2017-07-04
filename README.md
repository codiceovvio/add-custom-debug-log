# Add custom debug log

##### Little helper plugin to add custom debug notices directly to the default WordPress debug.log


Send a customized output to the WordPress debug.log, using an appropriate function for each type to log, e.g. print_r for an array, var_dump for an object, etc...
It accepts also a second parameter (boolean) to quit execution after the debug stack point.

##### The WP_DEBUG constant in wp-config.php must be set to true for the plugin to actually work:
