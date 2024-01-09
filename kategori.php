<style type="text/css">
.asd{
	 background-color:#EDF0EF;
}
.asd:hover{
	background-color:#FAFAFA;
	font-weight:bold;
}
.asd a{
text-decoration:none;
color:#000000;	
}
</style>
<table border=0 width=90%>
<?php
	$sql=mysql_query("select * from kategori order by idkategori ASC limit 0,16");
	while($r=mysql_fetch_array($sql)){
?>
	<tr>
		<td><div class="asd" style="margin:1px 0px 0px 5px; border:1px solid #C6CECB; padding:5px; width:100%"><a href="#"><?php echo"$r[namakategori]"; ?></a></div></td>
	</tr>
	<?php
	}
	?>
</table>