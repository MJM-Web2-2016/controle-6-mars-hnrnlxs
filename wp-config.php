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
define('DB_NAME', 'adobe');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '$x!7j2c$r!*??I1oxP`(:IE@L> cGjUht{Kwa{`U(2-n4*(#mz)f}@Kc_lRsx6P{');
define('SECURE_AUTH_KEY',  'VEApr^ _U,EE,X!D@2WO{~}snPyjU!9?.UluNpCw(OL+% =B-2IXLjFn=`b}6!Z%');
define('LOGGED_IN_KEY',    'gd3^b*}.~EQ~xcPx{$Tlj`Xm{_X-,/Fx4lV>[5F{Y(,q&S^rV~hPWKYmxk#Tbk;3');
define('NONCE_KEY',        'Af,U~t{!V~qvQ*@Znl}zt$1kAA15n4qlD8nhti8N;GI6hD`)N-%z>f/3$;I$Js*u');
define('AUTH_SALT',        'S:})WwZ>o4%@MMIG>@B1lxfjeG(;Qx,K3Z+Yx4J9lC_z@o9|6_BG*4*9AjC7yov_');
define('SECURE_AUTH_SALT', 'KUvaX)}KcQl*8>Ux,;Vcq&`eP+r&f[R^GqxY9mSg^>pN<Z@`hod4ea6y9tjLiiV)');
define('LOGGED_IN_SALT',   '#)wq8zgiR69eavcnB;@SeDA?FM&0v>Z<$-6%V|LsHe%Xa</RwllAKg,B`R$[j{zm');
define('NONCE_SALT',       '}yKODhCD$u9vGu<<4xGqqa|@l%#3|F=Ly`Jd4e@;A8Cqh{WHqxytu<o4)w4-VYk{');
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