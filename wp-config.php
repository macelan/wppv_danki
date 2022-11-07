<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'portal' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';+3E6qte5GHt=B}%6.]g6H$>MM7%d$<i9Url|@u#kG!TO,w%Qi[*|dMU#<]I`XYN' );
define( 'SECURE_AUTH_KEY',  'RHet3;KZv.@t$^Ag,2C{YGxQT0&bS5:yK[Wv_bzJ$l:`Q-`IF)~-W?Ka{~Je4x:*' );
define( 'LOGGED_IN_KEY',    'i.B7!CH`;nD$1ImP(M]{N|SB0P{pwV<g5,WPW|L;ajU(*!^JhE_H2MH>NoSW.>sE' );
define( 'NONCE_KEY',        'lE_t)W=O41mLZ)5N]*:w,c`%K|_Ad7-hZ/sDZ {0YFB)LcwPRhr}4 uUbo^fUxU[' );
define( 'AUTH_SALT',        'U_]F&ud$rDThaP#N5I87%>E:[8xr;0:Ewv2@9H#U.8HMK)(Fi7l:9@J%BHOYi`5V' );
define( 'SECURE_AUTH_SALT', '3Z><_`zTo&qgQp^ry/p+4Pe:]^tnZRmH?OG(!9A${#=saO`Apj1Cxm;PMBj&:uR$' );
define( 'LOGGED_IN_SALT',   '7 >FB?N4_^)Vaqw2OHjHg.EZ:$la3_QfdYQPE0b=_0zyQE@n>eWD`^80%t CG:b$' );
define( 'NONCE_SALT',       'P:faAPm?=4#6;b}]%c(R/ey6. (;7I^H]lR;*093JCmdPmg9y[rvW@T`gxvRlse2' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_portal';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
