<?php
    include 'configuration.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>List Database matakuliah</title>
    <link rel="shortcut icon" type="image/png" href="icon/list-data.png" />
</head>
<style type="text/css">
    select {
        width: 150px;
		height: 25px;
    }
    table {
    border-collapse: collapse;
    }

    td {
        padding: 5px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #4CAF50;
        color: white;
    }
</style>

<body style="font-family: monospace;">
	<br><br><br><br><br><br><br><br><br><br>
	<center>
	<font size="6"><b>LIST DATA MATA KULIAH BARU</font></b><br>
	Data dibawah ini adalah daftar mata kuliah dari semester 1 sampai dengan semester 2.<br><br><br><br>	
	
	<table border="1">
		<tr>
			<th width="29" align="center">ID Matakuliah</th>
			<th align="left" width="250">Matakuliah</th>
			<th align="left" width="250">Semester</th>
			<th align="left" width="150">Nama Dosen</th>
			<th align="left" width="150">Nama Asisten Dosen</th>
			<th align="left" width="250">No Handphone Dosen</th>
			<th align="left" width="250">No Handphone Asisten Dosen</th>
			<th align="center">Tindakan</th>
		</tr>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM tbl_matakuliah ORDER BY mata_kuliah ASC";
		$query = mysqli_query($db, $sql);
		$number = 1;
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			// echo "<td align='center'>".$siswa['id']."</td>";
			echo "<td align='center'>".$number++."</td>";
			echo "<td>".$siswa['mata_kuliah']."</td>";
			echo "<td>".$siswa['semester']."</td>";
			echo "<td>".$siswa['nama_dosen']."</td>";
			echo "<td>".$siswa['nama_asisten_dosen']."</td>";
			echo "<td>".$siswa['no_handphone_dosen']."</td>";
			echo "<td>".$siswa['no_handphone_asisten_dosen']."</td>";
			
            echo "<td>";
			echo "<a href='form-edit-matakuliah.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='konfirmasi-hapus-data.php?id=".$siswa['id']."'>Delete</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	<br><br>
	<p>Total Matakuliah Masuk: <b><?php echo mysqli_num_rows($query) ?> Matakuliah</b></p>
	<br><br><br>
    Copyright &copy; 2018 Form List Mata Kuliah <br><br><br>
	<a href="index.php">[^] Ke Halaman Utama</a>&nbsp;&nbsp;<a href="form-daftarmatakuliah.php">[^] Tambahkan Data Lagi</a>&nbsp;&nbsp;<a href="cari-data-matakuliah.php">[^] Cari Data dengan Berdasasrkan</a>
	&nbsp;
	</body>
</html>
