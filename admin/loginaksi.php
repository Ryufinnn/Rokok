<?php
	include "../koneksi.php";
	
	$sql = mysql_query ("SELECT * FROM admin WHERE username = '$_POST[username]' and password = '$_POST[password]'");
	
	$data = mysql_fetch_array($sql);
	$row = mysql_num_rows($sql);
	
	if($row > 0){
		session_start();
		$_SESSION['useradmin'] = $data['username'];
		$_SESSION['passadmin'] = $data['password'];
		session_register();
		?>
		<script type="text/javascript">
<!--
var answer = confirm ("Anda berhasil Login, selamat datang <?php echo "$_SESSION[useradmin]"; ?>  pilih OK untuk lanjut")
if (answer)
window.location="<?php echo"index.php";?>"
// -->
</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
<!--
var answer = confirm ("username dan password tidak valid, anda tidak berhak mengakses konten ini!")
if (answer)
window.location="<?php echo"index.php";?>"
// -->
</script>
		<?php
	}
?>