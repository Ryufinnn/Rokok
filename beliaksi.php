<?php
	session_start();
	include "koneksi.php";
	session_start();
	if(empty($_SESSION['user1']) and empty($_SESSION['pass1'])){
		?>	
		<script type="text/javascript">
<!--
var answer = confirm ("Anda harus login terlebih dahulu untuk menggunkan modul ini!")
if (answer)
window.location="<?php echo"index.php";?>"
// -->
</script>
		<?php
		}else{
			// header("location:keranjangbelanja.php");	
	
	$modul = $_GET['modul'];
	$aksi = $_GET['aksi'];
	
	if($modul == 'keranjang' and $aksi == 'tambah'){
		$sid = session_id();	
	
		$sql = mysql_query("select stok from produk where idproduk='$_GET[idproduk]'");
		$r = mysql_fetch_array($sql);
		if($r['stok'] == 0){
			echo "Stok Habis";	
		}else{
			$sqlcek = mysql_query("select idproduk from pesan_temp where idproduk='$_GET[idproduk]' and idsession='$sid'");
			$ketemu = mysql_num_rows($sqlcek);
			if($ketemu == 0){
				mysql_query("insert into pesan_temp (idproduk, jumlah, idsession, tglpesantemp) values ('$_GET[idproduk]', 1, '$sid', NOW())");	
			}else{
				mysql_query("update pesan_temp set jumlah=jumlah+1, where idsession='$sid' and idproduk='$_GET[idproduk]')");	
			}
			header("location:index.php?u=$_SESSION[user1]");
		}
	}else if($modul == 'keranjang' and $aksi == 'ubah'){
		$id = $_POST['id'];
		$jml_data = count($id);
		$jumlah = $_POST['jml'];
		for($i=1; $i<=$jml_data; $i++){
			mysql_query("update pesan_temp set jumlah='$jumlah[$i]' where idpesantemp='$id[$i]'");	
		}	
		header("location:index.php?u=$_SESSION[user1]");
	}else if($modul == 'keranjang' and $aksi == 'hapus'){
		mysql_query("delete from pesan_temp where idpesantemp='$_GET[idpesantemp]'");	
		header("location:index.php?u=$_SESSION[user1]&pg=17");
	}
	}
?>