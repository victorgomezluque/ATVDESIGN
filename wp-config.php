<?php

/**
 #ddev-generated: Automatically generated WordPress settings file.
 ddev manages this file and may delete or overwrite the file unless this comment is removed.
 */

/** Authentication Unique Keys and Salts. */
define('AUTH_KEY',         'bXIlmcTfHHmHaSIgEPfxjJNPrzBaneJcCcLHvfjmcOWYjZTgHIdrbyZZwDWzYbWT');
define('SECURE_AUTH_KEY',  'PgWEprCOMIEyuREixSAwfLSkXLJUArAxWWAYFlLxVfZopOMiWNTLXqeeKXEALuII');
define('LOGGED_IN_KEY',    'nXalZKqZdkjeotqCtioysrRrnZoZGQvPReppfqSKtWnTFtXJmifMJNUPhEelZkGY');
define('NONCE_KEY',        'DGtpxrFYNbufyGupLWaVPmVVGrSusXYLpVKdxTsWSREWecjxIzbXzDRSZsshfzgO');
define('AUTH_SALT',        'DzoPzPxpZmJBomnsOBSiGRcKQFkADRLTxMxseQdUVPWJQMTVBSYhwsfFpglKakyj');
define('SECURE_AUTH_SALT', 'GVEHKGobFvluzdFssofhZnQnNlTCXfsXvdAdOGnyMOQORkuxYfTfChEsFLRlxCdv');
define('LOGGED_IN_SALT',   'KQEDjXFjWtfAFjaBbJDjmsbslewzcQDUtCVsomRkBOniUfMKvZLILqvrBtIKphTE');
define('NONCE_SALT',       'ikwZOEceKKxDbQQqWawEfafBvjOMGruOHDmWklqwdmRfflPlsIpndUVcPrvJqHCX');

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
