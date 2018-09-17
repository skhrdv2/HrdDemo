<?php
date_default_timezone_set("Asia/Bangkok"); 
<<<<<<< HEAD
define("host", "202.80.228.36");
define("username", "skhrd");
define("password", "12345678");
=======

define("host", "202.80.228.36");
define("username", "skhrd");
define("password", "12345678");


>>>>>>> 631ab257881e265c6f64a3b34a1eb263df558218
define("db", "hrd");
$db_report = mysqli_connect(host, username, password,db); 
$query_report = $db_report ->query("SET NAMES UTF8");

?>