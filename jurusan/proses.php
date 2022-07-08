<?php
include '../database.php';
$tb_jurusan = new Jurusan();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $kode_jurusan = $_POST['kode_jurusan'];
    $jurusan = $_POST['jurusan'];

    if ($aksi == "create"){
        $tb_jurusan->create($kode_jurusan,$jurusan);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $tb_jurusan->update($id,$kode_jurusan,$jurusan);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $tb_jurusan->delete($id);
        header("location:index.php");
    }
}
?>