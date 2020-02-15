<!DOCTYPE html>
<html>
<head>
	<title>Edit Siswa</title>
</head>
<body>
	<?php 
		$id_siswa = $siswa->id_siswa;
		$nama_siswa = $siswa->nama_siswa;
		$alamat = $siswa->alamat;
		$umur = $siswa->umur;
	 ?>
	<form method="POST" action="edit_cr/aksiedit?id_siswa=<?php echo $id_siswa; ?>">
		ID Siswa: <input type="text" name="id_siswa" value="<?php echo $id_siswa; ?>"><br>
		Nama Siswa: <input type="text" name="nama_siswa" value="<?php echo $nama_siswa; ?>"><br>
		Alamat: <input type="text" name="alamat" value="<?php echo $alamat; ?>"><br>
		Umur: <input type="text" name="umur" value="<?php echo $umur; ?>"><br>
		<input type="submit" name="submit" value="Edit Data">
	</form>
</body>
</html>