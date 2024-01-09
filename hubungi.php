<div style="margin:10px; border:1px solid #C6CECB; padding:10px; background-color:#EDF0EF;">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<h2>Form Kontak / Konsultasi</h2><br />
<form id="form11" name="form11" method="post" action="hubungiaksi.php" enctype="multipart/form-data">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td>Nama Lengkap</td>
      <td><span id="sprytextfield2">
        <label for="namalengkap"></label>
        <input type="text" name="nama" id="namalengkap" placeholder="nama" />
        <span class="textfieldRequiredMsg">kosong!!</span></span></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><span id="sprytextfield6">
        <label for="email"></label>
        <input type="text" name="email" id="email" placeholder="email" />
        <span class="textfieldRequiredMsg">kosong!!</span><span class="textfieldInvalidFormatMsg">harus format e-mail.</span></span></td>
    </tr>
    <tr>
      <td>subject</td>
      <td><span id="sprytextfield3">
      <label for="tempatlahir2"></label>
      <input type="text" name="subject" id="tempatlahir2" placeholder="subject" />
      <span class="textfieldRequiredMsg">kosong!!</span></span></td>
    </tr>
    <tr>
      <td>pesan</td>
      <td><span id="sprytextarea1">
        <label for="alamat"></label>
        <textarea name="pesan" id="alamat" cols="20" rows="3" placeholder="pesan"></textarea>
        <span class="textareaRequiredMsg">kosong!!</span></span></td>
    </tr>
    <tr>
      <td><label>
        <input type="submit" name="submit" id="submit" value="submit" />
        </label></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </form>
<script type="text/javascript">
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>
</div>
<script type="text/javascript">
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "email");
</script>
