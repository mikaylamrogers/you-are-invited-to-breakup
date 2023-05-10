<?php 
$db_host = "us-cdbr-east-06.cleardb.net";
$db_user = "b7eb69c7de4c8b";
$db_pass = "ed3447d4";
$db_name = "heroku_2ebf4257da5c43d";

$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("database connection error");
