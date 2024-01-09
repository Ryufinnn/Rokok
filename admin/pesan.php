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
		
		$sql = mysql_query("select * from pesan ORDER BY tglpesan DESC limit $posisi, $batas");
		echo"<a href='index.php?pg=10&u=$_SESSION[useradmin]'><button>Halaman Admin</button></a> <a target='_blank' href='ctkpsn.php'><button>Cetak</button></a>";
		echo "<table border = 1>
			<tr>
			<th>No Order</th>
			<th>Nama member</th>
			<th>alamat</th>
			<th>no telp</th>
			<th>email</th>
			<th>status pesan</th>
			<th>tanggal pesan</th>
			<th>cekadmin</th>
			</tr>";
		while($data = mysql_fetch_array($sql)){
			echo "<tr>
				<td><a href='index.php?pg=91&idpesan=$data[idpesan]'><button style='width:40px; height:30px;'>$data[idpesan]</button></td>
				<td>$data[namalengkap]</td>
				<td>$data[alamat]</td>
				<td>$data[notelp]</td>
				<td>$data[email]</td>
				<td>$data[statuspesan]</td>
				<td>$data[tglpesan]</td>
				<td>$data[cekadmin]</td>
				</tr>";
		}
		echo "</table>";
		echo "Halaman : ";
		
		$sqlhal = mysql_query("select * from pesan");
		$jmldata = mysql_num_rows($sqlhal);
		$jmlhal = ceil($jmldata/$batas);
		
		// Membuat First dan Previous
		if($halaman > 1){
			$previous = $halaman - 1;
			echo "<a href='$_SERVER[PHP_SELF]?halaman=1&pg=40&u=$_SESSION[useradmin]'><button>&laquo; First</button></a>  
			     <a href='$_SERVER[PHP_SELF]?halaman=$previous&pg=40&u=$_SESSION[useradmin]'><button>&lsaquo; Prev</button></a>";
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
			$angka .= "<a href='$_SERVER[PHP_SELF]?halaman=$i&pg=40&u=$_SESSION[useradmin]'><button>$i</button></a> ";
		}
		
		$angka .= " <b>$halaman</b> ";
		
		for($i = $halaman+1; $i<($halaman+3); $i++){
			if($i > $jmlhal)
				break;
			$angka .= "<a href='$_SERVER[PHP_SELF]?halaman=$i&pg=40&u=$_SESSION[useradmin]'><button>$i</button></a> ";
		}
		
		$angka .= ($halaman+2 < $jmlhal ? " ... <a href='$_SERVER[PHP_SELF]?halaman=$jmlhal&pg=40&u=$_SESSION[useradmin]'><button>$jmlhal</button></a> " : " ");
		
		echo "$angka";
		
		// Membuat Next dan Last
		if($halaman< $jmlhal){
			$next = $halaman + 1;
			echo "<a href='$_SERVER[PHP_SELF]?halaman=$next&pg=40&u=$_SESSION[useradmin]'><button>Next &rsaquo;</button></a>  
			     <a href='$_SERVER[PHP_SELF]?halaman=$jmlhal&pg=40&u=$_SESSION[useradmin]'><button>Last &raquo;</button></a>";
		}else{
			echo "Next &rsaquo; | Last &raquo; | ";
		}
		
		echo "<br>Total buku : $jmldata";
	}
?></div>