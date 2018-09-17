<?php
date_default_timezone_set("Asia/Bangkok"); 
<<<<<<< HEAD
define("host", "localhost");
define("username", "hrd");
define("password", "hrd");
=======
define("host", "202.80.228.36");
define("username", "skhrd");
define("password", "12345678");

>>>>>>> ae1a4827a576a240ded542bcdccc9a0bb27bbcfc
define("db", "hrd");
$db_report = mysqli_connect(host, username, password,db); 
$query_report = $db_report ->query("SET NAMES UTF8");

?>