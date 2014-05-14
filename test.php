<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php
include_once 'mysql_connect.inc.php';
include_once 'menu.php';

$test_id=$_GET['testid'];
$_SESSION['tid']=$_GET['testid'];
$sql="select * from test where id='$test_id';";
$result=mysql_query($sql,$con);
$row=mysql_fetch_row($result);

?>

<form name="form" method="post" action="check.php">
Question 1: <?php echo $row[2] ?> <br>
<select name="q1">
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
</select>
<br><br>
Question 2: <?php echo $row[3] ?> <br>
<select name="q2">
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
</select>
<br><br>
Question 3: <?php echo $row[4] ?> <br>
<select name="q3">
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
</select>
<br><br>
Question 4: <?php echo $row[5] ?> <br>
<select name="q4">
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
</select>
<br><br>
Question 5: <?php echo $row[6] ?> <br>
<select name="q5">
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
</select>
<br><br>
<input type="submit" value="Submit" />
</form>
