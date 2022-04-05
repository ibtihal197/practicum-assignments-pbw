<?php
include('../data/koneksi.php');
//configure update
if (isset($_POST['edit'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $npm = $_POST['mahasiswa_npm'];
    $mk = $_POST['matakuliah_kodemk'];

    // buat query update
    $sql = "UPDATE krs SET id='$id', mahasiswa_npm='$npm', matakuliah_kodemk='$mk' WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        $message = "Data Berhasil diedit";
        $message = urlencode($message);
        header("Location:../list.php?message={$message}");
    } else {
        $message = "Data gagal diedit";
        $message = urlencode($message);
        header("Location:../list.php?message={$message}");
    }
}