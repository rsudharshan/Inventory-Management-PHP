<?php
include 'db.php';
///insert quantity to  the Stock tableitmtyp
if(isset($_POST['itemn']) && isset($_POST['quantity']))
{	
$itemn=$_POST['itemn'];
$quantity=$_POST['quantity'];
$idquery="SELECT * FROM items WHERE itemname='".$itemn."'";
$idr=mysql_query($idquery) or die(mysql_errno());
while($row=mysql_fetch_array($idr))
{
	$id=$row['id'];
	$itemname=$row['itemname'];
	$itemtype=$row['itemtype'];
}

$sqlinsert="INSERT INTO `stock` (
`id` ,`itemname` ,`itemtype`,
`quantity` )
VALUES (".$id.",'$itemname'".",'$itemtype',".$quantity.")";
$insert=mysql_query($sqlinsert) or die(mysql_errno());
echo " $quantity of  Items $itemn added to the Stock";
echostore();

}
else if(!isset($_POST['itemn']) && !isset($_POST['quantity']))

{
	echostore();
}


function echostore()
{
	$storefetch="SELECT * FROM stock ORDER BY id LIMIT 0 ,20";
$stres=mysql_query($storefetch);
echo "<h3>List of available items in Stock</h3>";
echo "<table><tr><td><b>Itemname</b></td><td><b>Itemtype</b></td><td><b>Quantity</b></td></tr>";
while($row1=mysql_fetch_array($stres))
{
	echo "<tr><td>".$row1['itemname']."</td><td>".$row1['itemtype']."</td><td>".$row1['quantity']."</td></tr>";
}
echo "</table>";
}

?>