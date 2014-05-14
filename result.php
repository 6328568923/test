<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php
include_once 'mysql_connect.inc.php';
include_once 'menu.php';

$username=$_SESSION['username'];
$sql="select count(*) from record where username='$username';";
$count=mysql_query($sql,$con);
$cnt=mysql_fetch_row($count);

$sql="select test.test_name,record.test_date,record.mark 
	from record inner join test on record.test_id=test.id 
	where username='$username';";
$result=mysql_query($sql,$con);
?>

<table style="width:300px">
<tr>
	<td>Test</td>
	<td>Finish Time</td>
	<td>Mark</td>
</tr>
<?php for($i=$cnt[0];$i>0;$i--){ 
	$row=mysql_fetch_row($result);?>
		<tr>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
		</tr>
<?php } ?>
</table>