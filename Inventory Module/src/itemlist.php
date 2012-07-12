<?php
$con = mysql_connect("localhost","root","") or die("error".mysql_error());
mysql_select_db("test", $con);
if(isset($_POST['delcode']) && isset($_POST['delcode1']))
{
	$code=$_POST['delcode'];
	$code1=$_POST['delcode1'];
$del=mysql_query($code) or die(mysql_errno());
	$del1=mysql_query($code1) or die(mysql_errno());
}
if(isset($_POST['itemtype']))
{
$val=$_POST['itemtype'];
	$sqlinsert="INSERT INTO `itemtype` ( `id` ,`itemtype`) VALUES (	NULL , '".$val."' );";
	$insert=mysql_query($sqlinsert) or die(mysql_errno());
}
$sql = "select * from itemtype";
// Execute query
$rs=mysql_query($sql,$con) or die(mysql_error());
echo "<ul>";
while($row=mysql_fetch_assoc($rs))
{
	echo "<li onclick='delshow(this)' >".$row['itemtype'] ."</li><br/>";
}
echo "</ul>";
mysql_close($con);
// some code
?>