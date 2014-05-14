<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php
include_once 'mysql_connect.inc.php';
include_once 'menu.php';

$sql="select count(*) from test;";
$count=mysql_query($sql,$con);
$cnt=mysql_fetch_row($count);

$sql="select * from test;";
$t=mysql_query($sql,$con);

?>

<table style="width:300px">
<?php for($i=$cnt[0];$i>0;$i--){ 
	$row=mysql_fetch_row($t);?>
		<tr>
			<td><?php echo $row[1]; ?></td>
			<td><a href="test.php?testid=<?php echo $row[0]; ?>">start</a></td>
		</tr>
<?php } ?>
</table>
