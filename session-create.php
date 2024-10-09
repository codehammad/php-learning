<?php
/* A session is started with the session_start() function.
Session variables are set with the PHP global variable: $_SESSION.
open at the beginning of each page (session_start()).
To remove all global session variables and destroy the session, use session_unset() and session_destroy() */
session_start();

$_SESSION['favcolor'] = "lightblue";

echo "Session Variable is set.";

?>

