<!DOCTYPE html>
<html>
<head>
	<title>LIST MATA KULIAH </title>
    <link rel="shortcut icon" type="image/png" href="icon/add.png" />
</head>
>

<body style="font-family: monospace; background: #d5f0f3;">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
	<font size="20"><b>List Mata Kuliah Semester 1 dan 2</b></font><br><br>
    <br>
    <img src="icon/DEL.jpg" width="100" height="100">
    

    <br><br><br><br>
	Mulai Mengelola Data
    <br><br><br>

    <table border=0>
        <tr>
            <td align="center"><a href="form-daftarmatakuliah.php"><img src="icon/add.png" width="84" height="84" title="Tambah Matkul"/></a></td>
            <td>&nbsp;</td>
            <td align="center"><a href="list-database.php"><img src="icon/list-data.png" width="84" height="84" title="Lihat Data Pendaftar"/></a></td>
            <td>&nbsp;</td>
            <td align="center"><a href="cari-data-matakuliah.php"><img src="icon/search.png" width="84" height="84" title="Cari Data mata kuliah"/></a></td>
        </tr>   
        <tr>
            <td align="center"><br>Tambah Matkul</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td align="center"><br>Lihat Data Matkul</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td align="center"><br>Cari Data Mata Kuliah</td>
        </tr>
    </table>
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<br><br>Pendaftaran siswa baru berhasil!, <a href='list-database.php'>Menuju ke list data pendaftar</a>";
			} else {
				echo "<br><br>Pendaftaran gagal!, Mohon cek file program!";
			}
		?>
	</p>
	<?php endif; ?>
	<br><br><br>
    Copyright &copy; 2020 Form List Mata Kuliah. All right reserved.<br><br><br>
	
    </center>
	</body>
</html>
