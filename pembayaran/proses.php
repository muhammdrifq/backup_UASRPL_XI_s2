<?php
include '../database.php';
$tb_pembayaran = new Pembayaran();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $kode_pembayaran = $_POST['kode_pembayaran'];
    $tanggal_pembayaran = $_POST['tanggal_pembayaran'];
    $uang_pendaftaran = $_POST['uang_pendaftaran'];
    $uang_seragam = $_POST['uang_seragam'];
    $uang_kegiatan = $_POST['uang_kegiatan'];
    $total_pembayaran = $uang_pendaftaran + $uang_seragam + $uang_kegiatan;
    $id_pendaftaran = $_POST['id_pendaftaran'];

    if ($aksi == "create"){
        $tb_pembayaran->create($kode_pembayaran, $tanggal_pembayaran,
         $uang_pendaftaran, $uang_seragam, $uang_kegiatan, $total_pembayaran, $id_pendaftaran);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $tb_pembayaran->update($id, $kode_pembayaran, $tanggal_pembayaran,
        $uang_pendaftaran, $uang_seragam, $uang_kegiatan, $total_pembayaran, $id_pendaftaran);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $tb_pembayaran->delete($id);
        header("location:index.php");
    }
}
?>