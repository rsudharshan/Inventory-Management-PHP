<?php
include 'db.php';
///insert quantity to  the Stock tableitmtyp
if(isset($_POST['itemn']) && isset($_POST['quantity']) && isset($_POST['location']) && isset($_POST['fromlocation']) )
{	
$itemn=$_POST['itemn'];
$quantity=$_POST['quantity'];
$location=$_POST['location'];
$fromlocation=$_POST['fromlocation'];
//if item exists

$idquery="SELECT *,count(*) as count FROM $fromlocation WHERE itemname='$itemn'";
$idr=mysql_query($idquery) or die(mysql_errno());
$row=mysql_fetch_array($idr);$count=$row['count'];$id=$row['id'];$itemtype=$row['itemtype'];
	if($count==1)		//check if item exists there in fromlocation
	{	

		//check if quantity exists there in fromlocation
		if($row['quantity'] >= $quantity)
		{ 
 				if(mysql_num_rows(mysql_query("SHOW TABLES LIKE '".$location."'")))
				{
					$destrow=mysql_query("SELECT * FROM $location WHERE itemname='$itemn'");
						if(mysql_num_rows($destrow))
						{ 
							$updatedsrcquantity=$row['quantity']-$quantity;
							$upddestquantity=$destrow['quantity']+$quantity; 
							
							$updsrc=mysql_query("UPDATE $fromlocation SET  `quantity`='$updatedsrcquantity' WHERE `id` = $id LIMIT 1") or die(mysql_error());
							$upddest=mysql_query("UPDATE $location SET  `quantity`='$upddestquantity' WHERE `id` = $id LIMIT 1") or die(mysql_error());
							echo "<h3>Items moved successfully</h3>";

						}
						else
						{
							$updatedsrcquantity=$row['quantity']-$quantity;
	$insrow=mysql_query("INSERT INTO $location (id,itemname,itemtype,quantity) VALUES ($id,'$itemn','$itemtype',$quantity)") or die(mysql_error());
	$updsrc=mysql_query("UPDATE $fromlocation SET  `quantity`='$updatedsrcquantity' WHERE `id` = $id LIMIT 1") or die(mysql_error());
							if($insrow) echo "<h3>Items added</h3>";
						}
				}
				else
				{
					echo "Location not exists";
				}
 		}
		else
		{ 
		     echo 'Quantity entered not available';
		}
	}
	else
	{
		echo "Item not exists";
	}
/*$sqlinsert="INSERT INTO `stock` (
`id` ,`itemname` ,`itemtype`,
`quantity` )
VALUES (".$id.",'$itemname'".",'$itemtype',".$quantity.")";
$insert=mysql_query($sqlinsert) or die(mysql_errno());
echostore();*/
//echostore function

//echostore ends
}



function echostore()
{
	$storefetch="SELECT * FROM stock ORDER BY id LIMIT 0 ,20";
$stres=mysql_query($storefetch);
echo "<table><tr><td><b>Itemname</b></td><td><b>Itemtype</b></td><td><b>Quantity</b></td></tr>";
while($row1=mysql_fetch_array($stres))
{
	echo "<tr><td>".$row1['itemname']."</td><td>".$row1['itemtype']."</td><td>".$row1['quantity']."</td></tr>";
}
echo "</table>";
}

?>