<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil innehåller följande konfigurationer: Inställningar för MySQL,
 * Tabellprefix, Säkerhetsnycklar, WordPress-språk, och ABSPATH.
 * Mer information på {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter får du från ditt webbhotell.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'linkmast_max');

/** MySQL-databasens användarnamn */
define('DB_USER', 'linkmast_maxm');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'slfnKExIQ3pW');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '805myWZU>-dsOou>|i}EKzo;;6&_Y8Uyr4h#cq84AuJ$~NQ?>W%NE|z]q!~,Qh,}');
define('SECURE_AUTH_KEY',  ',`H{W3u_v%R;wN&G61kcyW1bvy+T1!ib-Px@3mn}3S7#g4PPi>(BFtlQ>HP7V{X,');
define('LOGGED_IN_KEY',    'AnF_UIGP-9iz%mIU,W;mT*Ye6#j_}>_P>z/;m=_.!+8So>UTab@UO2g11)v9i!YO');
define('NONCE_KEY',        '*|>Zc8_-fL) 7N^+D{i(N-sNi{-QA~9?^Lwf[c96Bba7(|i!^U@0!R%43;hI8l94');
define('AUTH_SALT',        '3+FURzc>.>|3FvF?ubRxMkyJqd:u5b#KHzf$~SSiXm7`N:0Nc|F@P2X($(*BTyLs');
define('SECURE_AUTH_SALT', 'WQgtQ{qPy+F1g>0E@+tiho1x)=-Ro[?+$/~/]o-hE5w9XbPa)kEqKKx*gZz}5&|y');
define('LOGGED_IN_SALT',   'Sj9|I>G#F|ld}jhz[*M^f)5E-u}98qs),hOL3xTK{<s(^Z%v%SSn]b|,m>P7)&*|');
define('NONCE_SALT',       'k~{aTMk)r018-Lk>^rtzZdU-skp4D2NMS_+R87||GsPGSGK`Qv.mE!q57V+|qE|V');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wplunch_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');