<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'freelance');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'l^yl:>Hz9:/EQ5i:W]!rS>PoF)lT53&At_UX C#^rg!-c?_LbRQj4upW/MGIT[F[');
define('SECURE_AUTH_KEY',  'qy4F|t|c&w|ek[bN5el}|Ch(ZsRJ_H<7pV[^Jn_Y_m-h9Yz)O^|dah1H.|*TZ,[5');
define('LOGGED_IN_KEY',    'LWkqGpk9%KGR3*`nrs6M`M1U#(!nHx3 t^{=wW q(Wg:s{v%SbjVG4zC~J2)az$5');
define('NONCE_KEY',        'YW-mm.qeMRgp)j<;0orO{gp-<&5L}2XC3-kRl-r1REG2=Pz}H}5wSD8X#1D}`Pu&');
define('AUTH_SALT',        ')WkMdBXMMRCA/5|y2A:fnDgOP0!Md=ud,;@yD/g?1|FRbP0S2R2pVTp%~!EYtBgk');
define('SECURE_AUTH_SALT', 'VTDg-Ra}-Z%QbLE:+?5ft:3?eaCnN@[dU+P%Dgz_2H,) P4!IJ;=p3IUUGS77juR');
define('LOGGED_IN_SALT',   '1]0)5p0)l~B<|BC&z> pWvtW:i?@-Vi,ZIQcN7CX*,^H`o;d7rS|o4luzHg8bf|;');
define('NONCE_SALT',       '<QRm}65d/lf,^@+&t{t1:x)ai`rK8a !02$(izRPz8Gy1(,k/2itl,|%EQ~hZ7]c');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');