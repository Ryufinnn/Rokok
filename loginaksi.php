<?php
	include "koneksi.php";
	
	$sql = mysql_query ("SELECT * FROM member WHERE username = '$_POST[username]' and password = '$_POST[password]'");
	
	$data = mysql_fetch_array($sql);
	$row = mysql_num_rows($sql);
	
	if($row > 0){
		session_start();
		$_SESSION['user1'] = $data['username'];
		$_SESSION['pass1'] = $data['password'];
		session_register();
		mysql_query("UPDATE member SET login = NOW() WHERE username = '$_POST[username]'");
		?>
		<script type="text/javascript">
<!--
var answer = confirm ("Anda berhasil Login, selamat datang <?php echo "$_SESSION[user1]"; ?>  pilih OK untuk lanjut")
if (answer)
window.location="<?php echo"index.php?u=$_SESSION[user1]";?>"
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