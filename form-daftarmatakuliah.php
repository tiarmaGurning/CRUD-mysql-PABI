<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Mata Kuliah</title>
    <link rel="shortcut icon" type="image/png" href="icon/add.png" />
</head>
<style type="text/css">
    select {
        width: 150px;
		height: 25px;
    }
</style>

<body style="font-family: monospace;">
	<br><br><br><br><br><br><br><br><br><br>
	<center>
	<font size="6"><b>FORM Tambah Mata Kuliah</font></b><br>
	List Mata Kuliah ini adalah list lengkap dari semester 1 sampai dengan 2.<br><br><br><br>	
	<fieldset style="width: 400px; height: 220px; padding: 20px; border:2px solid green; box-shadow:0 0 10px #999;">
	<form action="proses-pendaftaran.php" method="POST">
		<table border=0>
			<tr>
				<td width="200" valign="top"><label for="mata_kuliah">Mata Kuliah</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="mata_kuliah" placeholder="" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="semester">Semester</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="semester" placeholder="" /></td>
			</tr>
            <tr>
				<td width="200" valign="top"><label for="nama_dosen">Nama Dosen</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="nama_dosen" placeholder="" /></td>
			</tr>
			<tr>
				<td width="200" valign="center"><label for="nama_asisten_dosen">Nama Asisten Dosen</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="nama_asisten_Dosen" placeholder="" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="no_handphone_dosen">No Handphone Dosen</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="no_handphone_dosen" placeholder="" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="no_handphone_asisten_dosen">No Handphone Asisten Dosen</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="no_handphone_asisten_dosen" placeholder="" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td width="200"><input style="margin-top:10px; height:25px; width:120px" height="200" type="submit" value="Save Data MataKuliah" name="pendaftaran" /></td>
			</tr>
		</table>
		</fieldset>
		<br><br><br>
		Copyright &copy; 2020 Form Pendaftaran Matakuliah. <br><br><br>
		<a href="list-database.php">[|] Lihat Data Matakuliah</a>&nbsp;|&nbsp;<a href="index.php">[^] Ke Halaman Utama</a>
		</center>
	</body>
</html>
