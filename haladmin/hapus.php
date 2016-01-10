<?php

include '../koneksi.php';
$no = $_GET['no'];
$hapus = mysql_query("delete from tabel_lowongan where no=$no");
if ($hapus) {
    header("location:halperusahaan.php");
} else {
    echo "gagal menghapus";
}
?>