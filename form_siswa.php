<?php
    include'koneksi.php';
?>
<title>FORM DATA SISWA</title>
<body>
	<h1>FORM DATA SISWA KELAS IX</h1>
	<form action="" method="POST">
		<table>
			<tr>
				<td><label>NIS</label></td>
				<td><input type="text" name="nis"></td>
			</tr>

			<tr>
				<td><label>Nama</label></td>
				<td><input type="text" name="nama"></td>
			</tr>

			<tr>
				<td><label>Alamat</label></td>
				<td><textarea name="alamat"></textarea></td>
			</tr>

			<tr>
				<td><label>Jenis Kelamin</label></td>
				<td><input type="radio" name="jk" value="laki-laki" checked="laki-laki">Laki-Laki</td>
				<td><input type="radio"name="jk" value="perempuan">Perempuan</td>
			</tr>

			<tr>
				<td><label>Telepon</label></td>
				<td><input type="text" name="no_hp"></td>
			</tr>

			<tr>
				<td><button type="submit"name="simpan">SIMPAN</button></td>
			</tr>
 
		</table>
	</form>
</body>
<?php
     if(isset($_POST['simpan'])) {
    	$id_siswa = $_POST['id_siswa'];
    	$nis = $_POST['nis'];
    	$nama = $_POST['nama'];
    	$alamat = $_POST['alamat'];
    	$jk = $_POST['jk'];
    	$no_hp = $_POST['no_hp'];

    	$r=mysqli_query($koneksi,"INSERT INTO siswa VALUES('','$nis','$nama','$alamat','$jk','$no_hp')");

    	header("location:index.php");
}
?>
