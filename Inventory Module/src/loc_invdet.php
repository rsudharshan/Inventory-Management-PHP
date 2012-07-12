<?php
include 'db.php';
$location='store';
///insert quantity to  the Stock tableitmtyp
if(isset($_POST['location']))
{	
$location=$_POST['location'];
$idquery="SELECT * FROM $location";
$idr=mysql_query($idquery) or die(mysql_errno());
echo "<h2>List of items in $location</h2>";
echo "<table><tr><th>ID</th><th>Item Name</th><th>Item Type</th><th>Quantity</th>";
while($row=mysql_fetch_array($idr))
{
	echo "<tr><td>".$row["id"]."</td><td>".$row['itemname']."</td><td>".$row['itemtype']."</td><td>".$row['quantity']."</td></tr>";
	$itemname=$row['itemname'];
	$itemtype=$row['itemtype'];
}
echo "</table>";
}
else
{
	$idquery="SELECT * FROM $location";
$idr=mysql_query($idquery) or die(mysql_errno());
echo "<h2>List of items in $location</h2>";
echo "<table><tr><th>ID</th><th>Item Name</th><th>Item Type</th><th>Quantity</th>";
while($row=mysql_fetch_array($idr))
{
	echo "<tr><td>".$row["id"]."</td><td>".$row['itemname']."</td><td>".$row['itemtype']."</td><td>".$row['quantity']."</td></tr>";
	$itemname=$row['itemname'];
	$itemtype=$row['itemtype'];
}
}

?>