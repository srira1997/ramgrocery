<?php
error_reporting(0);
session_start();
$id=$_SESSION['eid'];
include("config.php");
$itemno=$_REQUEST['itemno'];
if($_REQUEST['send'])
  {
  $pname=$_REQUEST['pname'];
  $itemno=$_REQUEST['m2'];
  $price=$_REQUEST['m3'];

  $uname=$_REQUEST['t1'];
 																																																		
  $mob_no=$_REQUEST['t3'];
  $add=$_REQUEST['t4'];
 
  $city=$_REQUEST['t6'];
  $q=$_REQUEST['qn'];
  $order_no=ord.rand(100,500);
 if(mysqli_query($link,"insert into orders values('$pname','$itemno','$price','$uname','$mob_no','$add','$city','$order_no','$q')"))
    {
	 echo "<script>location.href='ordersent.php?order=$order_no'</script>";
	  }
	  
    }
	
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:index.php");
}
else if($id=="")
{
header("location:index.php");
}
	
?>
<script>
function myFunction(){
	

	
			if(document.getElementById("q").value == 1)
			{
				document.getElementById("m3").value=<?php
					$sel=mysqli_query($link,"select * from items where itemno='$itemno'");
					$mat=mysqli_fetch_array($sel);
					
					echo $mat['price'];
				?>
				 
			}
			if(document.getElementById("q").value == 2)
			{
				
				var r=document.getElementById("m3").value;
				r=r*2;
				document.getElementById("m3").value=r;
				
			}
			if(document.getElementById("q").value == 3)
			{
				
				var r=document.getElementById("m3").value;
				r=r*3;
				document.getElementById("m3").value=r;
				
			}
			if(document.getElementById("q").value == 4)
			{
				var r=document.getElementById("m3").value;
				r=r*4;
				document.getElementById("m3").value=r;
				
				
			}
			if(document.getElementById("q").value == 5)
			{
				var r=document.getElementById("m3").value;
				r=r/2;
				document.getElementById("m3").value=r;
				
				
			}
	
	
}
	

</script>

<body>
<div>
<div><br/><center><h2><font face="verdana" size="+2" color="#00CCFF">Welcome 
<?php
$sel=mysqli_query($link,"select * from register where id='$id'");
  $arr=mysqli_fetch_array($sel);
  echo $arr['title']."&nbsp;".$arr['fname'];
?>
</font></h2></center>
<h2 align="right"><a href="?log=out"><font color="#0099FF">LogOut</font></a></h2><br>
<h2 align="right"><a href="index.php"><font color="#0099FF">Home</font></a></h2>
</div>
<div style="width:25%;float:right">
<br><br><br><br>
<img src="usepics/7.jpg">
</div>
<center><div style="width:70%;float:right" align="center">
<center><h2><font face="Lucida Handwriting" size="+1" color="#00CCFF">Order Form</font></h2></center>
<fieldset style="background:#CC99CC;width:50%">
<br><br>
	<?php
	$sel=mysqli_query($link,"select * from items where itemno='$itemno'");
    $mat=mysqli_fetch_array($sel);
	?>
<form method="post" name="f1" onSubmit="return vali()" >
<table width="366" border="1" align="center">


  <tr>
    <td width="164"><div align="center"><font size="+1" face="Comic Sans MS"><b> Item No:</b></font></div></td>
    <td width="192">
      
        <input name="m2" type="text" id="m2" onChange="return fnam()" readonly="readonly" value="<?php echo $mat['itemno'];?>">    </td>
		
		
  </tr>
   <tr>
    <td width="164"><div align="center"><font size="+1" face="Comic Sans MS"><b> Product Name:</b></font></div></td>
    <td width="192">
      
        <input name="pname" type="text"  onChange="return fnam()" readonly="readonly" value="<?php echo $mat['info'];?>">    </td>
		
		
  </tr>
  
  
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><strong>Price :</strong></font></div></td>
    <td><input name="m3" type="text" id="m3" onChange="return lnam()" readonly="readonly" value="<?php echo $mat['price'];?>">  </td>
  </tr>
  <tr>
		<td>
		<div align="center"><font size="+1" face="Comic Sans MS"><b>quantity Per KG:</b></font></div>
		</td>
		<td width="192" width="164">
		
				<select id="q" name="qn" onchange="myFunction()">
				
				<option value="1">1</option>
				<option value="5">half KG</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				</select>
		
		</td>
		</tr>
  
  
  

  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><b>&nbsp;User Name  : </b></font></div></td>
    <td><input name="t1" type="text" id="t1" onChange="return email()"></td>
  </tr>

  
  <tr> <td><div align="center"><font size="+1" face="Comic Sans MS"><b>Mobile no: </b></font></div></td>
    <td><input name="t3" type="text" id="t3" onChange="return phone()"></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><strong>Address:</strong></font></div></td>
    <td><label>
      <textarea name="t4" id="t4" value="return add()"></textarea>
    </label></td>
  </tr>
 
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><strong>City:</strong></font></div></td>
    <td><input name="t6" type="text" id="t6" onChange="return coun()"></td>
  </tr>
  <tr>
    <td colspan="2"><label><br>
    <center>
      <input name="send" type="submit" id="send" value="Send">
    </center>
    </label></td>
    </tr>
</table>
 </form>
</fieldset>
</div>
</center>

</div>
</body>
