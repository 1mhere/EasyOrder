<!DOCTYPE html>
<html>
<head>
	<title>Edit Menu</title>
</head>
	<body>
		<form method="POST" action="<?php echo base_url()."index.php/crud/do_update" ?>" >
		<table>
			<tr>
				<td>Id</td>
				<td>
					<input type="text" name="id" value="<?php echo $id; ?>" readonly />
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama; ?>" /></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $harga; ?>" /></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><textarea name="keterangan"><?php echo $keterangan ?></textarea></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td><input type="text" name="gambar" value="<?php echo $gambar; ?>" /></td>
			</tr>
			<tr>
				<td>Time</td>
				<td><input type="text" name="time" value="<?php echo $time; ?>" /></td>
			</tr>
			<tr>
				<td>Kode Kategori</td>
				<td><input type="text" name="kode_kategori" value="<?php echo $kode_kategori; ?>" /></td>
			</tr>
			<tr><td></td>
				<td><input type="submit" name="btnSubmit" value="Simpan" /></td>
			</tr>
		</table>
		</form>
	</body>
</html> 