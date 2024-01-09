<?php 
  if(empty($_SESSION[user1])){
  ?>
  
  <table width="100%" border="0">
  <tr>
    <td valign="middle"><img src="Untitled-1.jpg" width="38" height="38" /></td>
    <td valign="middle">Login &or;<span class="muncul"><fieldset><legend>&nbsp;&nbsp;<b>Form</b>&nbsp;&nbsp;</legend><form action="loginaksi.php" method="post" enctype="multipart/form-data" name="form1"><table width="100%" border="0">
  <tr>
    <td>Username</td>
    <td><span id="sprytextfield1">
      <label for="username"></label>
      <input type="text" name="username" id="username" />
      <span class="textfieldRequiredMsg">kosong!!</span></span></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><span id="sprypassword1">
      <label for="password"></label>
      <input type="password" name="password" id="password" />
      <span class="passwordRequiredMsg">kosong!!</span></span></td>
  </tr>
  <tr>
    <td><input name="Login" type="submit" value="Login" /></td>
    <td><a href="index.php?pg=1"><font size="-1">Register!</a></font></td>
  </tr>
</table>
</form>
</fieldset></span></td>
  </tr>
</table>
  <?php
  }else{
  
  $sqlakun=mysql_query("select * from member where username='$_SESSION[user1]'");
  $rakun=mysql_fetch_array($sqlakun);
  ?>
  <table width="100%" border="0">
  <tr>
    <td valign="middle"><?php if(empty($rakun['foto'])){
				echo "<img src='x.jpg' width='38' height='38' border='2'/>";
			}else{
				echo "<img src='foto/$rakun[foto]' width='38' height='38' border='2'/>";
			} ?></td>
    <td valign="middle"><?php echo"$_SESSION[user1]"; ?> &or;<span class="muncul"><fieldset><legend>Akun</legend><form action="gantifotoaksi.php?u=<?php echo"$_SESSION[user1]"; ?>" method="post" enctype="multipart/form-data" name="form1"><table width="100%" border="0">
  <tr>
    <td rowspan="5"><?php if(empty($rakun['foto'])){
				echo "<img src='x.jpg' width='130' height='130' border='2'/>";
			}else{
				echo "<img src='foto/$rakun[foto]' width='130' height='130' border='2'/>";
			} ?></td>
    <td width="75%" valign="top"><?php echo"$rakun[namalengkap]"; ?></td>
  </tr>
  <tr>
  	<td><?php echo"$rakun[tempatlahir]"; ?>/<?php echo"$rakun[tgllahir]"; ?></td>
  </tr>
  <tr>
  	<td><?php echo"$rakun[email]"; ?></td>
  </tr>
  <tr>
  	<td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="logout.php">logout</a></td>
  </tr>
  <tr><td colspan="2"><input name="username" type="hidden" value="<?php echo"$_GET[u]"; ?>"/><input name="fupload" type="file"/><input name="ganti" type="submit" value="ganti" /></td></tr>
</table>
</fieldset></form></span></td>
  </tr>
</table>
  <?php
  }
  ?>
  </a>