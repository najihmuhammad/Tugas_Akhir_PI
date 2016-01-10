<?php

include '../koneksi.php';
$no = $_GET['no'];
$hapus = mysql_query("delete from tabel_perusahaan where no=$no");
if ($hapus) {
    header("location:halAdmin.php");
} else {
    echo "gagal menghapus";
}
?>