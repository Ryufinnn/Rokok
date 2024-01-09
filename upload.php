<?php
	$lokasi_file = $_FILES['fupload']['tmp_name'];
	$nama_file   = $_FILES['fupload']['name'];
	if (!empty($lokasi_file)){  
		move_uploaded_file($lokasi_file,"upload/$nama_file");
		include "koneksi.php";
		mysql_query("update pesan set bukti = '$nama_file' where idpesan = '$_POST[idpesan]'");
		header("location:index.php?u=$_GET[u]&pg=13&idpesan=$_POST[idpesan]");
	}
	?>
		<script type="text/javascript">
<!--
var answer = confirm ("Please Masukan Bukti Pembayaran terlebih dahulu..!!!!")
if (answer)
window.location="<?php echo"index.php?u=$_GET[u]&pg=13&idpesan=$_POST[idpesan]";?>"
// -->
</script>
		<?php
?>