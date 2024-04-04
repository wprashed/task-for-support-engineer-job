<?php
$connect = mysql_connect('localhost', 'rashed', 'rashed');
mysql_select_db('inventory', $connect);

session_start();

// Register session variables (deprecated)
session_register('type');
session_register('user_id');
?>
