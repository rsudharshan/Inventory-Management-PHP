<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Problem2</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
</script><script type="text/javascript">
function ajax()
{
	title="<strong>List of items in Stock</strong><br/>";
      itemn=$('#parentitem').val();
$.post("autoc.php", {itemn: itemn, autoc: "true"}, function(data){ 
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
{    quant=$('#quant').val();
      it=$('#parentitem').val();
	  		  quantityset=true;
	  
	  $.post("upd_quant.php", {itemn: it,quantity: quant}, function(data){ list(data) });

}
function list(data)
{
	$('#quant').val(null);
	$('#parentitem').val(null);
	$('#updatedlist').html(data);
}
function show()
{
		  $.post("upd_quant.php", {}, function(data){ list(data) });
}
</script>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body onload="show()">
<div class="panel"><div align="right">Stores default in Stock</div>
<br/>
<div class="txtboxholder" >Select Item <input type="text" id="parentitem" onInput="ajax()" class="txtbox" /></div>
<div id="itemlist" style="display:none" class="suggestionsBox">
</div><br/>
<div class="txtboxholder" >Quantity <input type="text" id="quant" class="txtbox" /></div>
<div class="txtboxholder" onclick="upd()" id="btn">Add Item</div>
<div id="updatedlist" class="table"></div>
</div>
</body>
</html>
