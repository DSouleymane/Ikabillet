<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ikabillet01' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r#m~2uCJnADp.m,XmLN;W}=1U*Z7<1hJS=m&|tj>axfb7Gr79GgC@1JDyTL++WD,' );
define( 'SECURE_AUTH_KEY',  '.:a#^)}fY$T9f]Idt$/b[wky@YcLf4ouPDP:wAmT{cB%-tXvmJ/h^+K4Sr0b/M-Q' );
define( 'LOGGED_IN_KEY',    'lopT_&K3MjS ~[G&-Sq}?/I7i1jw9jie%5=^~w;qBGk3g{:]qB7xQAgfC>6cR}0+' );
define( 'NONCE_KEY',        '7:i,u MN5,^]<(i;CYhUr`_`qdO,]=p2Wdcd#{KnX[:Jy5J%d<50el&_7[=S6a=A' );
define( 'AUTH_SALT',        'K4VbbgJ dF%hfC=%$~Wing,UpM.,Gr3_?&,xOrQNA%HpT_hrk5>j1j%36#;iF-Y,' );
define( 'SECURE_AUTH_SALT', 'Xb/;kI nqId?Z<C?#J 5(1%v^wc`@q[uaWUcsgaF*ahdHI|q-;%>tbmv1t[Yl=:E' );
define( 'LOGGED_IN_SALT',   '_?gMhG{H<2d#eO:KKYhD{^g-a@Fe`7_jBWv]fr#!^WHkqForjLcRpu2M|R+B^OIk' );
define( 'NONCE_SALT',       '|S.82HvvW}GdszN;#7#}[dD!1DpI9r$fT#SpaX$~AuF$>HHt0_sHmJ2($0_mXdVU' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
