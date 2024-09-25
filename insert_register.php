<?php
include('koneksi.php');
$id_admin = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$kelamin = $_POST['kelamin'];
$email = $_POST['email'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$foto		= $_FILES['foto']['name'];
$tmp_name	= $_FILES['foto']['tmp_name'];
move_uploaded_file($tmp_name, 'img/'.$foto);

$query = "INSERT INTO admin(id_admin, username, password, nama, kelamin, email, agama, alamat, foto) VALUES('$id_admin','$username','$password','$nama','$kelamin','$email','$agama','$alamat','$foto')";
if(mysqli_query($link , $query)){
    header("location:login.php");
}
else{
    echo "ERROR, silahkan coba lagi". mysqli_error($link);
}

mysqli_close($link);
?>