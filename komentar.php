<div style="padding:10px; background-color:#EDF0EF; margin-left:90px;">
<?php
$sqlkom = mysql_query("select * from komentar where idtesti='$r[idtesti]' order by tglkomentar asc");
while ($rkom = mysql_fetch_array($sqlkom)){
	// echo "
	// $rkom[idmember]<br/>
	// $rkom[idtesti]<br/>";
	$sqlus = mysql_query("select * from member, testimoni, komentar where member.idmember=komentar.idkomentar and testimoni.idtesti=komentar.idtesti and member.idmember='$rkom[idmember]' and testimoni.idtesti='$rkom[idtesti]'");
	$rus = mysql_fetch_array($sqlus);
	
	
	$sqlusq = mysql_query("select * from member where idmember='$rkom[idmember]'");
	$rusq = mysql_fetch_array($sqlusq);
	
	// echo"$rusq[idmember]";
	echo"<table width='500' border='0' cellspacing='5' cellpadding='5'>
	<tr>
		<td width='80'>&nbsp;</td>
		<td width='60' align='right' valign='top'>";
		
		if($rkom['idmember']==0){
		$p="admin.png";
		}else{
		$p=$rusq['foto'];
		}
		
	if(empty($rusq['foto'])){
	   echo "<img src='foto/$p' height='50' width=40 border='1'>";
	}else{
	   echo "<img src='foto/$rusq[foto]' height='50' width=40 border='1'>";
	}
		echo "</td>
		
		<td valign='top' bgcolor='#F0FFF0'><b><a href='#'>";
		if($rkom['idmember']==0){
		$x='ADMIN';
		}else{
		$x=$rusq['namalengkap'];
		}
		echo"$x</a></b><br>$rkom[komentar]<br>$rkom[isikomentar]<br><i>pada $rkom[tglkomentar] WIB</i></td>
	</tr>
	</table>";	
}
?>
<?php
session_start();
if(empty($_SESSION['user1']) and empty($_SESSION['pass1'])){
	}else{
$sqluser = mysql_query("select * from member where username='$_SESSION[user1]'");
$ruser = mysql_fetch_array($sqluser);
echo "<form name='form1' method='post' action='kirimkomentar.php?mod=kom&idkategori=$_GET[idkategori]&idproduk=$_GET[idproduk]'>
	  "; ?>
	  <table width="500" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td rowspan="2" width="40" valign="top"><?php if(empty($ruser['foto'])){
	   echo "<img src='foto/no-thumbnail.jpg' height='50' width=40 border='1'>";
	}else{
	   echo "<img src='foto/$ruser[foto]' height='50' width=40 border='1'>";
	}
		  echo "<input type='hidden' name='idmember' id='idmember' value='$ruser[idmember]'>
		  <input type='hidden' name='idtesti' id='idtesti' value='$r[idtesti]'/>"; ?></td>
    <td><?php echo"<input name='komentar' id='komentar' size='30' placeholder='komentar'/>"; ?></td>
  </tr>
  <tr>
    <td><?php echo"<textarea name='isikomentar' id='isikomentar' cols='30' rows='2' placeholder='isi komentar'></textarea>"; ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><?php echo"<input type='submit' name='button' id='button' value='Kirim Komentar'/>"; ?></td>
  </tr>
</table>
	  <?php
	echo"</form>";
	}
?>
</div>
