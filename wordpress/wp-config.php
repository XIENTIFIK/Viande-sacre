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
define( 'DB_NAME', 'boucheri' );

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
define( 'AUTH_KEY',         '?_/AbV7 &=(@n.j-hdi0{ED#QF7Jhr|S`RvW<kq5? lmd%v18B*;SOwf<IH <3!`' );
define( 'SECURE_AUTH_KEY',  '1`niG4Li _@yGhcq|oxv?6M8=vdj])i?1O,o8v9yel47R!W}Y|sq4U<t^aa9nbz_' );
define( 'LOGGED_IN_KEY',    'AO>Sb{MMcG*HPv@Tj[VrJB||y<&S}TnOp`j{PVaF<%{CN)i4CWsML,oDYojUou7!' );
define( 'NONCE_KEY',        'ix:J8uA!,46Z+}t-BfH1w-Y##]%KLX)imzHeqjBx_FjNnoTh;79tndG/t!^|c+S}' );
define( 'AUTH_SALT',        '#]g^gxS-R/mYTA+5P/DE%.c-sMqL=[p61wnal.O0p^dehE^ew&bd+Iv_]mSL`P1`' );
define( 'SECURE_AUTH_SALT', 'ez`V)Q2HC.ix)/Be,p*:I`~Sa--Gs1epPZ)Y3k{vL*4:l{s2C|Sa+X=N#ecml7oX' );
define( 'LOGGED_IN_SALT',   '9} TTJl_3eOhqqb4Yvx0Rd_oq3=Z tjRNKnC*WpL.~8Ak!)&?OrLV}Xr7WbS&F]A' );
define( 'NONCE_SALT',       'oQbFI<GM,3w+diWsvjw4BbNFxl7qfP@,hxO~^3(.`^hPd1Sdf]tl4 HO%(}K{d.`' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
