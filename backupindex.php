<?php
session_start();
include"koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="themes/1/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/tooltip.js" type="text/javascript"></script>
    
<link  href="x.jpg" rel="shortcut icon" type="image/png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>X-tech Computer</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<link rel="stylesheet" href="js/style.css" type="text/css" media="all" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.tools.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>

<body onload="MM_preloadImages('Untitled-2.jpg')" tracingsrc="Untitled-1.jpg" tracingopacity="30">
<div id="header">
  <div id="batasheader">
    <div id="bataskiri"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','Untitled-2.jpg',1)"><img border=1 src="Untitled-1.jpg" alt="Home" width="164" height="40" id="Image2"/></a></div>
    
<div id="bataskanan">
  <div id="menu">
      <ul id="MenuBar1" class="MenuBarHorizontal">
        <?php include"menu.php"; ?>
      </ul>
    </div>
  </div>
    
  </div>	
</div>
<div id="side"><link rel="stylesheet" type="text/css" href="js/styles.css" />
<div id="main">
<ul id="navigationMenu">
    <li>
	    <a class="home" href="#">
            <img src="icon/member.png" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/><span class="sides" style="padding-bottom:10px;"><b>&lsaquo; AKUN </b><?php include"login.php";?>
</span>
        </a>
    </li>    
    <li>
    	<a class="about" href="#">
            <img src="icon/edit.png" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/><span class="sides" >Register</span><span style="left:150px;"><b>register</b></span>
        </a>
    </li>    
    <li>
	     <a class="services" href="#">
            <img src="x.jpg" width="40px" height="40px" style="position:absolute;  border:#000 solid 1px;"/><span class="sides" >Ganti Foto</span>
         </a>
    </li>    
    <li>
    	<a class="portfolio" href="#">
            <img src="icon/order.png" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/><span class="sides" >Cek Order</span>
        </a>
    </li>    
    <li>
    	<a class="contact" href="#">
            <img src="icon/keranjang.jpg" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/><span class="sides" >Keranjang Belanja</span>
    </a></li>
</ul>
</div></div>
        <div id="content">
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><a href="#"><img src="js/images/slide1.jpg" alt="" width="1030" height="252"/></a></li>
            <li><a href="#"><img src="js/images/slide1.jpg" alt="" width="1030" height="252"/></a></li>
            <li><a href="#"><img src="js/images/slide1.jpg" alt="" width="1030" height="252"/></a></li>
            <li><a href="#"><img src="js/images/slide1.jpg" alt="" width="1030" height="252"/></a></li>
          </ul>
        </div>
        <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
      </div>
    </div>
<div id="body">
  <div id="konten">
	<div id="konten-kanan">
    <div class="bar">
    	<p>Content</p>
    </div>
    <p>
    <div id="pg">
	<?php
    	if(empty($_GET[pg])){
			include"produk.php";
			}else{
		//----------------------
				if($_GET[pg]=='1'){
					include"formregister.php";
					}
				else if($_GET[pg]=='2'){
					include"produk.php";
					}
				else if($_GET[pg]=='10'){
					include"profile.php";
					}
				else if($_GET[pg]=='11'){
					include"cara.php";
					}
				else if($_GET[pg]=='12'){
					include"hubungi.php";
					}
				else if($_GET[pg]=='13'){
					include"lapcust.php";
					}
				else if($_GET[pg]=='14'){
					include"selesaibelanja.php";
					}
				else if($_GET[pg]=='15'){
					include"produkdetail.php";
					}
				
		//----------------------
				
					else{
						echo"tidak ada";
						}
				}
	?>
    </div>
    </p>
    </div>
    <div id="suok">
    <div id="konten-kiri">
      <div id="TabbedPanels1" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Terbaru</li>
          <li class="TabbedPanelsTab" tabindex="0">Terlaris</li>
          <li class="TabbedPanelsTab" tabindex="0">Favorite</li>
</ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent"><?php include"terbaru.php"; ?></div>
          <div class="TabbedPanelsContent"><?php include"sell.php"; ?></div>
          <div class="TabbedPanelsContent"><?php include"view.php"; ?></div>
</div>
      </div>
    </div>
    <div id="konten-kiri" style="margin-top:10px;">
    <div id="Accordion1" class="Accordion" tabindex="0">
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">Guest</div>
        <div class="AccordionPanelContent">
          <div id="TabbedPanels5" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
              <li class="TabbedPanelsTab" tabindex="0">Kategori</li>
              <li class="TabbedPanelsTab" tabindex="0">Brand</li>
            </ul>
            <div class="TabbedPanelsContentGroup">
              <div class="TabbedPanelsContent">Kategori</div>
              <div class="TabbedPanelsContent">Brand</div>
            </div>
          </div>
        </div>
      </div>
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">Member</div>
        <div class="AccordionPanelContent">
        <div id="TabbedPanels4" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">recent</li>
          <li class="TabbedPanelsTab" tabindex="0">favorite</li>
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent"><?php include"terbaru.php"; ?></div>
          <div class="TabbedPanelsContent"><?php include"sell.php"; ?></div>
        </div>
      </div>
        </div>
      </div>
    </div>

    </div>
    </div>
    
	<div id="konten-kanan">
    <div class="bar">
    	<p>Kategori</p>
    </div>
    <?php include"produk-kat.php"; ?>
    </div>
	<div id="konten-kanan">
    <div class="bar">
    	<p>Brand</p>
    </div>
    <?php include"produk-brand.php"; ?>
    </div>
	<div id="bebas">
	<?php 
	if(empty($_GET[pg])){
	echo"&nbsp;";
	}else{
		echo"<p align='center'>
<font size='+1'>X-tech Computer : Your Trusting Partner<br/>
Jl.Ksatria No.6 Tarandam<br/>
Padang (Komplek pertokoan apotik tarandam)<br/>
Telp.0751-7737877</font>
</p>
";}
	?>    
	</div>
    <div>&nbsp;</div>
</div>
<div>&nbsp;</div>
</div>
<div id="footer" style="color:#F00;"><marquee behavior="alternate"><b>X-tech Computer &copy; ras1245 - 2014</b></marquee></div>
<body>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
var TabbedPanels4 = new Spry.Widget.TabbedPanels("TabbedPanels4");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
var TabbedPanels5 = new Spry.Widget.TabbedPanels("TabbedPanels5");
</script>
</body>
</html>
