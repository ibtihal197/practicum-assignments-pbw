<?php
if (isset($_GET['id'])){
    include ('data/koneksi.php');
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "DELETE FROM krs WHERE id='$id'");
    if ($query){
        $message = "Data berhasil dihapus";
        $message = urlencode($message);
        header("Location:index.php?message={$message}");
    }else{
        $message = "Data gagal dihapus";
        $message = urlencode($message);
        header("Location:index.php?message={$message}");
    }
}