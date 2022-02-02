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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CyQpozqIKUw1ktgLcEs/kb5n2NTJ321unFo1Mcc4ICTuCG/8qnINmf4rIIP7GJCeHOLi1a7mMdGE5zcXq/Lv4A==');
define('SECURE_AUTH_KEY',  'tuDK3q5mamPonwG7NnwL52cc+JIZMpKqx8PanVbXAsLiispkJQD82ED1+Aw0qufmSBFyn63PkBsdOQ4Cy+ti8Q==');
define('LOGGED_IN_KEY',    'Pemq02PRSEiYLPRXmZ2tdqRsxQqGl7jqQ0tinq40itVyqcaq9PTzfTYB0gLOdQxKhkPlWGbaxi4zfSFVA+tzJg==');
define('NONCE_KEY',        'iEzEHNU/7L/QojwS1OrdnwhIwQgkV7NHgm0/GhLNWKAeGzFqtvpeleS+VrazzyNNDdykO4io6Gro5/Nv6aGZ1g==');
define('AUTH_SALT',        'hTR7tx9PEAqbPpRFo9550dRC3f9cvLEvhfvTUzhTeX9WbyPz0lBnAWP0twZlesMG9Vk73+wXv1Nm8er48Y/4aA==');
define('SECURE_AUTH_SALT', 'dP+PyrNPiIR9HuFWIoAGp9kaAY3gOTxD51g4uWKNn4T0pezpf9L3auwfS2WcOMPk7RTHXXBkOCCGMhYCaIMxPg==');
define('LOGGED_IN_SALT',   'nXlq4JwDzvm64/3RUEgAE80DBcZcd+GvlrX0YMVhcCp7jDoFxAorgBOYbxYUHO3V1RBT/2kl2JyAz5YCvhoYDg==');
define('NONCE_SALT',       '/wAVmze+7ljqSMPIZNxR8yG/QEVzsQ65T4abYq79mPBCFQTKtFArVkr7ZpQwdOm5PHnULCO3DAsYHOywU2oYYA==');
define('JWT_AUTH_SECRET_KEY', 'cABk1LBo>7<-22-<.d7WX9VKq::pB?n6g-8#iHb=Es)l;3fX4sqhVm,3Z]PuA,%8');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
