<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
</script>
<script type="text/javascript">
function ajax()
{
	title="<strong>List of items in Stock</strong><br/>";
      table=$('#fromloc').val();
	  itemn=$('#parentitem').val();
$.post("autoc.php", {itemstock: itemn, table:table,autoc: "true"}, function(data){ 
if(data.length >0) 
{ //$('#suggestions').show();
  $('#itemlist').css('display','block'); 
  $('#itemlist').html(data); 
 } });
}
function locationautoc()
{
      loc=$('#loc').val();
$.post("autoc.php", {location: loc, autoc: "true"}, function(data){ 
if(data.length >0) 
{ //$('#suggestions').show();
  $('#loclist').css('display','block'); 
  $('#loclist').html(data); 
 } });
}
function fromlocationautoc()
{
      fromloc=$('#fromloc').val();
$.post("autoc.php", {fromlocation: fromloc, autoc: "true"}, function(data){ 
if(data.length >0) 
{ //$('#suggestions').show();
  $('#fromloclist').css('display','block'); 
  $('#fromloclist').html(data); 
 } });
}
function fill(data)
{
	$('#parentitem').val(data);
	 $('#itemlist').css('display','none');
}
function setlocation(data)
{
	$('#loc').val(data);
	 $('#loclist').css('display','none');
}
function fromlocation(data)
{
	$('#fromloc').val(data);
	 $('#fromloclist').css('display','none');
}
function upd()
{    quant=$('#quant').val();
      it=$('#parentitem').val();
	        loc=$('#loc').val();
				        fromloc=$('#fromloc').val();

	  		  quantityset=true;
	  $.post("place_it.php", {itemn: it,quantity: quant,location:loc,fromlocation:fromloc}, function(data){ list(data) });

}
function list(data)
{
	$('#loc').val(null);
	$('#parentitem').val(null);	$('#quant').val(null);

	$('#updatedlist').html(data);
}
function show()
{
}
</script>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body onload="show()">
<div class="panel"><br/>
<div class="txtboxholder" >Move from<input type="text" id="fromloc" class="txtbox" onInput="fromlocationautoc()" /></div>
<div id="fromloclist" style="display:none" class="suggestionsBox">
</div><br/><div class="txtboxholder" >Select Item <input type="text" id="parentitem" onInput="ajax()" class="txtbox" /></div>
<div id="itemlist" style="display:none" class="suggestionsBox">
</div><br/>
<div class="txtboxholder" >Quantity <input type="text" id="quant" class="txtbox" /></div><br/>
<div class="txtboxholder" >Location <input type="text" id="loc" class="txtbox" onInput="locationautoc()"/></div>
<div id="loclist" style="display:none" class="suggestionsBox">
</div><br/>
<div class="txtboxholder" onclick="upd()" id="btn">Add Item</div>
<div id="updatedlist" class="table"></div>
</div>
</body>
</html>
