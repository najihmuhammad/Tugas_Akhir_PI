<?php
include("../koneksi.php");

$no = $_POST['no'];
$perusahaan = $_POST['perusahaan'];
$bagian = $_POST['bagian'];
$detil_lowongan = $_POST['detil_lowongan'];
$batas_pengiriman = $_POST['batas_pengiriman'];
$query = mysql_query("INSERT INTO tabel_lowongan values  ('$no','$perusahaan','$bagian','$detil_lowongan','$batas_pengiriman')");
echo "Data Telah disimpan";
header("location:halperusahaan.php");

?>