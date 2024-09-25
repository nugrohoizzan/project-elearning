<?php
include 'koneksi.php';
$kode=$_GET['kode'];
$query=mysqli_query($link,"SELECT * from mengajar where kode=$kode");
$row = mysqli_fetch_array($query);
?>

<html>
<head>
<title> Form mengajar </title>
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
      <a class="navbar-brand" href="#"><img src="GATOTKACA2.PNG" alt="logo" style="height: 40px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="background-color: #f5f5f5;">
          <span class="navbar-toggler-icon" style="background-color: #f5f5f5;"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" >
          <div class="offcanvas-header" style="color-icon: #f5f5f5;">
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
<center>
<form class="form-edit" method="POST" enctype="multipart/form-data" action="form_edit2.php">
    <div class="mb-3">
        <div class="form-control">
            <input type="hidden" name="kode" value="<?php echo $row['kode']; ?>"><br><br>

            <p align="left"> Mata Kuliah : </p><input type="text" name="mata_kuliah" placeholder="mata_kuliah"
            value="<?php echo $row['mata_kuliah']; ?>"><br><br>

            <p align="left">Tahun Ajaran :</p>
            <select name="tahun" placeholder="tahun" value="<?php echo $row['tahun']; ?>">
                        <option>2017/2018</option>
						<option>2018/2019</option>
						<option>2019/2020</option>
                        <option>2020/2021</option>
                        <option>2021/2022</option>
                </select><br><br>

            <p align="left">Semester:</p>
                <select name="semester" placeholder="semester" value="<?php echo $row['semester']; ?>">
                    <option>Ganjil</option>
                    <option>Genap</option>
                </select><br><br>

            <p align="left">Kelas:</p><input type="text" name="kelas" placeholder="kelas"
            value="<?php echo $row['kelas']; ?>"><br><br>

            <p align="left">SKS:</p><input type="text" name="sks" placeholder="sks"
            value="<?php echo $row['sks']; ?>"><br><br>

            <p align="left">Hari :</p>
            <select name="hari" placeholder="hari" value="<?php echo $row['hari']; ?>">
                        <option>Senin</option>
						<option>Selasa</option>
						<option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
            </select><br><br>

            <p align="left">Jam Mulai:</p><input type="time" name="jam_mulai" placeholder="jam_mulai"
            value="<?php echo $row['jam_mulai']; ?>"><br><br>

            <p align="left">Jam Selesai:</p><input type="time" name="jam_selesai" placeholder="jam_selesai"
            value="<?php echo $row['jam_selesai']; ?>"><br><br>

            <button class="batal"> Kirim</button>
        </div>
    </div>
</form>
</center>
</body>
</html>
