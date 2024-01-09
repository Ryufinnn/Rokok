			<?php 
			if(empty($_SESSION['user1'])){
			?>
<a class="home" href="index.php?pg=10">
            <img src="icon/edit2.png" width="40px" height="40px" style="position:absolute;  border:#000 solid 1px;"/>
            <span class="sides">
			Profile
			<?php
			}else{
			?>
<a class="home" href="#">
            <img src="icon/edit2.png" width="40px" height="40px" style="position:absolute;  border:#000 solid 1px;"/>
            <span class="sides" style="top:-90px;">
            Ganti Foto
			<form id="form1" name="form1" method="post" action="gantifotoaksi.php" enctype="multipart/form-data">
<?php
include "koneksi.php";
		$sql = mysql_query("select * from member where username = '$_SESSION[user1]'");
		while($data = mysql_fetch_array($sql)){
?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="20%"><?php 
			if(empty($data['foto'])){
				echo "<img src='x.jpg' width='80' height='100' border='2'>";
			}else{
				echo "<img src='foto/$data[foto]' width='80' height='100' border='2'>";
			}
		?>
      <input name="username" type="hidden" id="username" value="<?php echo "$_SESSION[user1]"; ?>" /></td>
      <td width="80%">Upload Foto anda <br/>*.jpg,*.png;</td>
    </tr>
    <tr>
      <td colspan="2"><input type="file" name="fupload" id="fupload"/></td>
    </tr>
    <tr>
      <td><input type="submit" name="button" id="button" value="Upload" /></td><td>&nbsp;</td>
    </tr>
  </table>
 <?php
 }
 ?>
            </form>	
			<?php
			}
			?>
			</span>
         </a>