<?php
/**
* Controls the reporting of some errors and warnings
* @link https://developer.wordpress.org/apis/wp-config-php/#configure-error-logging
*/
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/**
* Displays error message instead of white screen when plugins causes fatal error
* @link https://developer.wordpress.org/apis/wp-config-php/#wp-disable-fatal-error-handler
*/
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );

/**
* Force WordPress to use the “dev” versions of scripts and stylesheets
* @link https://developer.wordpress.org/apis/wp-config-php/#script-debug
*/
define( 'SCRIPT_DEBUG', false );

/**
* JavaScript files are concatenated into one URL
* @link https://developer.wordpress.org/apis/wp-config-php/#disable-javascript-concatenation
*/
define( 'CONCATENATE_SCRIPTS', true );

/**
* Activate WordPress cache
* @link https://developer.wordpress.org/apis/wp-config-php/#cache
*/
define( 'WP_CACHE', false );

/**
* Controls the number of days before WordPress permanently deletes posts, pages...
* @link https://developer.wordpress.org/apis/wp-config-php/#empty-trash
*/
define('EMPTY_TRASH_DAYS', 30);

/**
* Specify the Number of post Revisions
* @link https://developer.wordpress.org/apis/wp-config-php/#specify-the-number-of-post-revisions
*/
define( 'WP_POST_REVISIONS', 5 );

/**
* Modify autosave interval for post
* @link https://developer.wordpress.org/apis/wp-config-php/#modify-autosave-interval
*/
define('AUTOSAVE_INTERVAL', 360);
