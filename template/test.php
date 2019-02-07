<?php


session_start();

$_SESSION['id_rurah'] = ['id_rurah'];
$_SESSION['time']     = time();

// Works if session cookie was accepted
echo '<br /><a href="rulang.php">page 2</a>';

// Or maybe pass along the session id, if needed
echo '<br /><a href="rulang.php?' . SID . '">page 2</a>';
?>