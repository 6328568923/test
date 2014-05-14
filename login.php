<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php
include_once 'mysql_connect.inc.php';

$id=$_POST['id'];
$pw=$_POST['pw'];
$sql="SELECT * FROM user where username='$id';";
$result=mysql_query($sql,$con);
$row=mysql_fetch_row($result);

if($row[1]==$id && $row[2]==$pw)
{
	$_SESSION['username'] = $id;
	echo 'Login success!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=user_index.php>';
}
else
{
	echo 'Login fail!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}

?>