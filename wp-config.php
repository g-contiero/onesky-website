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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'onesky07');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'onesky07');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'odw27c31C61');

/** Nome do host do MySQL */
define('DB_HOST', 'mysql.onesky.com.br');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '128M');

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
define('AUTH_KEY',         'jED/a?Tp39%RTeR`  KV5;jfh-is~$b:2Kncxe VsBqvB>DX1&,sqzIZxwrcCX(Z');
define('SECURE_AUTH_KEY',  'z^KAWlNZ$ 4&@4E&7[Mjjm+m oUjoRGb~sN?!_ummN AV<:LiL^3N7i2Dvti[(<~');
define('LOGGED_IN_KEY',    'n?Uv%IRZUs4kCJw2qaz4rB*R&FjKInEcb)=[dus}INFMPqM+_TV-B ,KWt5x*E&Y');
define('NONCE_KEY',        '1_//&%REPua;vEWEQ{YKGa@!~7S5i2Dz(+9,gnRM5 hh+ntugxd`yH-._*@m)q x');
define('AUTH_SALT',        'kr5SP:UO9(CtFfF7Vuersy7-=J?].{6!O3zHk#i#BEh-/7[fs>Fv@B(b$%Dt4H3z');
define('SECURE_AUTH_SALT', 'pxggu)G64)=1y*a0_?eC5Z&)P%V)H%HT_ZTp,?|@^iAV0]p8vEDyLK<r$G;mO_3G');
define('LOGGED_IN_SALT',   '$G;TJ}=dZ%7KBZ6kF0<4:4RNP;8RL/&8Wk-_PrpM=#j|Aa7=U;[$NKv:MW,.d=n^');
define('NONCE_SALT',       'QU|67S.%>#j6x%HHWG6cLdXJweV3=AYQSmZneCW _=044WA,IB!kS5;V(6Ep+tEi');

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
