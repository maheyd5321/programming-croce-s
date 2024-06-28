<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Globo_Sail' );

/** Database username */
define( 'DB_USER', 'GloboSail' );

/** Database password */
define( 'DB_PASSWORD', 'gorib12' );

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
define( 'AUTH_KEY',         ' #0%yPq0E|8;Nqh+%n(@Kbzl=rvG+*2M82L3j>Ut5}SrK7+6}{A}^?5MBJ&40>CZ' );
define( 'SECURE_AUTH_KEY',  'C%__1*B;9,OG2GOz_`BVLHWK{#k|;[Q[g.BxRi|XPS#&A:{D06>+cO{Yl}}c|;2x' );
define( 'LOGGED_IN_KEY',    'tw7-zH7zZsek4gwq{<A}$D7H$Y,&{Uo~G1=~ooB(NnNcI)Dk-A(fRaX~RMCB8okP' );
define( 'NONCE_KEY',        '__y=Hb]C:_awuQ[p!E#9H>CF84eJzjB%JlT1|{^cl&,4u[Y:)bRW@rQ+#oeo|7>p' );
define( 'AUTH_SALT',        '3$JP_0dP[Ir[!v$xcQ/mdtyXs/t`RXx~~ u%RKR}#HGd)|Eg#YOGIT3JthBn.U[H' );
define( 'SECURE_AUTH_SALT', 'a+5&z1C-8)Paj9s~5n=I|;mZ+ox7RH} Q!3)N2X.p[{@GPSkwnK)!FIACCt?<%R&' );
define( 'LOGGED_IN_SALT',   'Dd]3v`O<GD_t.Ue(6<:v8B:^4dqDb`Y{kg?p =S6sg]-(O/+`I6*&|O^8mV &F:}' );
define( 'NONCE_SALT',       'OL_%[$@d/*iw8$Bhe7lM;/ ?u6P0[3Q{XdE>jmQj=1av~&~6PKjDA|J%CgwzRq~W' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
