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
	  
	  $sel=mysqli_query($link,"select * from items where itemno='$itemno'");
		while($arr=mysqli_fetch_array($sel)){
	 
	 
	 
		 $n= $arr['itemno'];
	 
		
	 
 }
	  
	  
	  
	  
    if(mysqli_query($link,"update items set catg='$catg',subcatg='$subcatg',img='$img',itemno='$itemno',price='$price',info='$desc' where itemno='$n' "))
	   {
	    move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
		//copy('/itempics/$itemno.jpg', '../itempics/$itemno.jpg');
		
	    echo "<font size='+2'>item update successfully</font>";
		}
	else
	 {
	   echo "item is not updated";
	   }
	}   
		 
?>

<body>
<br><br><br>
<center><font color="#660066" size="+3">update Item</font></center>
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
<tr><td  colspan="2" align="center"><input name="sub" type="submit" value="Submit" ></td></tr>
</table>
</form>
</fieldset></center>
</body>
