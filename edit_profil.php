<?php
include 'koneksi.php';
$id_admin=$_GET['id_admin'];
$query=mysqli_query($link,"SELECT * from admin where id_admin=$id_admin");
$row = mysqli_fetch_array($query);
?>

<html>
<head>
<title> Form Admin </title>
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
                  <li><a class="dropdown-item active" href="edit_profil.php">Edit Profil</a></li>
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
                <a class="nav-link" aria-current="page" href="tampil_mengajar2.php">Jadwal Mengajar</a>
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
<form class="form-control" style="width: 1000px; height: 670px;" method="POST" enctype="multipart/form-data" action="form_profil.php">
    <div class="tambah">
      <br><br><br>
        <div class="edit-container">
            <input type="hidden" name="id_admin" value="<?php echo $row['id_admin']; ?>"></br>

            Username :<br><input type="text" name="username" placeholder="username"
            value="<?php echo $row['username']; ?>"></br>

            Password :<br><input type="password" name="password" placeholder="password"
            value="<?php echo $row['password']; ?>"></br>


            Nama :<br><input type="text" name="nama" placeholder="nama"
            value="<?php echo $row['nama']; ?>"></br>

            Jenis Kelamin :<br>
            <select name="kelamin" placeholder="kelamin" value="<?php echo $row['kelamin']; ?>">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                    <option>Lainnya</option>
                </select></br>

            Email :<br><input type="email" name="email" placeholder="email"
            value="<?php echo $row['email']; ?>"></br>

            Alamat:<br><input type="text" name="alamat" placeholder="alamat"
            value="<?php echo $row['alamat']; ?>"></br>

            Agama:<br>
                <select name="agama" placeholder="agama" value="<?php echo $row['agama']; ?>">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katholik</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>Konghuchu</option>
                </select></br>

            Foto:<br><input type="file" name="foto" placeholder="foto"
            value="<?php echo $row['foto']; ?>"><br><br>

            <button class="batal"> Kirim</button>
            <br>
        </div>
    </div>
</form>
</center>
</body>
</html>
