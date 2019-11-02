<?php
$sql_url = '127.0.0.1';
$sql_username = '';
$sql_password = '';
$sql_database = '';

$dbase = mysqli_connect($sql_url, $sql_username, $sql_password, $sql_database);
mysqli_select_db($dbase, $sql_database);
?>