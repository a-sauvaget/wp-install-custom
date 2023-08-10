<?php
/**
 * @link https://developer.wordpress.org/apis/wp-config-php/#configure-error-logging
 */
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/**
* @link https://developer.wordpress.org/apis/wp-config-php/#wp-disable-fatal-error-handler
*/
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );

/**
* @link https://developer.wordpress.org/apis/wp-config-php/#script-debug
*/
define( 'SCRIPT_DEBUG', false );

/**
* @link https://developer.wordpress.org/apis/wp-config-php/#disable-javascript-concatenation
*/
define( 'CONCATENATE_SCRIPTS', true );


/**
* @link https://developer.wordpress.org/apis/wp-config-php/#cache
*/
define( 'WP_CACHE', false );

/**
* @link https://developer.wordpress.org/apis/wp-config-php/#empty-trash
*/
define('EMPTY_TRASH_DAYS', 30);

/**
* @link https://developer.wordpress.org/apis/wp-config-php/#specify-the-number-of-post-revisions
*/
define( 'WP_POST_REVISIONS', 5 );

/**
* @link https://developer.wordpress.org/apis/wp-config-php/#modify-autosave-interval
*/
define('AUTOSAVE_INTERVAL', 360);
