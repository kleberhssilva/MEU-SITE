rm .index.php
wp core download --locale=pt_BR
curl -LG https://raw.githubusercontent.com/aaemnnosttv/wp-sqlite-db/master/src/db.php > ./wp-content/db.php
wp config create --skip-check --dbname=wp --dbuser=wp --dbpass=pass --extra-php <<PHP
\$_SERVER[ "HTTPS" ] = "on";
define( 'WP_HOME', 'https://$REPL_SLUG.$REPL_OWNER.repl.co' );
define( 'WP_SITEURL', 'https://$REPL_SLUG.$REPL_OWNER.repl.co' );
define ('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);
PHP
read -p "Leitura do nome de user ADM: " user
read -p "Leitura da senha do user ADM: " psw
read -p "Leitura do email do wp: " email
read -p "Leitura do titulo da pagina: " titulo
wp core install --url=$REPL_URL --title=$titulo --admin_user=$user --admin_password=$psw --admin_email=$email
