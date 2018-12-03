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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

define( 'JETPACK_DEV_DEBUG', true );

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'loja');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'VKBgr``Udy]Bi{uw1|[C.|[:Cln<)o$7|S/#B0rF0M%aS$r@FzZMd_wR>u[^XDjx');
define('SECURE_AUTH_KEY',  'M.7)arPwQXfAKqo[o1J?*cL,ej|<#$b1c11Ki.wjh+mN{}A@2GbM#L6jI]N.m/LJ');
define('LOGGED_IN_KEY',    '(0[T@ReK6_Uqq*DfAbfhfs##dKk4|&7387AMT*n:>6<ik]ujS;%S/}gc@>f1zG%z');
define('NONCE_KEY',        'y>n=AZ|z)H-(9YP05]*65lzEd4EA92OuPfc,^CY`Jw|AkUj#6,~reUV8{9l>B(X^');
define('AUTH_SALT',        'Vo<*U($a1bSj/`~mU3VA6iQnGP`?-p-n8ttY=RUl<bISzoV`Z=#86RI-Y*(,3O!<');
define('SECURE_AUTH_SALT', 't-GR?%iOt;0>foi.5C/r(4ppOnjY2{j!dOZ[l].TLsxW}2J^f~C-)Mm)UnzZ;i[h');
define('LOGGED_IN_SALT',   'z{%NCOS=&hrPS<xonNu=*?)F<L}-8VBml]dR,N0;Pf;<4_Qm53 G(&dCtf>[eopt');
define('NONCE_SALT',       'G]3u0,_@9{DedC`dHY+L_n.~%O.ubt*;nz$Ch|9Cg(d4WKc9^j9+f#se&e^Do/%)');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
