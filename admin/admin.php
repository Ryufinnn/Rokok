<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
session_start();
	if(empty($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
		?>
		<script type="text/javascript">
<!--
var answer = confirm ("anda tidak berhak mengakses konten ini!")
if (answer)
window.location="<?php echo"index.php";?>"
// -->
</script>
		<?php
	}else{
		include "../koneksi.php";
		?>
		<p align="center"><font size=+3>SELAMAT DATANG DI HALAMAN ADMIN</font></p>
		
		<?php include"top.php"; ?>
				<?php
}
?>
</div>