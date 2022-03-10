<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp_sportion' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BTgJ5hO!/GUPFv^b:lvm^#1k4/>f^8EKc2> Y:$bdb~[{>@*]*WB$)ApCh+Z?50P' );
define( 'SECURE_AUTH_KEY',  'pATGgL=C>1Zr1Y|]5%0>a1iX.CclhVgIF1h([t&B;]Fiu; N M=?rPd(*74[`:S]' );
define( 'LOGGED_IN_KEY',    'Q:}bGyNu&0{G*MMXA)(#;)g?NNflJG1Oe;epx;DFpMtKBp7o+OkEFTW!-Gqzkqb!' );
define( 'NONCE_KEY',        'Ow1Z ZbiIhs7FOQ5|~H)8k@R([hQw.cGC)I8>ha3SoS}8E`1ZlpM4 ^B2l8Y7;,)' );
define( 'AUTH_SALT',        'XIk=N`@*qoa^W*;:f24O|#X{W*b ON</<n:0~G@+|_hze^6E.!%Zu#J0*(O6[3Q#' );
define( 'SECURE_AUTH_SALT', 'Rl#GSr+,_BsfU|UR`0UZT}-T/VPb~dwL3E#MRDZZAIRWpKGu@3{?Piqu79vBnat!' );
define( 'LOGGED_IN_SALT',   'bum*cfQA5hKW/AXHU1(dZ!K59Q#(k(I=CQr$xdDq~Ms,; = ,?p?u{ZU+bONiD^v' );
define( 'NONCE_SALT',       'ZN$gjR(8,Zly-^,pye~O@xcx#1Ui4jxY% LVwzjC&YE($E&bspn)|&6jRuGMfJf2' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
