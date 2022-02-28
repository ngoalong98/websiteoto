<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websiteoto' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'my6KRz/S=gRGdiN#m8b/MJ_,c*7Nk6igc^T5ly&Te=R4V&>uBk%Rua f=kJ6e:A1' );
define( 'SECURE_AUTH_KEY',  'f)Mf^^wEs8o_15cp7!9%n/{u!P.lz}i.b,1I5.n$%nuGS(Q_-S2fg}pu>/-2#5^/' );
define( 'LOGGED_IN_KEY',    'G;lr`457Ul[XMR}*o&eA/zE7q0)+E!Z1KSCU^w_1rE_VNZ[oG4F[C{&NM!PI(Bex' );
define( 'NONCE_KEY',        'JW!vE01%vJz~]}bxmlvyeHKWp1)(-`.#V.Wd6CM2`gc#^~N$lfrk5AhX#Fehiy:d' );
define( 'AUTH_SALT',        '`JCUqGM(7M@{[dV^8lyiYxYBo2n]lXISX:ZP1n>F&P&jOMQO+*mTMY>4$F$3R|w2' );
define( 'SECURE_AUTH_SALT', 'B;Z10l&dzdH.q85{cGjXlBTF<B4?C50r|aO>B-q;6}]WHk!D)0i-]tt!K{7Tu(!G' );
define( 'LOGGED_IN_SALT',   'tfajFEy]z}(L.|-0,:~?U!,XAc*Tj0_yqNydJ@JI!7_@/Z!So&]`MlZe( !wNHuS' );
define( 'NONCE_SALT',       '5*)1x`?>[yk2p=bNETdp4Cu(q~W#+BJ#Qj1g2XD~A/*$<`D=K 6iLPQaM+2VM5eD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
