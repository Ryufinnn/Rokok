<?php
session_start();
include "koneksi.php";
$sqlt = mysql_query("select * from member where username='$_SESSION[user1]'");
$rt = mysql_fetch_array($sqlt);
$sqlp = mysql_query("select * from produk where idproduk='$_GET[idproduk]'");
$rp = mysql_fetch_array($sqlp);
echo "<form name='form1' method='post' action='posttestimoniaksi.php?mod=stat'>
  <table width='600' border='0' cellspacing='5' cellpadding='5'>
    <tr>
      <td width='90' align='right' rowspan='2'>
	  <input type='hidden' name='idmember' value='$rt[idmember]'/><input type='hidden' name='idproduk' value='$rp[idproduk]'/><input type='hidden' name='idkategori' value='$rp[idkategori]'/>";
	if(empty($rt['foto'])){
	   echo "<img src='x.jpg' height='80' border='1'>";
	}else{
	   echo "<img src='foto/$rt[foto]' height='80' border='1'>";
	}
	  echo "</td>
      <td bgcolor='#DFFFDF'><input name='testi' id='testi'  rows='3' placeholder='subject' size='40px'></td>
    </tr>
	<tr>
		<td bgcolor='#DFFFDF'><textarea name='isitesti' id='isitesti' cols='50' rows='3' placeholder='isi'></textarea></td>
	</tr>
    <tr>
      <td width='80'>&nbsp;</td>
      <td bgcolor='#DFFFDF'><input type='submit' name='button' id='button' value='POST'></td>
    </tr>
  </table>
</form>";
?>
