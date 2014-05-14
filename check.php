<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php
include_once 'mysql_connect.inc.php'; 
include_once 'menu.php';

$test_id=$_SESSION['tid'];
$test_time=date("Y-m-d H:i:s");
$username=$_SESSION['username'];
$sql="select * from test where id='$test_id';";
$result=mysql_query($sql,$con);
$row=mysql_fetch_row($result);

$mark=0;
if($_POST['q1']==$row[7])
	$mark=$mark+20;
if($_POST['q2']==$row[8])
	$mark=$mark+20;
if($_POST['q3']==$row[9])
	$mark=$mark+20;
if($_POST['q4']==$row[10])
	$mark=$mark+20;
if($_POST['q5']==$row[11])
	$mark=$mark+20;

echo 'Your mark is ' . $mark;

$sql="insert into record values('$username','$test_id','$test_time',$mark);";
mysql_query($sql,$con);

?>
