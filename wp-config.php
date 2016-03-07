<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'topten_v2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9[k{U2F0qRvj!br8Id}yVhhQTxIX%H/&G%G(S|EzsD4}b|qJ6++*~,l2:mrNYP^J');
define('SECURE_AUTH_KEY',  '#wv8+~FoMY6R1{eE&s!n+KtU+&l OD:S?/]C)k+^$j9QjkNn]TH>VwhCRdYQ{Wk%');
define('LOGGED_IN_KEY',    ']waYhu+14dj].4(V|Lme[^JBlCHa<H+fiF))ptVguP| ::88tqiQ]Vo1t,}?aaL8');
define('NONCE_KEY',        'iukC+.:iH==NjC)#.LewyIwY-YG%F&Yl;G,hIMs6:AkNgzKK}dbW9FpJ.wGqyk|v');
define('AUTH_SALT',        'kt=/t7,bOReH UU^|U1M|5o*u.t8Jd21)IBX_Ck7@yC9m3chdk&vQJ-}0U7|:I0,');
define('SECURE_AUTH_SALT', '4xixrQs~ DNNFd*GibpK8>wP;aVP.=*IMU>;<fYI`ExAEO*a~DkU?3W--s#rp8@S');
define('LOGGED_IN_SALT',   'v+u5<=oHY@@`}O|nploS )gicN>Bt{!??moGPW&:QZd+Y6{A1L!`1?sAME9Pc`(D');
define('NONCE_SALT',       'k<]_Bc-c$?0*MJEj}<+JHFXZ?!X[mx+-2R&0E^19Xr{Q:8J.MDVj1Nd!MLI?je(4');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
