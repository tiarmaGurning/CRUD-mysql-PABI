<?php

    include("configuration.php");

    if(isset($_POST['simpan'])){
        
        $id = $_POST['id'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $semester = $_POST['semester'];
        $nama_dosen = $_POST['nama_dosen'];
        $nama_asisten_dosen = $_POST['nama_asisten_dosen'];
        $no_handphone_dosen = $_POST['no_handphone_dosen'];
        $no_handphone_asisten_dosen = $_POST['no_handphone_asisten_dosen'];
        
        $sql = "UPDATE tbl_matakuliah SET mata_kuliah='$mata_kuliah', semester='$semester', nama_dosen='$nama_dosen', nama_asisten_dosen='$nama_asisten_dosen', no_handphone_dosen='$no_handphone_dosen', no_handphone_asisten_dosen='$no_handphone_asisten_dosen' WHERE id=$id";
        $query = mysqli_query($db, $sql);
        
        if( $query ) {
            header('Location: list-database.php');
        } else {
            die("Gagal menyimpan perubahan...");
        }
        
    } else {
        die("Akses dilarang...");
    }

?>
