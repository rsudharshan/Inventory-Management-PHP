<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Problem2</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
</script><script type="text/javascript">
function ajax()
{
	title="<strong>List of item types</strong><br/>";
$.ajax({
  url: "itemlist.php",
  cache: false,
  success: function(html){
    $("#itemlist").html(title+ "<p align='right'>Click item to delete</p>" + html );
  }
});
}
function upd()
{   
	inputstring=$('#itemtype').val();
	$.post("itemlist.php",{itemtype: inputstring},function(data){ajax()});
}
function delshow(node)
{    
delcode="DELETE FROM `itemtype` WHERE `itemtype` = '"+node.innerHTML + "'";
delcode1="DELETE FROM `items` WHERE `itemtype` = '"+node.innerHTML + "'";
$.ajax({
  url: "itemlist.php",
  type:"POST",
  cache: false,
  data:"delcode="+delcode+"&delcode1="+delcode1,
  success: function(html){
    alert("item deleted");	ajax();
  }
});
}
function rembtn(node)
{
	 
}
function del(pn)
{
}
</script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body onload="ajax()">
<div class="panel">
<div class="txtboxholder" >
<div class="datalst">
Add Parent item type
  <input type="text" id="itemtype" class="txtbox" /></div>
<div class="txtboxholder" onclick="upd()" id="btn">Add item type</div>
<div id="itemlist" class="ajaxlist">
</div>
</div>
</body>
</html>
