<?php

/*----------------------------------------------------*/
// Local config
/*----------------------------------------------------*/
// Database
define('DB_NAME', env('DB_NAME'));
define('DB_USER', env('DB_USER'));
define('DB_PASSWORD', env('DB_PASSWORD'));
define('DB_HOST', env('DB_HOST', 'localhost'));

// WordPress URLs
define('WP_HOME', env('WP_HOME'));
define('WP_SITEURL', env('WP_SITEURL'));

// Jetpack
define('JETPACK_DEV_DEBUG', true);

// Encoding
define('THEMOSIS_CHARSET', 'UTF-8');

// Development
define('SAVEQUERIES', env('DEBUG'));
define('WP_DEBUG', env('DEBUG'));
define('WP_DEBUG_DISPLAY', env('DEBUG'));
define('SCRIPT_DEBUG', env('DEBUG'));

// Themosis framework
define('THEMOSIS_ERROR', env('DEBUG'));
define('BS', env('DEBUG'));

if (!WP_DEBUG) {
    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL);
}