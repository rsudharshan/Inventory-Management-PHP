<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Problem2</title>
<script type="text/javascript" src="jquery-1.7.1.js"></script>
<script type="text/javascript">
function ajax()
{
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
{   
	        loc=$('#loc').val();
    $.post("loc_invdet.php", {location:loc}, function(data){ list(data) });

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
  <div id="fromloclist" style="display:none" class="suggestionsBox">
</div><br/>
<div id="itemlist" style="display:none" class="suggestionsBox">
</div><br/><br/>
<div class="txtboxholder" >Location <input type="text" id="loc" class="txtbox" onInput="locationautoc()"/></div>
<div id="loclist" style="display:none" class="suggestionsBox">
</div><br/>
<div class="txtboxholder" onclick="upd()" id="btn">View Items</div>
<div id="updatedlist" class="table"></div>
</div>
</body>
</html>
