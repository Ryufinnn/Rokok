<?php
session_start();
if(empty($_SESSION['user1']) and empty($_SESSION['pass1'])){
		?>
		<script type="text/javascript">
<!--
var answer = confirm ("Anda harus loggin!!")
if (answer)
window.location="<?php echo"index.php";?>"
// -->
</script>
		<?php
	}else{
	include"koneksi.php";
	$sqlcek = mysql_query("SELECT * FROM favorite where username='$_SESSION[user1]' and idproduk='$_GET[idproduk]'");
	$ketemu = mysql_num_rows($sqlcek);
	if($ketemu == 0){
	
	mysql_query("INSERT INTO favorite(username, idproduk, tglfavorite) VALUES ('$_SESSION[user1]', '$_GET[idproduk]', NOW())");
	header("location:index.php?u=$_SESSION[user1]&tambah&$ketemu");
	
	}else{
	mysql_query("UPDATE favorite SET tglfavorite = NOW() WHERE username = '$_SESSION[user1]' and idproduk='$_GET[idproduk]';");	
	
	header("location:index.php?u=$_SESSION[user1]&update");
	}
	}
?>