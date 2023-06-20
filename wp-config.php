<?php
define( 'WP_CACHE', true );
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_plot_omd' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '127.0.0.1:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<6i?9]$F}p-!^apn?y!9^Y:Gn#8H--`G5B@M&U?`$~C8u XSKr* *CcZ2hw/y+:.' );
define( 'SECURE_AUTH_KEY',  'h2qQU9;N&#{_@D%[^R@qQmU_K}#RjfDeukW6PM,;tfb,GB<DF~ej27m+]p0HdY,!' );
define( 'LOGGED_IN_KEY',    '6];4a{3UhKtT/Csa4_x7;t}0W#o*+kfxXUb{XxJSg<OY?[&(u1h!_;)4zt$1-XWi' );
define( 'NONCE_KEY',        'KzidsttHcil%V?aV;&V<VC+-dhMZ:c{#0v]LDWPT:l~,`1MgqW]SIzBUO8)DeF`$' );
define( 'AUTH_SALT',        '}8P+_kbc8m{iubR1W21qUWzH::ja=?Yl2Cwu^E~1nxgRD}OStI6EMpq~^H@QT,oJ' );
define( 'SECURE_AUTH_SALT', 'ufvt$t Y,yhiIf$k_)C.I0V7lbwU-o1.El{9F}T~[${!(KTMHdM]?Y~.~QAaI}37' );
define( 'LOGGED_IN_SALT',   '?|haGUNtL!V}<6S.Z(kO+t9rJJblA*4yF8kGq;>*B-I&.J/gw31Rt:)v l?##l*<' );
define( 'NONCE_SALT',       '`BTxNiy)}Bs3GOk-QQX.]WyHSt68%cmJwZT<~n[WwqF&79FkoWeaEt&GP fn+?>n' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
