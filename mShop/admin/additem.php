<?php
session_start();
$name=$_SESSION['eid'];
include("config.php");

$catg=$_REQUEST['cat'];
$subcatg=$_REQUEST['subcat'];
$img=$_FILES['file']['tmp_name'];
$itemno=$_REQUEST['t1'];
$price=$_REQUEST['t2'];
$desc=$_REQUEST['text'];
$t=date("d-m-y h-i-s");


if($_REQUEST['sub'])
  {
    if(mysqli_query($link,"insert into items  values('$catg','$subcatg','$img','$itemno','$price','$desc','$t') "))
	   {
	    move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
		//copy('/itempics/$itemno.jpg', '../itempics/$itemno.jpg');
		
	    echo "<font size='+2'>item inserted successfully</font>";
		}
	else
	 {
	   echo "item is not inserted";
	   }
	}   
		 
?><head>
<!-- disbale js 
<script>

function AjaxFunction(cat_id)
{
var httpxml;
try
  {
  // Firefox, Opera 8.0+, Safari
  httpxml=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
		  try
   			 		{
   				 httpxml=new ActiveXObject("Msxml2.XMLHTTP");
    				}
  			catch (e)
    				{
    			try
      		{
      		httpxml=new ActiveXObject("Microsoft.XMLHTTP");
     		 }
    			catch (e)
      		{
      		alert("Your browser does not support AJAX!");
      		return false;
      		}
    		}
  }
function stateck() 
    {
    if(httpxml.readyState==4)
      {

var myarray=eval(httpxml.responseText);
// Before adding new we must remove previously loaded elements
for(j=document.testform.subcat.options.length-1;j>=0;j--)
{
document.testform.subcat.remove(j);
}


for (i=0;i<myarray.length;i++)
{
var optn = document.createElement("OPTION");
optn.text = myarray[i];
optn.value = myarray[i];
document.testform.subcat.options.add(optn);

} 
      }
    }
	var url="dd.php";
url=url+"?cat_id="+cat_id;
url=url+"&sid="+Math.random();
httpxml.onreadystatechange=stateck;
httpxml.open("GET",url,true);
httpxml.send(null);
  }
</script>
-->
</head>


<style type="text/css">
<!--
.style3 {font-size: 18px; font-weight: bold; }
-->
</style>
<body>
<br><br><br>
<center><font color="#660066" size="+3">Add Item</font></center>
<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" >
<table align="center">
<tr><td width="111"><span class="style3">Category:</span></td>


<!-- on change -->

<td width="264"><select name=cat onChange="AjaxFunction(this.value);">
  <option value=''>Select One</option>
 <?php
require "config.php";// connection to database 
$q=mysqli_query($link,"select * from category ");
while($n=mysqli_fetch_array($q)){
echo "<option value=".$n['cat_id'].">".$n['category']."</option>";
}
?>

</select></td>
</tr>

<tr><td><span class="style3"> Sub Category:</span></td>
<td><select name=subcat onChange="AjaxFunction(this.value);">
 <?php
require "config.php";// connection to database 
$m=mysqli_query($link,"select * from subcategory ");
while($s=mysqli_fetch_array($m)){
echo "<option value=".$s['subcategory'].">".$s['subcategory']."</option>";
}
?>
</select></td>
</tr>
<tr>
<td><span class="style3">Image:</span></td>
<td><input name="file" type="file"></td></tr>
<tr>
  <td><span class="style3">Item No: </span></td>
  <td><label>
    <input name="t1" type="text" id="t1">
  </label></td>
</tr>
<tr>
  <td><span class="style3">Price:</span></td>
  <td><label>
  <input name="t2" type="text" id="t2">
  </label></td>
</tr>
<tr>
<td><span class="style3">Description:</span></td>
<td><textarea name="text" cols="35" rows="6"></textarea></td></tr>
<tr><td  colspan="2" align="center"><input name="sub" type="submit" value="Submit"></td></tr>
</table>
</form>
</fieldset></center>
</body>
