<?php

	include("configuration.php");

	// cek apakah tombol daftar sudah diklik atau blum?
	if(isset($_POST['pendaftaran'])){

		// ambil data dari formulir
		$mata_kuliah = $_POST['mata_kuliah'];
		$semester = $_POST['semester'];
		$nama_dosen = $_POST['nama_dosen'];
		$nama_asisten_dosen = $_POST['nama_asisten_dosen'];
		$no_handphone_dosen = $_POST['no_handphone_dosen'];
		$no_handphone_asisten_dosen = $_POST['no_handphone__asisten_dosen'];
		
		// buat query
		$sql_insertdata = "INSERT INTO tbl_matakuliah (mata_kuliah, semester, nama_dosen, nama_asisten_dosen, no_handphone_dosen, no_handphone_asisten_dosen) VALUE ('$mata_kuliah', '$semester', '$nama_dosen', '$nama_asisten_dosen', '$no_handphone_dosen', '$no_handphone_asisten_dosen')";
		$query = mysqli_query($db, $sql_insertdata);
		
		// apakah query simpan berhasil?
		if( $query ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: index.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
			header('Location: index.php?status=gagal');
		}

	} else {
		die("Akses dilarang...");
	}

?>
