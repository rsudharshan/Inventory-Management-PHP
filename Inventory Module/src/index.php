<html>
<head>
<title>RIP Problem 3</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
   form
   {
	width:400px;
	min-height:150px;
	height:auto !important;
	background-color:#DDD;
	padding:10px;
margin-right:auto;
margin-left:auto;   }
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
</script>
<?php
include('db.php');
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{ 
$usrname=$_POST['username'];
$pwd=$_POST['password'];
$query="select * from users where username='".$usrname."' and password='".$pwd."'";
$rs=mysql_query($query) or die(mysql_errno($con));
$no=mysql_affected_rows($con);
if($no==1)
{
	$row=mysql_fetch_assoc($rs);
	$username=$row['username'];
  $_SESSION['username']=$username;
  $sid=session_id();
header('Location: main.php');
}
else
{
	echo "enter valid user and password";
	header('Location: index.php');
	exit;
}
}
if(isset($username))
{echo "Hello ". $username ;
}
?>
<body>
<div class="header"><h1 align="center">Inventory Management -  RIP OPEN</h1></div>

<form name="form1" method="post" action="index.php">
  <p>
    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="txtbox">
  </p>
  <p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="txtbox">
  </p>
  <p> 
&nbsp; 
 &nbsp; 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input  type="submit" name="btn"  value="Login">
  </p>
</form>
</body>
</html>