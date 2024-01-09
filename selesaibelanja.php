<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
	include"koneksi.php";
	// session_start();
	$sql=mysql_query("SELECT * FROM member WHERE username = '$_SESSION[user1]'");
	$data=mysql_fetch_array($sql);
	
	echo "<h3>Data Pembeli</h3>";
	echo "<form action='simpantransaksi.php?u=$_GET[u]' method='post' target='_blank'>
			<table width='600' border='0' cellspacing='0' cellpadding='0'>
			  <tr>
			    <td>Nama Lengkap</td>
			    <td><input name='namalengkap' type='text' value='$data[username]'/></td>
			  </tr>
			  <tr>
			    <td>Alamat</td>
			    <td><textarea name='alamat' >$data[alamat]</textarea></td>
			  </tr>
			  <tr>
			    <td>No Telp</td>
			    <td><input name='notelp' type='text' value='$data[notelp]'/></td>
			  </tr>
			  <tr>
			    <td>Email</td>
			    <td><input name='email' type='text' value='$data[email]'/></td>
			  </tr>
			  <tr>
			    <td colspan='2'><input type='submit' value='Checkout'></td>
			  </tr>
			</table>
		</form>";
?>
</div>