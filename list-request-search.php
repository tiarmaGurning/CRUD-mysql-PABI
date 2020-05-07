<table border="1">
		<tr>
			<th width="29" align="center">ID MataKuliah</th>
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
		$sql = "SELECT * FROM tbl_matakuliah WHERE $get_value_berdasarkan LIKE '%$get_value_cari%'";
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
			echo "<a href='form-edit-pendaftar.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='konfirmasi-hapus-data.php?id=".$siswa['id']."'>Delete</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	<br><br>
	<p>Total Data Hasil Pencarian Adalah: <b><?php echo mysqli_num_rows($query) ?> Matakuliah</b></p>
