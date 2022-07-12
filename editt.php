<?php
	include  'koneksi.php';		
		$noin = $_GET["no_induk"];
		$conn = mysqli_connect("localhost","root","","januari");
		
		if(mysqli_connect_errno())
		{
			echo"Koneksi ke server gagal";
			exit();
		}
		$query = "SELECT nisn, nama, jk, kom, tempat, tanggal FROM siswa WHERE no_induk ='$noin'";
		$result = mysqli_query($conn, $query);
		if ($result)
		{
			$k =mysqli_fetch_array($result);
		}
		
		if ($k = mysqli_fetch_row($result))
		{
			$noin = $k[0];
			$nisn = $k[1];
			$nama = $k[2];
			$jk = $k[3];
			$kom = $k[4];
			$tempat = $k[5];
			$tanggal = $k[6];
	
		}
		
		echo'
		<form  method="post">
			<strong>No Induk :</strong><br />'.$noin.'
			<input name="noinduk" type="hidden" value="'.$noin.'">
			<br /><br />
			<strong>NISN :</strong><br />
			<input name="nisn" type="text" size="30" maxlength="25" value="'.$k["nisn"].'">
			<br /><br />
			<strong>Nama :</strong><br />
			<input name="nama" type="text" size="30" maxlength="25" value="'.$k["nama"].'">
			<br /><br />
			<strong>Jenis Kelamin :</strong><br />
			<input name="jeniskelamin" type="radio" value="'.$k["jeniskelamin"].'">

			<br /><br />
			<strong>Kompetensi Keahlian:</strong><br />
			<input name="kompetensi" type="text" size="50" maxlength="50" value="'.$k["kompetensi"].'">
			<br /><br />
			<strong>Tempat Tinggal :</strong><br />
			<input name="tempat" type="text" size="30" maxlength="25" value="'.$k["tempat"].'">
			<br /><br />
			<strong>Tanggal Lahir :</strong><br />
			<input name="tempat" type="date"  value="'.$k["tanggal"].'">
			<input type="submit" name="btnSubmit" value="Update">
			</form>';
		?>
			<?
		$sql = "UPDATE siswa SET nisn = '$nisn',nama='$nama', jeniskelamin='$jk',kompetensi='$kom',tempat='$tempat', tanggal='$tanggal' WHERE noinduk ='$noin'";
		
		mysqli_query($conn, $sql);
		$num = mysqli_affected_rows($conn);
?>


	mysqli_query($conn, $sql);
		$num = mysqli_affected_rows($conn);
		?>
		}
		if (isset($_POST['edit'])) {
		$noin = $_POST['noinduk'];
		$nisn = $_POST['nisn'];
		$nama = $_POST['nama'];
		$jk = $_POST['jeniskelamin'];
		$kom = $_POST['kompetensi'];
		$tempat = $_POST['tempat'];
		$tanggal = $_POST['tanggal'];
		$tanggal =date('Y-m-d',strtotime($tanggal));
		}
		if ($k = mysqli_fetch_row($result))
		{
			$noin = $k[0];
			$nisn = $k[1];
			$nama = $k[2];
			$jk = $k[3];
			$kom = $k[4];
			$tempat = $k[5];
			$tanggal = $k[6];
	
		}