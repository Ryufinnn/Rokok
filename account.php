			<?php 
			if(empty($_SESSION['user1'])){
			?>
<a class="home" href="#">
            <img src="icon/member.png" width="40px" height="40px" style="position:absolute; border:#000 solid 1px;"/><span class="sides">
			<b>&lsaquo; AKUN </b>Login Disini!!<form action="loginaksi.php" method="post" enctype="multipart/form-data" name="form1"><table width="100%" border="0">
  <tr>
    <td colspan="2"><input name="username" type="text" placeholder="username" style="padding:5px;"/></td>
        </tr>
  <tr>
    <td colspan="2"><input name="password" type="password" placeholder="password" style="padding:5px;"/></td>
    </tr>
  <tr>
    <td width="37%"><p><input name="Login" type="submit" value="Login" style="padding:5px;"/></td><td><a href="index.php?pg=1">Register</a></p></td>
    </tr>
</table>
</form>
<?php
}else{
?>
<a class="home" href="<?php echo"index.php?pg=16";?>">
<?php
	$sql = mysql_query("select * from member where username = '$_SESSION[user1]'");
	$data = mysql_fetch_array($sql);
	if(empty($data['foto'])){
				echo "<img src='x.jpg' width='40px' height='40px' style='position:absolute; border:#000 solid 1px;'/><a href='logout.php'>Logout</a>";
			}else{
				echo "<img src='foto/$data[foto]' width='40px' height='40px' style='position:absolute; border:#000 solid 1px;'/>";
			}
?><span class="sides">
<b>Selamat Datang <?php echo $_SESSION[user1]; ?></b>
<?php
}
?>
</span>
</a>