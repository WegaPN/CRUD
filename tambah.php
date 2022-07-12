<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah data</title>
</head>
<body>
<center>
	<h3>Tambah Data </h3>
			<form  method="post">
			<strong>No.Induk :</strong>
			<input name="no_induk" type="text" size="12" maxlength="12" required>
			<br /><br />
			<strong>NISN :</strong>
			<input name="nisn" type="text" size="30" maxlength="25"required>
			<br /><br />
			<strong>Nama Siswa :</strong>
			<input name="nama" type="text" size="50" maxlength="50"required>
			<br /><br />
			<strong>Jenis Kelamin :</strong>
			<input id="Perempuan" type="radio" name="jeniskelamin" value="P">
			<label > Perempuan </label>
			<input id="Laki-laki" type="radio" name="jeniskelamin" value="L">
			<label> Laki-laki </label>
			<br /><br />
			<strong>Kompetensi Keahlian :</strong>
			<select name="kompetensi">
					<option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
					<option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
					<option value="Teknik Audio Video">Teknik Audio Video</option>
					<option value="Teknik Gambar Bangunan">Teknik Gambar Bangunan</option>
					<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
				</select>
			<br /><br />
			<strong>Tempat Lahir :</strong>
			<input name="tempat" type="text" size="50" maxlength="50"required>
			<br /><br />
			<strong>Tanggal Lahir :</strong>
			<input name="tanggal" type="date">
			<br /><br />
			<input type="submit" name="btnSubmit" value="simpan">
			</form>
</center>
</body>
</html>

<?php
	
	if(isset($_POST["btnSubmit"]))
	{
		$no_induk = $_POST["no_induk"];
		$nisn = $_POST["nisn"];
		$nama = $_POST["nama"];
		$jk = $_POST["jeniskelamin"];
		$komp = $_POST["kompetensi"];
		$tempat = $_POST["tempat"];
		$tanggal = $_POST["tanggal"];
		$tanggal =date('Y-m-d',strtotime($tanggal));
		
		$conn = mysqli_connect("localhost" ,"root" ,"" ,"januari");
		if (mysqli_connect_errno())
		{
			echo "Koneksi ke server gagal";
			exit();
		}
		$query = mysqli_query($koneksi,"INSERT INTO siswa VALUES('$noinduk', '$nisn','$nama','$jk', '$komp', '$tempat', '$tanggal') ");
if ($query > 0) {
echo "<script>alert('berhasil di tambah');window.location.href='index.php'</script>";
}else{
echo "<script>alert('gagal di tambah');'</script>";
		}
	}
?>
