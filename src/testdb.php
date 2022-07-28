<?php
$filename = "/bindings/db/database";
$handle =(fopen( $filename, 'r'));
define( 'DB_NAME', fread($handle, filesize($filename)));
fclose($handle);

/** MySQL database username */
define( 'DB_USER', strval(fopen('/bindings/db/username', 'r' )));

/** MySQL database password */
define( 'DB_PASSWORD', strval(fopen('/bindings/db/password', 'r')));

/** MySQL hostname */
define( 'DB_HOST', strval(fopen('/bindings/db/host', 'r')));

printf (DB_NAME);

/** MySQL database username */
printf(DB_USER);

/** MySQL database password */
printf( 'DB_PASSWORD');

/** MySQL hostname */
printf ( '$DB_HOST') 
?>
