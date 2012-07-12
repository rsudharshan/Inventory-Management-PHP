<?php
include 'db.php';

//functions of addquantity.php ends here


//insert items to  the Item
if(isset($_POST['itemtype']) && isset($_POST['items']))
{
$itemtype=$_POST['itemtype'];
$item=$_POST['items'];
$sqlinsert="INSERT INTO `items` (
`id` ,
`itemname` ,
`itemtype`
)
VALUES (
NULL , '" . $item. "', '".$itemtype."'
)";
$insert=mysql_query($sqlinsert) or die(mysql_errno());
echotable();
}
else
{
	echotable();
}
function echotable()
{
$sqlfetch="SELECT * FROM `items` ORDER BY itemtype LIMIT 0 ,20";
$rs1=mysql_query($sqlfetch);
echo "<table><tr><td><b>Itemname</b></td><td><b>Itemtype</b></td></tr>";
while($row=mysql_fetch_array($rs1))
{
	 echo "<tr><td>".$row['itemname']."</td>";echo "<td>".$row['itemtype']."</td></tr>";
}
echo "</table>";
}
?>