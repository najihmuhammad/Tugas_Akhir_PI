<?php
include "../koneksi.php";
//get the value from form update
$no = $_POST['no'];
$perusahaan = $_POST['perusahaan'];
$bagian = $_POST['bagian'];
$detil_lowongan = $_POST['detil_lowongan'];
$batas_pengiriman = $_POST['batas_pengiriman'];

//query for update data in database
 $query = "UPDATE tabel_lowongan SET bagian = '$bagian', perusahaan = '$perusahaan', detil_lowongan = '$detil_lowongan', batas_pengiriman = '$batas_pengiriman' WHERE no = '$no'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "halAdmin.php";
	echo "<h4> update data success </h4>";
}
?>