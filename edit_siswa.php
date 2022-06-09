<?php
    include'koneksi.php';
    $id_siswa = $_GET['id_siswa'];
    $data = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM siswa WHERE id_siswa = '$id_siswa' "));
?>
<title>FORM DATA SISWA</title>
<body>
	<h1>FORM DATA SISWA KELAS IX</h1>
	<form action="" method="POST">
		<input type="hidden" name="id_siswa" value="<?= $id_siswa ?>">
		<table>
			<tr>
				<td><label>NIS</label></td>
				<td><input type="text" name="nis" value="<?=$data['nis']?>"></td>
			</tr>

			<tr>
				<td><label>Nama</label></td>
				<td><input type="text" name="nama" value="<?=$data['nama']?>"></td>
			</tr>

			<tr>
				<td><label>Alamat</label></td>
				<td><textarea name="alamat" value="<?=$data['alamat']?>"></textarea></td>
			</tr>

			<tr>
				<td><label>Jenis Kelamin</label></td>
				<td><input type="radio" name="jk" value="laki-laki" <?php if($data['jk']=='laki-laki'){ echo "checked"; }?>>Laki-Laki</td>
				<td><input type="radio"name="jk" value="perempuan" <?php if($data['jk']=='perempuan'){ echo "checked"; }?>>Perempuan</td>
			</tr>

			<tr>
				<td><label>Telepon</label></td>
				<td><input type="text" name="no_hp" value="<?=$data['no_hp']?>"></td>
			</tr>

			<tr>
				<td><button type="submit"name="edit">UPDATE</button></td>
			</tr>
 
		</table>
	</form>
</body>
<?php
    if (isset($_POST['edit'])) {
    	$id_siswa = $_POST['id_siswa'];
    	$nis = $_POST['nis'];
    	$nama = $_POST['nama'];
    	$alamat = $_POST['alamat'];
    	$jk = $_POST['jk'];
    	$no_hp = $_POST['no_hp'];

    	$r=mysqli_query($koneksi,"UPDATE siswa SET nis = '$nis', nama = '$nama', alamat = '$alamat', jk = '$jk', no_hp = '$no_hp' WHERE id_siswa = $id_siswa");

    	header("location: index.php");
}
?>
