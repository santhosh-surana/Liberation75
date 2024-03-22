<?php
# Database Configuration
define( 'DB_NAME', 'wp_mnd86thgrddev' );
define( 'DB_USER', 'mnd86thgrddev' );
define( 'DB_PASSWORD', 'DdOm_kNGTv0upZVHdGjX' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'gdadI-iXb+&y$rK;#%OfMv12+9 }.u$lMES=mK~#p6J$my%p+9*L`l|.KgP~RN|L');
define('SECURE_AUTH_KEY',  '*-kZ61_]2,`KCV7VW|IFN|X-g(MXM8.dKAoO@ni=IMGPZnS3_M-QR5lEyv9=U|H`');
define('LOGGED_IN_KEY',    '9Ret!Dw30p91J;.:Bi2Zheh1YxFzAv`(s-y~.QFVP&Ax{#?pxVV5Q!Owe^,z{ ^v');
define('NONCE_KEY',        'U{87#$p12WTV9`q5Z5y%qbVtU1@`K6nsKwlA,bhpJwZ}p sRyi&UxUiw]Yhm|UN+');
define('AUTH_SALT',        'R`ipxpgbYQ9!8=8S?#|alWL*wpmMF{[ta/j&9HMDMV;i|#38)|+Bro*8U Gxje!/');
define('SECURE_AUTH_SALT', '&:4_~#Vt2IST<)03I4b|uR9#U [,YhR-!D%w)M=6-#qA0J0vN1dGslps6PPIApY;');
define('LOGGED_IN_SALT',   '-hkrh+T24um>S+1CTn<sA?mnj=..$HoCsPT%ywQG=Ay_)M]$dHt?t+kk[tMhjJ9:');
define('NONCE_SALT',       '099{<(!+$X `TP^jCM>[/3(sGRl!0Y02,Nplh-0Dk.[i-nQOY+%|hzG=pUHmDM$3');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'mnd86thgrddev' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', '97bc81715e09fe505db6a727bad94be750e8c787' );

define( 'WPE_CLUSTER_ID', '213299' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '34.168.109.72' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'mnd86thgrddev.wpengine.com', 1 => 'mnd86thgrddev.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => '127.0.0.1', );

$wpe_special_ips=array ( 0 => '34.145.72.6', 1 => 'pod-213299-utility.pod-213299.svc.cluster.local', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
