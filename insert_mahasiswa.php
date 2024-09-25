<?php
session_start();
if(empty($_SESSION['username']))
{
header("location:login.php?pesan=belum_login");
}

include('koneksi.php');

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$lahir = $_POST['lahir'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah'];
$foto		= $_FILES['foto']['name'];
$tmp_name	= $_FILES['foto']['tmp_name'];
move_uploaded_file($tmp_name, 'img/'.$foto);

$query = "INSERT INTO mahasiswa(nim, nama, kelamin, lahir, alamat, agama, sekolah, foto) VALUES('$nim','$nama','$kelamin','$lahir','$alamat','$agama','$sekolah','$foto')";
if(mysqli_query($link , $query)){
    header("location:data_mahasiswa.php");
}
else{
    echo "ERROR, silahkan coba lagi". mysqli_error($link);
}

mysqli_close($link);
?>