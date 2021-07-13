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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'tsXJC#v&aGeb|WJah-7X]z4ayDwQ/ZD;d|6ocDg^a}?TA3)d6p*(z8$>$RXGeG3e' );
define( 'SECURE_AUTH_KEY',  '$QSHTam{$5kP[zj[*,F*X%A9W2/hFBmS>sY~w!6N~aULV{ b#gB=!Cbh^0:kb#CX' );
define( 'LOGGED_IN_KEY',    '<M-(RWSq:~?jr->,A9Bc5O/D#) 2  L;`rP##r= oZ_G^|ADC@*%eog]r&FQ8)$a' );
define( 'NONCE_KEY',        '|_j#+.An(qFl-[~zZN[1gM1$zuMbC_=D<Kc G{J^xO9(4pK;Q]GdI/rA`~C<b{(x' );
define( 'AUTH_SALT',        'qF;jaED)UuLgQyTB-#iql;:R<L`rq52_y;qPXW!|3tPAPy)C*{W5}2;$wd-D.4UG' );
define( 'SECURE_AUTH_SALT', 'gfjb+-q]0_|>@1Tt$^$BT:KMLA%?}nIY?9_r ^/3-0>^2/V9ehs5kE%ox?(B835n' );
define( 'LOGGED_IN_SALT',   '%mA<r5$]{GUI>FWVTEIb1|eawq6b([$X-gNsyA x?W^c`Z.Zj<x)94)[h%S4E?D{' );
define( 'NONCE_SALT',       'S+a<xI.W7-nHh`5hV<WbmdsoU/{s)}hh!@k3r>9R8Z2s)LB;^]AI:3Y/zo$[xcmQ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
