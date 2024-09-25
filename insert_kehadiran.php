<?php
session_start();
if(empty($_SESSION['username']))
{
header("location:login.php?pesan=belum_login");
}

include('koneksi.php');

$kode = $_POST['kode'];
$hadir = $_POST['hadir'];
$mata_kuliah = $_POST['mata_kuliah'];
$tahun = $_POST['tahun'];
$semester = $_POST['semester'];
$kelas = $_POST['kelas'];
$sks = $_POST['sks'];
$hari = $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];



$query = "INSERT INTO kehadiran(kode, hadir, mata_kuliah, tahun, semester, kelas, sks, hari, jam_mulai, jam_selesai) VALUES('$kode','$hadir','$mata_kuliah','$tahun','$semester','$kelas','$sks','$hari','$jam_mulai','$jam_selesai')";
if(mysqli_query($link , $query)){
    header("location:tampil_kehadiran.php");
}
else{
    echo "ERROR, silahkan coba lagi". mysqli_error($link);
}

mysqli_close($link);
?>