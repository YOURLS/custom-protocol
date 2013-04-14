<?php
/*
Plugin Name: Custom Protocols
Plugin URI: http://yourls.org/
Description: Add custom protocol <code>blah://</code> for trusted users, blacklist all but <code>http</code> and <code>https</code> for others
Version: 1.0
Author: Ozh
Author URI: http://ozh.org/
*/

// Hook into 'kses_allowed_protocols' to modify array. See functions-kses.php/yourls_kses_init()
yourls_add_filter( 'kses_allowed_protocols', 'customproto_allowed_protocols' );

// Whitelist or blacklist protocols depending on user context
function customproto_allowed_protocols( $protocols ) {

	if( yourls_is_valid_user() && yourls_is_admin() ) {
		// if user is logged in, or valid cookie exists on the computer, and we're in admin area:
		// add custom protocol 'blah://' to authorized protocols
		$protocols[] = 'blah://';
	} else {
		// if no known user: remove all protocols except http & https
		$protocols = array( 'http://', 'https://' );
	}

	return $protocols;
}

