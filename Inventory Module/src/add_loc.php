<?php
include 'db.php';
///insert quantity to  the Stock tableitmtyp
if(isset($_POST['location']))
{
	
$location=$_POST['location'];
$idquery="CREATE TABLE $location (
`id` SMALLINT( 6 ) NOT NULL AUTO_INCREMENT ,
 `itemname` VARCHAR( 20 ) NOT NULL ,
 `itemtype` VARCHAR( 20 ) NOT NULL ,
 `quantity` INT( 11 ) NOT NULL ,
PRIMARY KEY (  `id` ) ,
UNIQUE KEY  `itemname` (  `itemname` )
) ENGINE = INNODB DEFAULT CHARSET = latin1;";
$idr=mysql_query($idquery) or die(mysql_errno());
//register in location table

$sqlinsert="INSERT INTO locations (
`id` ,`location`
)
VALUES ('NULL'".",'$location')";
$insert=mysql_query($sqlinsert) or die(mysql_errno());
echostore();
//echostore function

//echostore ends
}
else if(!isset($_POST['itemn']) && !isset($_POST['quantity']))

{
	echostore();
}



function echostore()
{
	$storefetch="SELECT * FROM locations";
$stres=mysql_query($storefetch);
echo "<h3>List of available locations</h3>";
echo "<table><tr><td><b>Id</b></td><td><b>Location</b></td></tr>";
while($row=mysql_fetch_array($stres))
{	
			echo "<tr><td>".$row['id']."</td><td>".$row['location']."</td></tr>";
}
echo "</table>";
}



?>