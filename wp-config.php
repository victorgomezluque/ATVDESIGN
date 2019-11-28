<?php

/**
 #ddev-generated: Automatically generated WordPress settings file.
 ddev manages this file and may delete or overwrite the file unless this comment is removed.
 */

/** Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'kSyLuRxFdkiwObkASzUalbQsKuclQAEcfwfQJAwUOuiYfIgcrDWSZDkdoUxbBABf');
define('SECURE_AUTH_KEY',  'eeqGABOSHPbFyOnTQznPWsKFLspFRdqdUJWpoqUxOCKcinjgGdudzAdeCfwACkZn');
define('LOGGED_IN_KEY',    'KgNcWgRAslStkiRQmpbVmRtBFWBocmiuWDSOSijaQaggyooORDMhsgBBZSRoHnZY');
define('NONCE_KEY',        'CZAglQylGHHHmwDuUfTfDedkfMWydfbpthAjvxbaGNuWxoxHClkzbOsFmYXlSDBT');
define('AUTH_SALT',        'HkQmsltjsXvdogrmSyrRFpyZOMRcGtIDLnEhrdCySLEPEQYOGPhkpSgrgoyzcWUS');
define('SECURE_AUTH_SALT', 'UvbiXSpIgFLttLsAvGzlLZNrYCKnHVwAsslcyqTMovBPCoUVQfcCagJsqxbXbUFc');
define('LOGGED_IN_SALT',   'llchBFfrnpnvwZadkGRemfQySvsvKvVtENunAWuHVummZWZGuRxGdgbOdDkglgjr');
define('NONCE_SALT',       'YaBKJuBnZYaKwkHKQvkktSqAekVOSSKESkhSCTqSfFPsuFDMYkAtSLMFauVuNLGb');

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
