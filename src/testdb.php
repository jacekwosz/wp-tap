<?php
define( 'DB_NAME', fopen( '/bindings/db/database', 'r'));

/** MySQL database username */
define( 'DB_USER', strval(fread('/bindings/db/username', 'r' )));

/** MySQL database password */
define( 'DB_PASSWORD', strval(fread('/bindings/db/password', 'r')));

/** MySQL hostname */
define( 'DB_HOST', strval(fread('/bindings/db/host', 'r')));

printf (DB_NAME);

/** MySQL database username */
printf(DB_USER);

/** MySQL database password */
printf( 'DB_PASSWORD');

/** MySQL hostname */
printf ( '$DB_HOST') 
?>
