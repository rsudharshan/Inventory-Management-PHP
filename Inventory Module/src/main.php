<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory Management - RIP OPEN</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
</script>
<script type="text/javascript">
$(document).ready(function()
{ 
	$('#addi').click(function()
	{
	$('#cnt').attr('src','additemtype.php');
	});
    $('#addnew').click(function()
	{
	$('#cnt').attr('src','additems.php');
	});
	$('#addloc').click(function()
	{
	$('#cnt').attr('src','addl.php');
	});
	$('#addquan').click(function()
	{
	$('#cnt').attr('src','addquantity.php');
	});
	$('#placeitem').click(function()
	{
	$('#cnt').attr('src','placeitem.php');
	});
	$('#locinv').click(function()
	{
	$('#cnt').attr('src','locinv.php');
	});
	
});

</script>
</head>

<body>
<div class="container">
<div class="header"><h1 align="center">Inventory Management -  RIP OPEN</h1></div>
<?php
session_start();
echo '<div align="right"> Hello <i>' . $_SESSION['username'].'</i>'.'<a id="link" href="logout.php">Logout</a></div>';
?>
<ul class="navbar" style="list-style-type:none">
<li ><a id="addi">Add Category</a></li>
<li><a id="addnew">Add New Items</a></li>
<li><a id="addquan">Add Quantity</a></li>
<li><a id="addloc">Add location</a></li>
<li><a id="placeitem">Place Item</a></li>
<li><a id="locinv">Location based Inventory</a></li>
<li><a id="locinv">User Records</a></li>

</ul>
<iframe id="cnt" class="content" src="" frameborder="0">
	
</iframe>
</div>
</body>
</html>