<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<fieldset style="padding:10px; border:double #D5DBD9 2px; margin:10px;"><legend>&nbsp;<b><font size="+1">Form Register</font></b>&nbsp;</legend><form id="form11" name="form11" method="post" action="formregisteraksi.php" enctype="multipart/form-data">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Username</td>
      <td><span id="sprytextfield4">
        <label for="username1"></label>
        <input type="text" name="username" id="username1" placeholder="username" style="padding:5px;"/>
        <span class="textfieldRequiredMsg">kosong!!</span></span></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><span id="sprypassword2">
        <label for="password6"></label>
        <input type="password" name="password" id="password6" placeholder="password" style="padding:5px;"/>
        <span class="passwordRequiredMsg">kosong!!</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span id="spryconfirm1">
      <label for="password1"></label>
      <input type="password" name="password2" id="password2" placeholder="re-type password" style="padding:5px;"/>
      <span class="confirmInvalidMsg">password tidak sama</span><span class="confirmRequiredMsg">kosong!!</span></span></td>
    </tr>
    <tr>
      <td>Nama Lengkap</td>
      <td><span id="sprytextfield2">
        <label for="namalengkap"></label>
        <input type="text" name="namalengkap" id="namalengkap" placeholder="nama lengkap" style="padding:5px;"/>
        <span class="textfieldRequiredMsg">kosong!!</span></span></td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td><span id="sprytextfield3">
      <label for="tempatlahir2"></label>
      <input type="text" name="tempatlahir" id="tempatlahir2" placeholder="tempat lahir" style="padding:5px;"/>
      <span class="textfieldRequiredMsg">kosong!!</span></span></td>
    </tr>
    <tr>
      <td> Tgl Lahir</td>
      <td><label>
      <select name="tgl" id="select2" style="padding:5px;">
        	<option value="0">Pilih Tgl</option>
            <?php
				for($i=1; $i<=31; $i++){
					echo "<option value='$i'>$i</option>";
				}
           ?>
        </select>
     
	  <select name="bln" id="select3" style="padding:5px;">
        	<option value="0">pilih bln</option>
            <?php
				for($i=1; $i<=12; $i++){
					if($i==1){ $bln = "Januari"; }
					else if($i==2){ $bln = "Februari"; }
					else if($i==3){ $bln = "Maret"; }
					else if($i==4){ $bln = "April"; }
					else if($i==5){ $bln = "Mei"; }
					else if($i==6){ $bln = "Juni"; }
					else if($i==7){ $bln = "Juli"; }
					else if($i==8){ $bln = "Agustus"; }
					else if($i==9){ $bln = "September"; }
					else if($i==10){ $bln = "Oktober"; }
					else if($i==11){ $bln = "November"; }
					else{ $bln = "Desember"; } 
					echo "<option value='$i'>$bln</option>";
				}            
			?>
        </select>
	  <select name="thn" id="select4" style="padding:5px;">
	    <option value="0">pilih thn</option>
	    <?php
				$th=date("Y");
				for($thn=1984; $thn<=$th-17; $thn++){
					echo "<option value='$thn'>$thn</option>";
				}            
			?>
	    </select>
	  </label></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><label>
      <span id="spryradio1">
      <input type="radio" name="jk" value="L" id="radio" style="padding:5px;"/>
Laki-Laki &nbsp;&nbsp;
<input type="radio" name="jk" value="P" id="radio" />
Perempuan&nbsp;&nbsp;
<span class="radioRequiredMsg">belum pilih</span></span>      </label></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><span id="sprytextarea1">
        <label for="alamat"></label>
        <textarea name="alamat" id="alamat" cols="20" rows="3" placeholder="isi alamat lengkap" style="padding:5px;"></textarea>
        <span class="textareaRequiredMsg">kosong!!</span></span></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><span id="sprytextfield6">
      <label for="email"></label>
      <input type="text" name="email" id="email" style="padding:5px;"/>
      <span class="textfieldRequiredMsg">kosong!!</span><span class="textfieldInvalidFormatMsg">harus format e-mail.</span></span></td>
    </tr>
    <tr>
      <td>No Telp</td>
      <td><span id="sprytextfield5">
      <label for="notelp"></label>
      <input type="text" name="notelp" id="notelp" style="padding:5px;"/>
      <span class="textfieldRequiredMsg">kosong!!</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <td><label>
        <input type="submit" name="button" id="button" value="Register" style="padding:5px;"/>
      </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form></fieldset>
<script type="text/javascript">
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "password6", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "integer", {validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "email");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>
