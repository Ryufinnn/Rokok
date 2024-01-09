<?php
session_start();
	if(empty($_SESSION['user1']) and empty($_SESSION['pass1'])){
		// header("location:login.php");
		?>
<li><a href="index.php" title="Home">Home</a></li>
<li><a href="?pg=10" title="Profile">Profile<span class="rov"> visi & misi </span></a></li>
<li><a href="?pg=11" title="Cara Beli">Cara Beli<span class="rov"> Temukan kemudahan berbelanja bersama kami </span></a></li>
<li><a href="?pg=1" title="Hubungi Kami">Register<span class="rov"> Bergabung Bersama Kami </span></a></li>
<li><a href="?pg=12" title="Hubungi Kami">Hubungi Kami</a></li>
		<?php
	}else{
	?>
	<li><a href="?u=<?php echo"$_SESSION[user1]"; ?>" title="Home">Home</a></li>
    <li><a href="?pg=10&u=<?php echo"$_SESSION[user1]"; ?>" title="Profile">Profile<span class="rov"> visi & misi </span></a></li>
<li><a href="?pg=11&u=<?php echo"$_SESSION[user1]"; ?>" title="Cara Beli">Cara Beli<span class="rov"> Temukan kemudahan berbelanja bersama kami </span></a></li>
<li><a href="?pg=16&u=<?php echo"$_SESSION[user1]"; ?>" title="AKUN">Akun<span class="rov"> Kelola Akun Anda </span></a></li>
<li><a href="?pg=17&u=<?php echo"$_SESSION[user1]"; ?>" title="Keranjang Belanja">Keranjang Belanja </a></li>
<li><a href="logout.php" title="Keluar">Logout<span class="rov"> Apa anda Ingin keluar? </span></a></li>
	<?php
	}
?>