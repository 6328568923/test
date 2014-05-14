<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php
$db_server="localhost";
$db_name="db";
$db_user="root";
$db_pw="24567111";
$con=mysql_connect($db_server,$db_user,$db_pw);
if(!$con)
	die('無法對資料庫連線');
mysql_query("SET NAMES utf8");
if(!mysql_select_db($db_name,$con))
        die('無法使用資料庫');
?>