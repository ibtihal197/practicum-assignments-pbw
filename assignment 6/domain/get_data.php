<?php
include('data/koneksi.php');
$query = "SELECT krs.id,mahasiswa.nama,matakuliah.nama_mk,matakuliah.jumlah_sks FROM krs JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm JOIN matakuliah ON krs.matakuliah_kodemk = matakuliah.kodemk";

$run = mysqli_query($koneksi,$query);