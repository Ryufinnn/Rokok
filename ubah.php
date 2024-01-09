<?php
session_start();
	include "koneksi.php";
	$sid = session_id();	
	
		$sql = mysql_query("select * from produk where idproduk='$_GET[idproduk]'");
		$r = mysql_fetch_array($sql);
		
		$sql1 = mysql_query("select * from pesan_temp where idpesantemp='$_GET[idpesantemp]'");
		$r1 = mysql_fetch_array($sql);
		
		/* echo"
		$_GET[idpesantemp]</br>
		$_GET[idproduk]</br>
		";
		 */
		$no=$_GET[no];
		$juml=$_POST['jml'][$no];
		/* echo"
		no=$no</br>
		jumlah=$juml
		</br>
		stok=$r[stok]</br>
		"; */
		if($juml > $r[stok] ){
			?>
			<script type="text/javascript">
<!--
var answer = confirm ("stok tidak mencukupi")
if (answer)
window.location="<?php echo"index.php?u=$_SESSION[user1]&pg=17";?>"
// -->
</script>
			<?php 
		}else{
		/* $id = $_POST['id'];
		$jml_data = count($id);
		$jumlah = $_POST['jml'];
		for($i=1; $i<=$jml_data; $i++){
			mysql_query("update pesan_temp set jumlah='$jumlah[$i]' where idpesantemp='$id[$i]'");	
		}	 */
		mysql_query("update pesan_temp set jumlah='$juml' where idpesantemp='$_GET[idpesantemp]'");	
		header("location:index.php?u=$_SESSION[user1]&pg=17");
		}
?>