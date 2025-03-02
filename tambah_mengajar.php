<?php
session_start();
if(empty($_SESSION['username']))
{
header("location:login.php?pesan=belum_login");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="project.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body{
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('Group.png');
        background-repeat: no-repeat;
        background-blend-mode: darken;
        background-size: cover;
      }
    </style>
  </head>
  <body>
  <header>
    
    <ul class="navigation">
    
    <nav class="navbar fixed-top">
      <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="GATOTKACA2.PNG" alt="logo" style="height: 40px;">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="background-color: #f5f5f5;">
          <span class="navbar-toggler-icon" style="background-color: #f5f5f5;"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="GATOTKACA23.PNG" alt="logo" style="height: 21px;"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Profil
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="profil.php">Profil</a></li>
                  <li><a class="dropdown-item" href="edit_profil.php">Edit Profil</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="data_mahasiswa.php">Data Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="tampil_mengajar2.php">Jadwal Mengajar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="kehadiran.php">Input Kehadiran</a>
              </li>
             
            </ul>
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </div>
    </nav>
       
    </ul>
    </header>
    
    <?php
    include('koneksi.php');

    $query = "SELECT * FROM mengajar";
    $result = mysqli_query($link, $query);
    ?>
    <div>
        <center>
        <h3>Form Tambah Data</h3><br>
        <form role="form" action="insert_mengajar.php" method="post" enctype="multipart/form-data" class="form-tambah">
            <div class="tambah">
            <div class="login-container">
                <p>
                Kode Mata Kuliah: <br>
                <input type="text" name="kode" placeholder="Masukkan Kode Mata Kuliah">
                </p>
                <p>
                Mata Kuliah: <br>
                <input type="text" name="mata_kuliah" placeholder="Masukkan Mata Kuliah">
                </p>
                <br>
                <p>
                Tahun Ajaran: <br>
                <select name="tahun">
						<option>2017/2018</option>
						<option>2018/2019</option>
						<option>2019/2020</option>
                        <option>2020/2021</option>
                        <option>2021/2022</option>
				</select>
                </p>
                <p>
                Semester: <br>
                <select name="semester">
						<option>Ganjil</option>
						<option>Genap</option>
				</select>
                </p>
                <br>
                <p>
                Kelas: <br>
                <input type="text" name="kelas" placeholder="Masukkan Kelas">
                </p>
                <p>
                SKS: <br>
                <input type="text" name="sks" placeholder="Masukkan Jumlah SKS">
                </p>
                <br>
                <p>
                Hari: <br>
                <select name="hari">
						<option>Senin</option>
						<option>Selasa</option>
						<option>rabu</option>
						<option>Kamis</option>
						<option>Jumat</option>
				</select>
                </p>
                <p>
                Jam Mulai: <br>
                <input type="time" name="jam_mulai">
                </p>
                <p>
                Jam Selesai: <br>
                <input type="time" name="jam_selesai">
                </p>
                <p>
                Ruang: <br>
                <input type="text" name="ruang" placeholder="Masukkan Ruang">
                </p>
                <br>
                <button href="tampil_mengajar.php" type="submit">Tambah Data</button><br><br>
            </div>
            </div>
            <br>
            <button href="tampil_mengajar2.php" class="batal">Batal</button> 
        
        </form>
    </div>
    </center>
    <br>
    
</body>
</html> 