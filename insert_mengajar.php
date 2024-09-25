<?php
session_start();
if(empty($_SESSION['username']))
{
header("location:login.php?pesan=belum_login");
}

include('koneksi.php');

$kode = $_POST['kode'];
$mata_kuliah = $_POST['mata_kuliah'];
$tahun = $_POST['tahun'];
$semester = $_POST['semester'];
$kelas = $_POST['kelas'];
$sks = $_POST['sks'];
$hari = $_POST['hari'];
$jam_mulai = $_POST['jam_mulai'];
$jam_selesai = $_POST['jam_selesai'];
$ruang = $_POST['ruang'];


$query = "INSERT INTO mengajar(kode, mata_kuliah, tahun, semester, kelas, sks, hari, jam_mulai, jam_selesai, ruang) VALUES('$kode','$mata_kuliah','$tahun','$semester','$kelas','$sks','$hari','$jam_mulai','$jam_selesai','$ruang')";
if(mysqli_query($link , $query)){
    header("location:tampil_mengajar2.php");
}
else{
    echo "ERROR, silahkan coba lagi". mysqli_error($link);
}

mysqli_close($link);
?>