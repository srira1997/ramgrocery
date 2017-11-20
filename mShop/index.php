<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cz"><head>
<?php
error_reporting(1);
 include("index1.php");
?>
<title>online grocery</title>

<meta http-equiv="Content-language" content="cs">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<meta name="author" content="Kl?ra Frolichov?, Sunlight webdesign">
<meta name="Copyright" content="Kl?ra Frolichov?, Sunlight webdesign 2007">
<meta name="design" content="Sunlight webdesign - http://www.sunlight.cz, info@sunlight.cz">
<link rel="stylesheet" type="text/css" href="style.css" title="default">

</head>


<body>
<div id="WholePage">
<div id="Inner">
<div id="Container" style="border:groove">
<div id="Head">
<div id="Head_left">
<div id="Leaf_top"><img src="img/new.jpg" width="324" /></div>
<div id="Leaf_bottom"> <a class="registration" href="index.php?con=11">REGISTRATION</a> <a class="log-in" href="index.php?con=12">LOG IN</a> </div>
</div>
<div id="Head_right">
<div id="Logo">
<div id="Name"><span class="blue">O</span><span>nline</span>&nbsp;<span>Grocery</span>&nbsp;<span class="blue">S</span><span>tore</span> </div>
<div id="Informations">shopping site </div>
</div>
<div id="Top_menu"> <a class="kart" <href=""><span><!--CART--></span></a> <a class="orders" href=""><span><!--GALLERY--></span></a>
<a class="contact" href="index.php?con=1"><span>CONTACT</span></a>
<a class="help" href="index.php?con=2"><span>ABOUT US</span></a>
<a class="home" href="?page=home"><span>HOME</span></a>
</div>
</div>
</div>
<div id="CentralPart">
<div id="LeftPart">
<div id="Menu">
<div id="Menu_header">
<div class="menu_header_left"> <span class="menu_text"><font face="verdana">Search</font></span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <!--<a class="menu_item" href="?page=home"><span>--><!-- Start of Page Search -->

		
		    <h5>&nbsp;</h5>
			<form method="post">
		    <input type="text" name="t1" value="search" onfocus="if(this.value=='search'){this.value='';}"onBlur="if(this.value==''){this.value='search';}"/>
            <input name="sear" type="submit" class="button" id="sub" value="Go" />
</form>
<?php
	if($_REQUEST['sear'])
	  {
	   $se=$_REQUEST['t1'];
	   if($se!=NULL)
	   {
	   echo "<script>location.href='index.php?se=$se'</script>";
	   }
        }
		?>
		 

		  <h5>&nbsp;</h5>
		  <!--</form>-->
		

		<!-- End of Page Search --></span></a><br>
</div>
<div class="menu_header_left"> <span class="menu_text">Products</span>
</div>
<div class="menu_header_right"> </div>
</div>
<div id="Menu_content"> <a class="menu_item" href="index.php?catg=1 & subcatg=fruits"><span>fruits</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=veggetables"><span>vegetables</span></a><br>
<a class="menu_item" href="index.php?catg=1 & subcatg=grains"><span>grains</span></a>
<br>

<br>

</div>

</div>
<img src="usepics/hh.png" width="228" height="183" /></div>

<div id="RightPart">
<?php
  if($_REQUEST['se'])
	    {
		include("search.php");
		}
if($_REQUEST['con']==1)
{
include("contact.php");
}
if($_REQUEST['con']==2)
{
include("about.php");
}

if($_REQUEST['con']==11)
 {
	include("register.php");
	 }
	if($_REQUEST['con']==12)
 {
	include("login.php");
	 }
	
		if($_REQUEST['con']==13)
 {
	include("welcome.php");
	 }
		if($_REQUEST['con']==14)
 {
	include("viewitem.php");
	 }

if(!($_REQUEST['catg'])and !($_REQUEST['con'])and !($_REQUEST['se']))
{
include("home.php");
}

if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='fruits')
{
include("fruits.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='veggetables')
{
include("veggetables.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='grains')
{
include("grains.php");
}
}

?>

</div>
<div class="cleaner"></div>
</div>
<div id="Bottom">
<p class="down"><b>All rights Reserved  by:MANDADAPUSRIRAM;</b></p>

</div>
</div>
</div>
</div>
</div>

</body></html>