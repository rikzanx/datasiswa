<!DOCTYPE html>
<html>
<head>
	<title>Siswa View</title>
</head>
<body>

	<a href="<?php echo base_url(); ?>index.php/tambah_cr">Tambah Data Siswa</a>

	<table border="1">
		<tr>
			<td>ID Siswa</td>
			<td>Nama Siswa</td>
			<td>Alamat</td>
			<td>Umur</td>
			<td>Aksi</td>
		</tr>
		<?php 
		foreach ($siswa as $s) {
			echo "<tr>";
			echo "<td>".$s->id_siswa."</td>";
			echo "<td>".$s->nama_siswa."</td>";
			echo "<td>".$s->alamat."</td>";
			echo "<td>".$s->umur."</td>";
			echo "<td>";
			echo "<a href='index.php/edit_cr?id_siswa=$s->id_siswa'>Edit</a>";
			echo "<br>";
			echo "<a href='index.php/siswa_cr/aksihapus?id_siswa=$s->id_siswa'>Hapus</a>";
			echo "</td>";
			echo "<tr>";
		}
		 ?>
	</table>
</body>
</html>