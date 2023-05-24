<?php
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
define( 'DB_NAME', 'bdkoulousite' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'zCrPa9%y23_[F}4ZVH*kxh8S>@c/xm!S,=@gmX_Gz=)~w#}bal,J9h~qP^?f?ep0' );
define( 'SECURE_AUTH_KEY',  '{WR@b%3<|hooAEAgpW(ge&XrzF<x<nFgLTHY72Pxj9>JXdO|H$bIMYKl0}C)H;lB' );
define( 'LOGGED_IN_KEY',    '4ITO!#{/]x9%&?,~Q+.1pa[o9!rV}p}ik7VMLr6C>ysIgIv0cZ3QSoMQK;z8c*U,' );
define( 'NONCE_KEY',        'RND}DS};,,%-v6vi,3pr(r_9}X(yF5R4o4bs%_^PbNy5MZW_(9r37jtbhX3#G2%0' );
define( 'AUTH_SALT',        '>0,iwJy9Y^e}:0adyZBquodS=d;lUFw.MY.E<^p9S.IXz{HSUCrAgu(-AtT8-jiN' );
define( 'SECURE_AUTH_SALT', 'Ra(BIaJ`G~?TT7c1L`q@cF< oF|X0?:NmmpZG(m{ :!=Vn$]qwxaKZCut6T5{{Hv' );
define( 'LOGGED_IN_SALT',   'B!P38(5bs#f`@W0RG1;MF}1qp{M[[EYt9nKFTTWg4$]dLJK!ZdfPjYloIlj%%H`3' );
define( 'NONCE_SALT',       'Cv<R.G;6!#7>-d !q&=~d%j}&P:2S2%w!1lqUbK9)(B8`%E=bRb[]~FL)cC]rf-i' );
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
