

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
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('Group.png');
        background-repeat: no-repeat;
        background-blend-mode: darken;
        background-size: cover;
      }
      h1{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #f5f5f5;
            font-size: 55px;
            font-weight: 1100;
            margin-top: 160px;
        }
        h2{
            color: #f5f5f5;
            font-size: 50px;
        }
      p{
            margin-top: 52px;
            color: #f5f5f5;
            font-size: 24px;
            font-family: serif;
            text-align: justify; text-indent: 0.5in;"
        }
    </style>
  </head>
  <body>
  <header>
    
    <ul class="navigation">
    
    <nav class="navbar fixed-top">
      <div class="container-fluid">
      <a class="navbar-brand" href="#"> <img src="GATOTKACA2.PNG" alt="logo" style="height: 40px;"></a>
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
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
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
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?></h1> 
    <hr width="50%" size="7%" color="white"> 
    <div class="card mb-3" style="max-width: 1100px; opacity: 95%">
    <div class="row g-0">
    <div class="col-md-4">
      <img src="https://www.tokyoweekender.com/wp-content/uploads/2021/01/shutterstock_667939123.jpg"  style="width: 373px; margin-top: 120px;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <br>
        <h5 class="card-title"><img src="GATOTKACA23.PNG" style="width: 200px;"></h5>
        <p class="card-text" style="color: black;">Gatotkaca merupakan website yang digunakan untuk mempermudah dosen 
        dalam melakukan administrasi mahasiswa di Universitas Negeri Nganjuk.
        Website ini terinspirasi dari website yang digunakan dosen di UPN Veteran Yogyakarta, yaitu Nakula.</p>
        <p class="card-text" style="color: black;">Pada gatotkaca terdapat beberapa menu, 
        yaitu menu untuk melihat jadwal mengajar, data mahasiswa yang dibimbing, dan presensi dosen.
        Gatotkaca masih dalam tahap pengembangan, jadi menu yang terdapat didalamnya baru segitu saja</p>
      </div>
    </div>
  </div>
</div>
    
    </center>

</body>
</html>