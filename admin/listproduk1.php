<?php include "../koneksi.php"?>
<?php
switch($_GET[act]){
  // Tampil admin
  default:
    echo "
          
          <table id='theList' border=1 width='100%'>
          <tr>
			<th>Foto</th>
			<th>Nama Produk</th>
			<th>Deskripsi</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Tgl Masuk</th>
			<th>Aksi</th></tr>"; 
    $tampil=mysql_query("SELECT * FROM produk ORDER BY idproduk asc");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr>
			
				<td><img src='produk/$r[foto]' width='50' height='50'></td>
				<td>$r[namaproduk]</td>
				<td>$x... <a href = 'index.php?idkategori=$r[idkategori]&idproduk=$r[idproduk]&pg=53'> Selengkapnya</a></td>
				<td>$r[harga]</td>
				<td>$r[stok]</td>
				<td>$r[tglmasuk]</td>
				<td class=td align=center><a href='?pg=50&act=editadmin&id=$r[idproduk]'><button style='width:60px;text-align:center;'>Update</button></a> |
			 <a  href='?pg=50&act=delete&id=$r[idproduk]' onclick='return confirm(Anda yakin untuk menghapus data ini ?)'><button>Delete</button></a></td>
				
			
             </tr>";
      $no++;
    }
    echo "</table>";
    break;
  
  case "tambahadmin":
    echo "<h2>&#187; Tambah admin</h2>
          <form method=POST action='./aksi.php?page=akun&act=input'>
          <table>
          <tr><td>Admin name</td>    <td> : <input type=text name='username'></td></tr>
          <tr><td>Password</td>     <td> : <input type=password name='password'></td></tr>
          <tr><td>Nama Lengkap</td> <td> : <input type=text name='nama_lengkap' size=30></td></tr>  
          <tr><td>E-mail</td>       <td> : <input type=text name='email' size=30></td></tr>
          <tr><td>No Telepon</td>   <td> : <input type=text name='no_telp' size=15></td></tr>
          <tr><td colspan=2><input type=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form><br><br>";
     break;
    
  case "editadmin":
    $edit=mysql_query("SELECT * FROM produk WHERE idproduk='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h2>Update</h2>
	
          <form method=POST action=./aksi.php?page=registrasi&act=update>
          <input type=hidden name=id value='$r[idproduk]'>
          <table>
          <tr><td>Nama Produk</td>    <td> : <input type=text name='nama' value='$r[namaproduk]'></td></tr>
          <tr><td>Harga</td>     <td> : <input type=text name='harga' value='$r[harga]'></td></tr>
          <tr><td>Stok</td> <td> : <input type=text name='stok' value='$r[stok]'></td></tr>  
          
          <tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
    break;  
}
?>
<?
if($_GET[pg]=='50' and $_GET[act]=='delete'){
$sql=mysql_query("delete from produk where idproduk='$_GET[id]'");
echo"<script>window.location.href='?pg=50'</script>";
}

?>