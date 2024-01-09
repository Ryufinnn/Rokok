<?php
session_start();
	if(empty($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
		// header("location:login.php");
		?>
<li><a href="../index.php" title="Home">Home</a></li>
<li><a href="logout.php" title="keluar">logout</a></li>
		<?php
	}else{
	?>
	<li><a href="?u=<?php echo"$_SESSION[useradmin]"; ?>" title="Home">Home<span class="rov"> Halaman Admin</span></a></li>
    <li><a class="MenuBarItemSubmenu" href="#" title="Kelola">Kelola</a><ul style="background-color: rgba(0,174,116,0.7);">
	<li><a  href="index.php?pg=40">Member</a></li>
      <li><a class="MenuBarItemSubmenu" href="index.php?pg=20">Kategori</a>
        <ul style="background-color: rgba(0,174,116,0.7);">
          <li><a href="index.php?pg=20">List Kategori</a></li>
          <li><a href="index.php?pg=21">Tambah Kategori</a></li>
		
        </ul>
      </li>
     
      <li><a href="index.php?pg=50">Produk</a>
		<ul style="background-color: rgba(0,174,116,0.7);">
          <li><a href="index.php?pg=50">List Produk</a></li>
          <li><a href="index.php?pg=51">Tambah Produk</a></li>
        </ul>
	  </li>
    </ul></li>
<li><a class="MenuBarItemSubmenu" href="index.php?pg=80">Pemesanan</a></li>
<li><a class="MenuBarItemSubmenu" href="#" title="Tanggapi">Tanggapi</a>
	<ul style="background-color: rgba(0,174,116,0.7);"><li><a class="MenuBarItemSubmenu" href="index.php?pg=60">Hubungi</a></li>
	<li><a class="MenuBarItemSubmenu" href="index.php?pg=70">Testimoni</a></li>
	</ul>
	</li>
	
<li><a class="MenuBarItemSubmenu" href="#" title="Laporan">Laporan</a>
	<ul style="background-color: rgba(0,174,116,0.7);"><li><a class="MenuBarItemSubmenu" href="index.php?pg=90">laporan</a></li></ul></li>
<li><a href="logout.php" title="Keluar">Logout<span class="rov"> Apa anda Ingin keluar? </span></a></li>
	<?php
	}
?>