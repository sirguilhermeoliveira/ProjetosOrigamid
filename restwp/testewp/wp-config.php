<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'wp_user');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '123456');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RVE1c_wrUyQXVwWyx%`~VkXDxx#u+~Ve_}b?,xF4RwKMgT@e#Z~-jd>z<# RFfYJ');
define('SECURE_AUTH_KEY',  '{ZAMme:-i)T}p,J-*_1j i+FbZlWgilZ}?,_[EaQ}>4*X:m^k:X-bMq5|ZR,K^@5');
define('LOGGED_IN_KEY',    'wDGS(z-S=;,yd(F(HsBbIL>N,eZgc/tD4zsWGR]-);hL~l7HvM.oxn1R:qhH4F|/');
define('NONCE_KEY',        'Hm!Sbms-|W?tp7:f%SUP,?:-,HRXcY|J`brXGcqX8<Lrp2{N%w`Fq<A93ya)j*6@');
define('AUTH_SALT',        'Y+&Q>1};4Efn4y0>Wt~CJ=,,<+pT%rJE{hhk_tI1SH[zJXDdft|n,}e iL(j-vtI');
define('SECURE_AUTH_SALT', 'F ^XzPn[?DN7f)NMY 3]Sn:|vnW5cS_`1y,i2Ah YWe+?ZL;nmXs:5r~sE+GLk`U');
define('LOGGED_IN_SALT',   'sGg(+Qi_Iorv{y6EqQmlRsc?Gwc@vF~O${t+rt7`v{6TP)e~kNdgHc(l+6/67A W');
define('NONCE_SALT',       '[%bd=K>C#dneVeD-Tefe8dZG-]X+9*Voq]I^qxBWTykW+]dD vx5;AEc(J>z=@TJ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
