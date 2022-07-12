<?php
include 'koneksi.php';
$noinduk = $_GET['noinduk'];
$query = mysqli_query($koneksi,"SELECT * FROM siswa Where no_induk='$noinduk'");
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
</head>
<body>
<center>
<h3>Edit data</h3>
	<form method="post">
	<label>NO INDUK :</label>
	<input type="text" name="no_induk" value="<?=$data['no_induk'] ?>"></input><br>
	<label>NISN :</label>
	<input type="text" name="nisn" value="<?=$data['nisn'] ?>"></input><br>
	<label>Nama Lengkap :</label>
	<input type="text" name="nama_lengkap" value="<?=$data['nama_siswa'] ?>"></input><br>
	<label>Jenis Kelamin :</label>
	<input type="text" name="jk" value="<?=$data['jk'] ?>"></input><br>
	<label>Komp Keahlian :</label>
	<input type="text" name="komp_keahlian" value="<?=$data['kompetensi_keahlian'] ?>"></input><br>
	<label>Tempat Lahir</label>
	<input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir'] ?>"></input><br>
	<label>Tanggal Lahir</label>
	<input type="date" name="tanggal_lahir" value="<?=$data['tanggal_lahir'] ?>"></input><br>
	<input type="submit" name="edit" value="Edit"></input>
	</form>
</center>
</body>
</html>

<?php

	if (isset($_POST['edit'])) {
$no = $_GET['no_induk'];
$nisn = $_POST['nisn'];
$nama = $_POST['nama_lengkap'];
$jenis = $_POST['jk'];
$komp = $_POST['komp_keahlian'];
$tempat = $_POST['tempat_lahir'];
$tanggal = $_POST['tanggal_lahir'];
$edit = mysqli_query($koneksi,"UPDATE siswa SET no_induk='$no',nisn='$nisn',nama_lengkap='$nama',jk='$jenis',komp_keahlian='$komp',tempat_lahir='$tempat',tanggal_lahir='$tanggal' WHERE no_induk='$no_induk'");
	if ($edit > 0 ) {
echo "<script>alert('berhasil di edit');window.location.href='index.php'</script>";
	}else{
echo "<script>alert('gagal di edit');'</script>";
	}
	}
?>
