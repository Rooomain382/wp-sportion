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
define( 'AUTH_KEY',         ',mhr!bf-Wxa[?+KbWHXpk5+BIQL*^s9Q}5i=t8,,IgF_KZ6oN)hXzB0wrY,ew&/>' );
define( 'SECURE_AUTH_KEY',  'R&MJ*yy:`QYsQ$gK;T-D]1tnt saJGGeKe6|22~z|y*?_;^2rWLjIrQ{g5wc}[ej' );
define( 'LOGGED_IN_KEY',    'sh7eG>|#D%LS(--lR$q(*Zm3*&CYH&P(@+v9DJ`(}ySkR={IYy&rjm3_Kke9BdMy' );
define( 'NONCE_KEY',        'eCkUE$_gedssvF[@t|8>oWu]i{p}U%tJAzw/>RjE;PNHb)My,klim:3dd$6??dm}' );
define( 'AUTH_SALT',        'AHchc@DE12wR6/5:jm<zt8]#e[ak/7mZs@CY:`|7T:Nw%{~7 >rvbCuak&&P*Pmx' );
define( 'SECURE_AUTH_SALT', '?Y]=<*DvSarF)K0ku:z*;3omT!dq:ewWNy03(Q3.,;KYsm?Om3E$sXg.`Z-vMIh<' );
define( 'LOGGED_IN_SALT',   ';)a_RK9Uzq82NgF.,{ikJ(KnkW}l*)W8]9.+Oru5$kBm;{cKtn3-^]XF]u|gnMRe' );
define( 'NONCE_SALT',       ',yF}sOeLGZe:nkJgAs,kufMYFfx0VqR(;Yu5HkMVrmZ%wxDa%RD1/R3j/j8I!,E,' );
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
