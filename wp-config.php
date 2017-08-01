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

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'damas');

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
define('AUTH_KEY',         ' nG<MpE6&rro$#--#f$EvkF<dsaA{a,2keLAM526*OrEfC:FAk{eOtA3#V?E#AgJ');
define('SECURE_AUTH_KEY',  'kBE25u5hPTHJ`&7yvr$Kgk5MXmz[%1}6,l6FL4,TUw2{*cmF4}xp{k](Frfn}&K4');
define('LOGGED_IN_KEY',    '*y|E#rK[E+pWyu.D*-qC9M/a7IdW*VvI Plaf{{Dn|N=gSxg9Df7[OkZi9?N~2Y,');
define('NONCE_KEY',        '(b5V}cJPB0#TZW3#2IF.B{x4SU 6vIKW{ACWz.YmJNg+B?0{r0{a}q;UuoWS: B8');
define('AUTH_SALT',        'Ka@$N[KskePM4EU(lAmq,~}:{z+;F6x,TIc<K0JExG@[vk7b0-kyNsq+?]/< y=?');
define('SECURE_AUTH_SALT', '>P^)scq{j $TdkmE2;K=i>j*,npGYynRt[_}{(?d*:-{(K7;dG^}y}]L97*qCt0F');
define('LOGGED_IN_SALT',   '=u_aXj.dX&Of5WSUp9IEr5pxsuu9QzDbcSEBH^X,>:j?W$#*(fYE7TF+4(nPA=#O');
define('NONCE_SALT',       'tm/t;_f/1?cm!&;!Gw!>qmQ#!|8j{n$$j<-4[2Omt86lG=H~qF>y@##>g2^z|,6Q');

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
