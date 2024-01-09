<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<?php
	session_start();
	if(empty($_SESSION['useradmin']) and empty($_SESSION['passadmin'])){
		header("location:login.php");
	}else{
		include "../koneksi.php";
		
		$batas =  5;
		$halaman = $_GET['halaman'];
		if(empty($halaman)){
			$posisi = 0;
			$halaman = 1;
		}else{
			$posisi = ($halaman - 1) * $batas;
		}
		$sql = mysql_query("select * from produk ORDER BY tglmasuk DESC limit $posisi, $batas");
		echo "<a href='index.php?pg=51&u=$_SESSION[useradmin]'><button>Tambah Produk</button></a> <a href='index.php?pg=10&u=$_SESSION[useradmin]'><button>Halaman Admin</button></a><br>";
		echo "<table border = 1>
			<tr>
			
			<th>Foto</th>
			<th>Nama Produk</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Tgl Masuk</th>
			<th>Aksi</th>
			</tr>";
		while($data = mysql_fetch_array($sql)){
			$x = substr($data[deskripsi], 0, 100);
			echo "<tr>
				
				<td><img src='produk/$data[foto]' width='50' height='50'></td>
				<td>$data[namaproduk]</td>
				<td>$x... <a href = 'index.php?idkategori=$data[idkategori]&idproduk=$data[idproduk]&pg=53'> Selengkapnya</a></td>
				<td>$data[harga]</td>
				<td>$data[stok]</td>
				<td>$data[tglmasuk]</td>
				<td> <a href='editproduk.php?id=$data[idproduk]'><button>Edit</button></a> <a href='hapusproduk.php?id=$data[idproduk]'><button>Hapus</button></a> </td>
				</tr>";
		}
		echo "</table>";
		
		echo "Halaman : ";
		
		$sqlhal = mysql_query("select * from produk");
		$jmldata = mysql_num_rows($sqlhal);
		$jmlhal = ceil($jmldata/$batas);
		
		// Membuat First dan Previous
		if($halaman > 1){
			$previous = $halaman - 1;
			echo "<a href='$_SERVER[PHP_SELF]?halaman=1&pg=50&u=$_SESSION[useradmin]'><button>&laquo; First</button></a>  
			     <a href='$_SERVER[PHP_SELF]?halaman=$previous&pg=50&u=$_SESSION[useradmin]'><button>&lsaquo; Prev</button></a>";
		}else{
			echo "&laquo; First | &lsaquo; Prev | ";
		}
			
		//Menampilkan Angka Halaman
		/*for($i=1; $i<=$jmlhal;$i++){
			if($i != $halaman){
				echo " <a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a> | ";
			}else{
				echo " <b>$i</b> | ";
			}
		}*/
		$angka = ($halaman > 3 ? " ... " : " ");
		
		for($i=$halaman-2; $i<$halaman; $i++){
			if($i < 1)
				continue;
			$angka .= "<a href='$_SERVER[PHP_SELF]?halaman=$i&pg=50&u=$_SESSION[useradmin]'><button>$i</button></a> ";
		}
		
		$angka .= " <b>$halaman</b> ";
		
		for($i = $halaman+1; $i<($halaman+3); $i++){
			if($i > $jmlhal)
				break;
			$angka .= "<a href='$_SERVER[PHP_SELF]?halaman=$i&pg=50&u=$_SESSION[useradmin]'><button>$i</button></a> ";
		}
		
		$angka .= ($halaman+2 < $jmlhal ? " ... <a href='$_SERVER[PHP_SELF]?halaman=$jmlhal&pg=50&u=$_SESSION[useradmin]'><button>$jmlhal</button></a> " : " ");
		
		echo "$angka";
		
		// Membuat Next dan Last
		if($halaman< $jmlhal){
			$next = $halaman + 1;
			echo "<a href='$_SERVER[PHP_SELF]?halaman=$next&pg=50&u=$_SESSION[useradmin]'><button>Next &rsaquo;</button></a>  
			     <a href='$_SERVER[PHP_SELF]?halaman=$jmlhal&pg=50&u=$_SESSION[useradmin]'><button>Last &raquo;</button></a>";
		}else{
			echo "Next &rsaquo; | Last &raquo; | ";
		}
		
		echo "<br>Total : $jmldata";
	}
?></div>
