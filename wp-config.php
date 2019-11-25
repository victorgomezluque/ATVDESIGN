<?php

/**
 #ddev-generated: Automatically generated WordPress settings file.
 ddev manages this file and may delete or overwrite the file unless this comment is removed.
 */

/** Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'ooNPHkpZiiBVYFtqrJsVXRPMxUqpOfismriwiAUCBErnbJluheRcyhIKzbzaWTep');
define('SECURE_AUTH_KEY',  'oyIWdMewoSsoWSGAiSjPKBALPMnsuldsErUDTJDRIMNwAfsudnGdCwpHCFxrZINe');
define('LOGGED_IN_KEY',    'HeZYbqpaIQocdhihlCxQUQSkYolkxzCAexTGlPguqrybqPmRDkRsrcKyhpiXYxMq');
define('NONCE_KEY',        'ihqxCphudalVfERDwJBFClJtQvgIKoTLnTndkkfHjNIxyhFzfnqUaFgwsHoSFlTs');
define('AUTH_SALT',        'XCBRftBOgTIIiIfrEGLeTUvSpRxXVKtRKRjFPwBualRudYBlIXKWMvpVttqzVNdL');
define('SECURE_AUTH_SALT', 'TEMCsOOcQXvozQcJtdHLPeVDZsvAmGfMFyQglkhzvcQXGUaNdRAfNTatSKuPhCTN');
define('LOGGED_IN_SALT',   'zYfsBPOSWHqWqenOzFKNhYOQBCyjebMJnhNzQDCtEpELVtqFoxTyHPERrtbAMJSx');
define('NONCE_SALT',       'ZYeKUHEmwpyssZPQMKXerCrMtEEwHEIsNFcIQEpSQThRiXASuSOBzZjklmWYEUNW');

/** Absolute path to the WordPress directory. */
define('ABSPATH', dirname(__FILE__) . '/');

// Include for settings managed by ddev.
$ddev_settings = dirname(__FILE__) . '/wp-config-ddev.php';
if (is_readable($ddev_settings) && !defined('DB_USER')) {
	require_once($ddev_settings);
}

/** Include wp-settings.php */
if (file_exists(ABSPATH . '/wp-settings.php')) {
	require_once ABSPATH . '/wp-settings.php';
}
