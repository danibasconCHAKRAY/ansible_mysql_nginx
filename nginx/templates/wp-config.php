<?php
/** 
 * Configuración básica de WordPress.
 *
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
define('DB_NAME', {{mysql_bbdd}});

/** Tu nombre de usuario de MySQL */
define('DB_USER', {{mysql_user}});

/** Tu contraseña de MySQL */
define('DB_PASSWORD', {{mysql_pass}});

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', {{ip_hosts}});

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', 'UUH8jXa(yX]<a$X,*gpI3aiZxKwP`l%Vh8GrBt |uG!]e~WK,Bi}:[xHo^m6euVQ');
define('SECURE_AUTH_KEY', 'i%s:-vI*Q3eI+oJkbMs`JdIV+0/<Uens]Sj&ie&5hB!}iu>x50SarPA}1}!=`$h^');
define('LOGGED_IN_KEY', '$;d5[FAj{3[VgFF9oJP_W}LEndpPxJvkZ/;y~Ex[7]@g#A]3M!7fD67L<j>SW^eR');
define('NONCE_KEY', 'l(j(4NR}ZqGyVrCCWw^kP/A|`#~e8rrqG^%-H=nPL^d1!6B#p?~qn$J[L}PYE<p!');
define('AUTH_SALT', '{97S^UV&#R3}m?#>cozVG`g|+M}1w.+M/=^G<9Nzm0:~VV!!n1en[6B20XsMc Bg');
define('SECURE_AUTH_SALT', 'BEjFZs!0z2T!HUekX%v;?j)(__0{V`=ELy8a)xrZG7p>~>j7OH^4H2U$y+a!+{eY');
define('LOGGED_IN_SALT', 'iHL*Ai?qf(uvr $Hl^V$x<0oed@G=fU:A0p;Sm0EgUxFisK5s:#^+ OMk&,/[V?F');
define('NONCE_SALT', '-%!h<y[MbEl6TsKqq9G_^9b{2*]58B^UYLRR:FZAnUJ)(?/tl(804j@+g;]A4i_S');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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
