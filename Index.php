<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>

<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
<head>
<?php
include 'sidebar.php';
?>
<title>Belajar CRUD</title>
</head>
<body>
<center>
<h1>Data Siswa</h1>
<a href="tambah.php"> TAMBAH DATA SISWA </a>
	<table border="1" width="90%">
			<tr>
				<th >No.Induk</th>
				<th >NISN </th>
				<th >Nama Siswa</th>
				<th >Jenis Kelamin </th>
				<th >Kompetensi Keahlian </th>
				<th >Tempat Lahir </th>
				<th >Tanggal Lahir </th>
			</tr>
	</tr>
<?php
$query = mysqli_query($koneksi,"SELECT * FROM siswa ");
$no=1;
foreach ($query as $data) {

?>
<tr>
<td><?=$data['no_induk']?></td>
<td><?=$data['nisn']?></td>	
<td><?=$data['nama_siswa']?></td>
<td><?=$data['jenis_kelamin']?></td>
<td><?=$data['kompetensi_keahlian']?></td>
<td><?=$data['tempat_lahir']?></td>
<td><?=$data['tanggal lahir']?></td>

	
	<td><a href="edit.php?no_induk=<?=$data['no_induk']?>">EDIT</a> | |<a href="delete.php?no_induk=<?=$data['no_induk']?>"> DELETE </a></td>
</tr>
<?php 
}
?>
</table>
</center>
 <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>
