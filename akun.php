<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
			<p>
			  <?php
			$sql = mysql_query("select * from member where username = '$_SESSION[user1]'");
	$data = mysql_fetch_array($sql);
			?>
  </p>
			<table width="100%" border="0">
			  <tr>
			    <td width="62%"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="padding:0px">
			      <tr>
			        <td width="100">Your Account</td>
			        <td>&nbsp;</td>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td width="100" rowspan="6"><?php 
			if(empty($data['foto'])){
				echo "<img src='x.jpg' width='80' height='100' border='2'/>";
			}else{
				echo "<img src='foto/$data[foto]' width='80' height='100' border='2'/>";
			}
		?></td>
			        <td width="111">Username</td>
			        <td width="806">: <?php echo"$data[username]"; ?></td>
		          </tr>
			      <tr>
			        <td valign="top">Nama </td>
			        <td valign="top">: <?php echo"$data[namalengkap]"; ?></td>
		          </tr>
			      <tr>
			        <td>TTL</td>
			        <td>: <?php echo"$data[tempatlahir]"; ?>/<?php echo"$data[tgllahir]"; ?></td>
		          </tr>
			      <tr>
			        <td >Alamat</td>
			        <td rowspan="2" valign="top">: <?php echo"$data[alamat]"; ?></td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td>No Telp</td>
			        <td>: <?php echo"$data[notelp]"; ?></td>
		          </tr>
			      <tr>
			        <td><a href="?act=1&pg=16&u=<?php echo $_SESSION['user1']; ?>">Edit Account</a></td>
			        <td>Email</td>
			        <td>: <?php echo"$data[email]"; ?></td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>Tgl Daftar</td>
			        <td>: <?php echo"$data[tgldaftar]"; ?></td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
			        <td>Login terakhir</td>
			        <td>: <?php echo"$data[login]"; ?></td>
		          </tr>
		        </table></td>
			    <td width="100%" valign="top">
				<?php
                if(!empty($_GET['act'])){
				?><form id="form1" name="form1" method="post" action="editaccountaksi.php" enctype="multipart/form-data">
                <table width="100%" border="0">
			      <tr>
			        <td>Edit Your acoount</td>
		          </tr>
			      <tr>
			        <td>
			         <input type="text" name="username" id="username" placeholder="username" size="40" value="<?php echo"$data[username]"; ?>" disabled="disabled"/>
                     </td>
		          </tr>
			      <tr>
			        <td valign="top"><input type="text" name="namalengkap" id="namalengkap" size="40" placeholder="namalengkap" value="<?php echo"$data[namalengkap]"; ?>"/></td>
		          </tr>
			      <tr>
			        <td><input type="text" name="tempatlahir" id="tempatlahir" size="40" placeholder="tempatlahir" value="<?php echo"$data[tempatlahir]"; ?>"/></td>
		          </tr>
			      <tr>
			        <td><label for="alamat"></label>
		            <textarea name="alamat" id="alamat" cols="40" rows="2"><?php echo"$data[alamat]"; ?></textarea></td>
		          </tr>
			      <tr>
			        <td><input type="text" name="notelp" id="notelp" placeholder="notelp" value="<?php echo"$data[notelp]"; ?>" size="40"/></td>
		          </tr>
			      <tr>
			        <td><input type="text" name="email" id="email" placeholder="email" value="<?php echo"$data[email]"; ?>" size="40"/></td>
		          </tr>
			      <tr>
			        <td>&nbsp;</td>
		          </tr>
			      <tr>
			        <td><input type="submit" name="edit" value="edit" size="40" style="padding:5px;"/></td>
		          </tr>
		        </table> </form>	
                <?php
				}
				?>
                </td>
		      </tr>
  </table>
			<p>&nbsp; </p>
</div>