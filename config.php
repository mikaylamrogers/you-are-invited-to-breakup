<?php 
$db_host = "us-cdbr-east-06.cleardb.net";
$db_user = "b196e6230007c4";
$db_pass = "dfa15e3d";
$db_name = "heroku_8e7c8263c2b34f5";

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("database connection error");
