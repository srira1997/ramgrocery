<?php

include("config.php");
$se=$_REQUEST['se'];


//if(!is_string($se){
$sel=mysqli_query($link,"select * from items where itemno='$se'");
	    while($arr=mysqli_fetch_array($sel))
         {
		 $a=$arr['itemno'];
		 
		
		
		  echo"<form method='post'><br><br><center><table width='500' border='1' cellspacing='0' cellpadding='0'>
  <tr>
  <br>
    <td  rowspan='4'><img src='itempics/$a.jpg' width=300 height=200></td>
    <td ><br><b>&nbsp;Item No:</b>".$arr['itemno']."
<br><br> <b>&nbsp;Product:</b>". $arr['desc']."
<br><br><b>&nbsp;Price:</b>".$arr['price']."
<br><br><b>&nbsp;Details:</b>".$arr['info']."
 <br><br></td>
  <td> <br><br><a href='index.php?con=12 & itemno=$a'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>
      <!--<a href='index.php?con=14 & itemno=$i'><img src='images/view7.jpg' width='70' height='20'/></a>--></td>

  </tr>
</table></center></form>";

		 
		 // }
}

		  
		  if(is_string($se)){
		  $sel=mysqli_query("select * from items where info='$se'");
	    while($arr=mysqli_fetch_array($sel))
         {
		 $a=$arr['itemno'];
		
		  echo"<form method='post'><br><br><center><table width='500' border='1' cellspacing='0' cellpadding='0'>
  <tr>
  <br>
    <td  rowspan='4'><img src='itempics/$a.jpg' width=300 height=200></td>
    <td ><br><b>&nbsp;Item No:</b>".$arr['itemno']."
<br><br> <b>&nbsp;Product:</b>". $arr['desc']."
<br><br><b>&nbsp;Price:</b>".$arr['price']."
<br><br><b>&nbsp;Details:</b>".$arr['info']."
 <br><br></td>
  <td> <br><br><a href='index.php?con=12 & itemno=$a'><img src='images/MetalPlakDa5new.gif' width='70' height='20'/></a>
      <!--<a href='index.php?con=14 & itemno=$i'><img src='images/view7.jpg' width='70' height='20'/></a>--></td>

  </tr>
</table></center></form>";
		  }
		  
		  
		  } 
		  
		  
		  
		
		   ?>