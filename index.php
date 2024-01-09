<?php
session_start();
include"koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="themes/1/tooltip.css" rel="stylesheet" type="text/css" />
    <script src="themes/1/tooltip.js" type="text/javascript"></script>
    
<link  href="logo.jpg" rel="shortcut icon" type="image/png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Purple Haze</title>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
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
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.tools.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>

<body onload="MM_preloadImages('logo.jpg')" tracingsrc="logo.jpg" tracingopacity="30">
<div id="header">
  <div id="batasheader">
    <div id="bataskiri"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','logo.jpg',1)"><img border=1 src="logo.jpg" alt="Home" width="164" height="40" id="Image2"/></a></div>
    <div id="batastengah">
    <?php
    if(!empty($_SESSION['user1'])){
		?>
        <p style="color:#FFF"><b>Selamat Datang <br/><font size="+1"><?php echo $_SESSION[user1]; ?></font></b></p>
        <?php
		}
	?>
   	  <ul id="MenuBar1" class="MenuBarHorizontal2">
   	    <li>
   	     <span class="muncul"><form></form></span>
        </li>
   	  </ul>
    </div>
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
	    <?php include"account.php"; ?>
    </li>    
    <li>
    	<?php include"editaccount.php"; ?>
    </li>    
    <li>
	     <?php include"gantifoto.php"; ?>
    </li>    
    <li>
    	<?php include"cekorder.php"; ?>
    </li>    
    <li>
    	<?php include"keranjang.php"; ?>	
     </li>
     <?php
     if(!empty($_SESSION['user1'])){
	 ?>
     <li>
     	<a class="home" href="logout.php">
            <img src="x.jpg" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/>
            <span class="sides">
            Logout</span></a>
     </li>
     <?php
	 }
	 ?>
</ul>
</div></div>
        <div id="content">
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><a href="#"><img src="js/images/header.jpg" alt="" width="1030" height="252"/></a></li>
            <li><a href="#"><img src="js/images/slide2.jpg" alt="" width="1030" height="252"/></a></li>
           
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
				else if($_GET[pg]=='16'){
					include"akun.php";
					}
				else if($_GET[pg]=='17'){
					include"keranjangbelanja.php";
					}
				else if($_GET[pg]=='18'){
					include"order.php";
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
        <div class="AccordionPanelTab">Pembayaran</div>
        <div class="AccordionPanelContent">
          
		    <img src="images/a.png" alt="" width="200" height="330"/><br><br>
			<img src="images/pembayaran.jpg" alt="" width="200" height="152"/>
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
	
	<div id="bebas">
	<?php 
	if(empty($_GET[pg])){
	echo"&nbsp;";
	}else{
		echo"<p align='center'>
<font size='+1'>Purple Haze <br/>
Jl.Angkasa Puri 1 No 06 Tunggul Hitam<br/>
Padang<br/>
Telp.(0751)447689</font>
</p>
";}
	?>    
	</div>
    <div>&nbsp;</div>
</div>
<div>&nbsp;</div>
</div>
<div id="footer" style="color:#FFFFF;"><marquee behavior="alternate"><b><a href="admin" style="text-decoration:none;">Purple Haze &copy; M. Ridzky Amin & Suhandre Fiboy Adrizal - 2016</a></b></marquee></div>
<body>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
var TabbedPanels4 = new Spry.Widget.TabbedPanels("TabbedPanels4");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
var TabbedPanels5 = new Spry.Widget.TabbedPanels("TabbedPanels5");
</script>
</body>
</html>
