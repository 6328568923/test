<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php
include_once 'mysql_connect.inc.php';
include_once 'menu.php';

if($_SESSION['username'] != null)
{
        echo 'Hello! '. $_SESSION['username'];
}
else
{
        echo 'Please login.';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>