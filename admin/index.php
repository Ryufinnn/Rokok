<?php
session_start();
include"../koneksi.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link  href="../logo.jpg" rel="shortcut icon" type="image/png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Purple Haze</title>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="../js/style.css" type="text/css" media="all" />
<script src="../js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="../js/jquery.tools.min.js" type="text/javascript"></script>
<script src="../js/jquery-func.js" type="text/javascript"></script>
<style type="text/css">
button, select, th, td, input, textarea{
padding:5px;
}
table{
	margin-top:10px;
	margin-bottom:10px;
}
tr:hover{
background-color:#FAFAFA;
}
</style>
</head>

<body>
<div id="header">
  <div id="batasheader">
    <div id="bataskiri"><a href="index.php"><img border=1 src="logo.jpg" alt="Home" width="164" height="40" id="Image2"/></a></div>
    <div id="bataskanan">
      <div id="menu">
      <ul id="MenuBar1" class="MenuBarHorizontal">
        <?php
        include"menu.php";
		?>
      </ul>
    </div>
</div>
    
  </div>	
</div>

        <div id="content"></div>
<div id="body">
  <div id="konten">
	<div id="konten-kanan">
    <div class="bar">
    	<p align="center"><b>..:: AREA ADMIN ::..</b></p>
    </div>
    <p>
    <div id="pg">
	<?php	
    	if(!isset($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
			include"login.php";
			}else{
				session_start();
		//----------------------
				if(empty($_GET[pg])){
					include"admin.php";
					}else{
						//-----------------------
						if($_GET[pg]=='20'){
					include"listkategori.php";
					}
				else if($_GET[pg]=='21'){
					include"formkategori.php";
					}
				else if($_GET[pg]=='30'){
					include"listbrand.php";
					}
				else if($_GET[pg]=='31'){
					include"formbrand.php";
					}
				else if($_GET[pg]=='40'){
					include"listmember.php";
					}
				else if($_GET[pg]=='50'){
					include"listproduk1.php";
					}
				else if($_GET[pg]=='51'){
					include"formproduk.php";
					}
				else if($_GET[pg]=='53'){
					include"produkdetail.php";
					}
				else if($_GET[pg]=='60'){
					include"listhubungi.php";
					}
				else if($_GET[pg]=='70'){
					include"listtestimoni.php";
					}
				else if($_GET[pg]=='80'){
					include"pesan.php";
					}
				else if($_GET[pg]=='71'){
					include"tanggaptestimoni.php";
					}
					
				else if($_GET[pg]=='90'){
					include"listpesan.php";
					}
				else if($_GET[pg]=='91'){
					include"detailpesan.php";
					}
					else if($_GET[pg]=='92'){
					include"ioq.php";
					}
						//-----------------------
						else{
							header("location:index.php");
							}
						
						}
						
		//----------------------
					}
	?>
    </div>
    </p>
    </div>
    
    <div>&nbsp;</div>
    
<div>&nbsp;</div>
</div>

<body>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>
