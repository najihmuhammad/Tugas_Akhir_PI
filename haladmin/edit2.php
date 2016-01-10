<?php
include "../koneksi.php";
//get the value from form update
$no = $_POST['no'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$email = $_POST['email'];
$password = $_POST['password'];

//query for update data in database
 $query = "UPDATE tabel_perusahaan SET nama_perusahaan = '$nama_perusahaan', email = '$email',password='$password' WHERE no = '$no'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "halAdmin.php";
	echo "<h4> update data success </h4>";
}
?>