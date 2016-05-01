 
<!DOCTYPE html>
<html>
<head>
	<title>Insert Menu</title>
</head>
	<body>
		<form method="POST" action="<?php echo base_url()."index.php/crud/do_insert" ?>">
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama"/>
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"/></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td><textarea name="keterangan"></textarea></td>
			</tr>
			<tr>
				<td>gambar</td>
				<td>
					<input type="text" name="gambar"/>
				</td>
			</tr>
			<tr>
				<td>time</td>
				<td><input type="text" name="time"/></td>
			</tr>
			<tr>
				<td>Kode Kategori</td>
				<td>
					<input type="text" name="kode kategori"/>
				</td>
			</tr>
			<tr><td></td>
				<td><input type="submit" name="btnSubmit" value="Simpan" /></td>
			</tr>
		</table>
		</form>
	</body>
</html> 