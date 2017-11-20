<?php
session_start();
$name=$_SESSION['eid'];
include("config.php");
$catg=$_REQUEST['cat'];
$subcatg=$_REQUEST['subcat'];
if($_REQUEST['sub'])
{
 echo "<script>location.href='home.php?view=$catg & view1=$subcatg'</script>";
}

  
?><head>
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

</head>


<style type="text/css">
<!--
.style4 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<body>
<br><br><br>
<center><font color="#660066" size="+3">View All</font></center>
<br><br>
<center><fieldset style="width:50%">
<form  name="testform" method="post" enctype="multipart/form-data" >

<table align="center">
<tr><td width="118"><span class="style4">Category:</span></td>

<td width="281"><select name=cat onChange="AjaxFunction(this.value);">
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

<tr><td><span class="style4"> Sub Category:</span></td>
<td><select name=subcat>

</select></td>
</tr>
<br>
<br>
<tr><td colspan="2" align="center"><input  name="sub" type="submit" value="View" ></td></tr>
</table>
</form>
</fieldset></center>
</body>