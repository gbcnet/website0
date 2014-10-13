<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp-4.0');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'gbcnet');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '7iuV*9Q2K&F8&7uC+0i=P~LihM0OQ35`_R4^)7VLX*Oc=#AUn/K({li0->P9*ac9'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '&>QAOvg/$g?(z!W^rBM)69_1*,Be>7#rY^v.|-mW>?5o!+BCDi6|nvI.|c?&E!cg'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'c?H]WUE6RYCF./NW]IR-|pa-6G-@(?{Ok}BI:bXfWJci0$|;Z;+?)+8zFf:|D,q_'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '[[ZA6c|cJ-%A,GR(yD_eb6_[SoLv!$-Gw~*tCvR:6dU<,*;M;i3Z}V A~D~`NEC/'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '&03G-w](inz5>e`maY,BSrH%~W8)Bu6XI3x{[rAv%s!>(z+l~g/hi$Y%&Ao|drbu'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'w6fWIW$W_l8B9^2CrWJD5zMHZP]WK7DiJf+5 jKx|pDZmC#H|:A^.Pj9ARn}i|JM'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '5^54-CE+kca|jn$k|UE=xHT %5vmlE#iuukUm4qg(Rmx_0Z:.bUcaS0 }H6G)QV_'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', '?p+}?RWR{ObVg|O^Qjtl~-;4@RWEy{xSMG&=)6vs)Uw}&rA|x:-@b$cJxSy}on-k'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_rc';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


