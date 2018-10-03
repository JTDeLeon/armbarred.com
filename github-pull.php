<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.

if ( $_POST['payload'] ) {
shell_exec( ‘cd /home/kellyare/www/armbarred.com/github-pull.php && git reset –hard HEAD && git pull’ );
}

?>

<h1>HELLO</h1>