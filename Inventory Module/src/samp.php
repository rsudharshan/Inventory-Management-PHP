<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
include 'db.php';
echo 'hai';
$port=$_GET['item'];
$q=$_GET['q'];

$sqlfetch="SELECT id FROM `items` where itemname='".$port."'";
$rs1=mysql_query($sqlfetch);
$row=mysql_fetch_array($rs1);

	 $id= $row['id'];
echo $id;
echo $q;

$sqlinsert="INSERT INTO 'stock' (
'id' ,
'quantity'
)
VALUES ($id".","."$q
);";
echo $sqlinsert;
$insert=mysql_query($sqlinsert) or die(mysql_errno());

?>
<body>
</body>
</html>