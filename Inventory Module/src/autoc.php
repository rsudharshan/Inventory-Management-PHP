<?php
include 'db.php';

if(isset($_POST['pit']))
{
$queryString=$_POST['pit'];
$autocomplete="SELECT itemtype FROM itemtype WHERE itemtype LIKE '$queryString%' LIMIT 10";
$rs=mysql_query($autocomplete);
echo "<ul>";
while($row=mysql_fetch_assoc($rs))
{
	echo "<li onclick='fill(this.innerHTML)'>".$row['itemtype'] . "</li>";
}
echo "</ul>";
}
if(isset($_POST['itemn']))
{
$queryString=$_POST['itemn'];
$autocomplete="SELECT * FROM items WHERE itemname LIKE '$queryString%' LIMIT 10";
$rs=mysql_query($autocomplete);
echo "<ul>";
while($row=mysql_fetch_assoc($rs))
{
	echo "<li onclick='fill(this.innerHTML)'>".$row['itemname'] . "</li>";
}
echo "</ul>";	
}



//for placeitem.php
if(isset($_POST['itemstock']) && isset($_POST['table']))
{
$queryString=$_POST['itemstock'];
$table=$_POST['table'];
$autocomplete="SELECT * FROM $table WHERE itemname LIKE '$queryString%' LIMIT 10";
$rs=mysql_query($autocomplete);
echo "<ul>";
while($row=mysql_fetch_assoc($rs))
{
	echo "<li onclick='fill(this.innerHTML)'>".$row['itemname'] . "</li>";
}
echo "</ul>";	
}

if(isset($_POST['location']))
{
$queryString=$_POST['location'];
$autocomplete="SELECT * FROM locations WHERE location LIKE '$queryString%' LIMIT 10";
$rs=mysql_query($autocomplete);
echo "<ul>";
while($row=mysql_fetch_assoc($rs))
{
	echo "<li onclick='setlocation(this.innerHTML)'>".$row['location'] . "</li>";
}
echo "</ul>";	
}
//source list autocomplete
if(isset($_POST['fromlocation']))
{
$queryString=$_POST['fromlocation'];
$autocomplete="SELECT * FROM locations WHERE location LIKE '$queryString%' LIMIT 10";
$rs=mysql_query($autocomplete);
echo "<ul>";
while($row=mysql_fetch_assoc($rs))
{
	echo "<li onclick='fromlocation(this.innerHTML)'>".$row['location'] . "</li>";
}
echo "</ul>";	
}
?>