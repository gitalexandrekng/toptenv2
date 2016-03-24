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
define('DB_NAME', 'ttc');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?6WV~ClB:iOZAr+`jPTl1^3bHQEKv#2A~v:)VpF^Ec^e->WPbGp~N+8[j?&Z-0H4');
define('SECURE_AUTH_KEY',  'xDa(aT+&BvJ 9JJQpL^z%,%+tl5[s;X77{[Vk1l1-!KOUU<KhPrfX>9)K8H>[LPu');
define('LOGGED_IN_KEY',    'uIE<w+YiAIyG0$MHm^M{rVP(mCPkfYK&g8~kc+7 2nKcUp.r~<F3aF<C(Pt94YZP');
define('NONCE_KEY',        'c`LC.0>=L6}MOc,t:(>rWd-$| 6L#NOiZJZSW|9i}m;Q@9[xJQ5%[(k6]7Sy(27B');
define('AUTH_SALT',        'i m#dldaBA4^t<8C> ]Ss*>4D ,-o|&D0XzQuPF[:1Yi9-Z5l{z#-!d:j53%mGQ-');
define('SECURE_AUTH_SALT', '*]t3iYUPj#aMk>~[f]:UeR2I<w+GratL@SQuniH9k{4P%6|Y#ZS[+v/8{Z5+4Ahi');
define('LOGGED_IN_SALT',   'FM8 `I.V(UE7I-4HGl-~Wv3_`6;-ul+mX%;ZR$?%e*%F%EB|QQSC|+-NPW-Fwh4*');
define('NONCE_SALT',       'wVC+{4q|K.cv&c+7I(ZvOKq!21v<|7/<,Sn2{<i#t4|p+1h*YR<K,+ )l7J-TnI>');
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