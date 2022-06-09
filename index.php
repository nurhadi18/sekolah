<?php
    include'koneksi.php';
?>
<title>DATA SISWA</title>
<body>
	<h1>Data Siswa Kelas XI</h1>
	<a href="form_siswa.php">+Tambah Data Siswa</a> 
	<table border="5">
		<head>
			<tr>
				<th>NO</th>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Alamat</th>
				<th>Telpon</th>
				<th>Aksi</th>
			</tr>
		</head>
		<tbody>
			<?php
			    $no=1;
			    $sql=mysqli_query($koneksi,"SELECT* FROM siswa");
			    while ($row=mysqli_fetch_assoc($sql)) {

			?>
			<tr>
			 <td><?php echo $no; ?></td>  
				<td><?php echo $row['nis']?></td>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['alamat']?></td>
				<td><?php echo $row['no_hp']?></td>
				<td><a href="<?= 'edit_siswa.php?id_siswa='.$row['id_siswa'] ?>">Edit</a> 
				    <a href="<?= 'hapus_siswa.php?id_siswa='.$row['id_siswa'] ?>" 
				    	onclick="return confirm('Yakin Menghapus Data Ini?')">hapus</a>
				    </td>
			</tr>

			<?php
			    $no++;

		}	
		?>		          
		</tbody>
	</table>
</body>