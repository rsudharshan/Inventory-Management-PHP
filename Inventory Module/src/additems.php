<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Problem2</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
</script><link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript">
function ajax()
{
	title="<strong>List of item types</strong><br/>";
      pit=$('#parentitem').val();
$.post("autoc.php", {pit: pit,autoc: "true"}, function(data){ 
if(data.length >0) 
{ //$('#suggestions').show();
  $('#itemlist').css('display','block'); 
  $('#itemlist').html(data); 
 } });
 
}
function fill(data)
{
	$('#parentitem').val(data);
	 $('#itemlist').css('display','none');
}
function upd()
{   
 it=$('#item').val();
      pit=$('#parentitem').val();
	  $.post("upd_data.php", {items: it,itemtype: pit}, function(data){ list(data) });

}
function list(data)
{    
	$('#item').val(null);
	$('#parentitem').val(null);
	$('#updatedlist').html(data);
}
function show()
{
		  $.post("upd_data.php", {}, function(data){ list(data) });

}
</script>
<style type="text/css">
body
{
	 font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
}
</style>
</head>
<body onload="show()">
<div class="panel">
<div class="txtboxholder" >Add new item <input type="text" id="item" class="txtbox" /></div><br/>
<div class="txtboxholder" >Add item to <input type="text" id="parentitem" onInput="ajax()" class="txtbox" />
Category</div>
<div id="itemlist" style="display:none" class="suggestionsBox">
</div>
<br/>
<div class="txtboxholder" onclick="upd()" id="btn">Add Item</div>

<div id="updatedlist" class="table"></div>
</div>
</body>
</html>
