<?php
session_start();
$name=$_SESSION['eid'];
include("config.php");

//$catg=$_REQUEST['cat'];
//$subcatg=$_REQUEST['subcat'];
//$img=$_FILES['file']['tmp_name'];
$itemno=$_REQUEST['t1'];
//$price=$_REQUEST['t2'];
//$desc=$_REQUEST['text'];
//$t=date("d-m-y h-i-s");






if($_REQUEST['sub1'])
  {
	  
	  $sel=mysqli_query($link,"select * from items where itemno='$itemno'");
		while($arr=mysqli_fetch_array($sel)){
	 
	 
	 
		 $n= $arr['itemno'];
	 
		
	 
		}
	  
	  
	  
	  
    if(mysqli_query($link,"delete from items where itemno='$n' "))
	   {
	    move_uploaded_file($_FILES['file']['tmp_name'],"itempics/$itemno.jpg");
		//copy('/itempics/$itemno.jpg', '../itempics/$itemno.jpg');
		
	    echo "<font size='+2'>item delete successfully</font>";
		}
	else
	 {
	   echo "item is not deleted";
	   }
	   
	   
	}   
		 
?>









<body>
<br><br><br>
<center><font color="#660066" size="+3">delete Item</font></center>
<br><br>
<center><fieldset style="width:50%">


<form  name="testform" method="post" enctype="multipart/form-data" >
</tr>



<tr>
  <td><span class="style3">Item No: </span></td>
  <td><label>
    <input name="t1" type="text" id="t1">
  </label></td>
</tr>

<tr><td  colspan="2" align="center"><input name="sub1" type="submit" value="Submit" ></td></tr>

</table>
</form>
</fieldset></center>
</body>
