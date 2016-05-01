<!DOCTYPE html>
<html>
<head>
	<title>Daftar Menu</title>
</head>
<body>
	<?php echo $this->session->flashdata('pesan') ?>
	<table border="1" style="border-collapse:collapse; width:50%">
		<tr style="background: blue">
			<th>id</th>
			<th>Nama</th>
			<th>harga</th>
			<th>keterangan</th>
			<th>gambar</th>
			<th>time</th>
			<th>kode_kategori</th>
		</tr>
		<?php foreach ($data as $d) {
		?>
		<tr>
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['harga'];  ?></td>
			<td><?php echo $d['keterangan']; ?></td>
			<td><?php echo $d['gambar']; ?></td>
			<td><?php echo $d['time'];  ?></td>
			<td><?php echo $d['kode_kategori'];  ?></td>
			
			<td align = "center">
				<a href="<?php echo base_url()."index.php/crud/do_edit/".$d['id']; ?>">Edit</a>
				<a href="<?php echo base_url()."index.php/crud/do_delete/".$d['id']; ?>">Delete</a>
			</td>
		</tr>
		<?php	
		} ?>
	</table>
	<a href="<?php echo base_url()."index.php/crud/add"; ?>">Tambah Data</a>  
</body>
</html>