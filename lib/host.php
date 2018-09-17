<?php
date_default_timezone_set("Asia/Bangkok"); 
define("host", "localhost");
define("username", "hrd");
define("password", "hrd");
define("db", "hrd");
$db_report = mysqli_connect(host, username, password,db); 
$query_report = $db_report ->query("SET NAMES UTF8");

?>