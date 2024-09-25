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
    <title>Biodata Mahasiswa</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body{
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('Group.png');
        background-repeat: no-repeat;
        background-blend-mode: darken;
        background-size: cover;
      }
        h3{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #f5f5f5;
            font-size: 48px;
            font-weight: 1600;
            margin-top: 100px;
      }
    </style>
  </head>
  <body>
  <header>
    
    <ul class="navigation">
    
    <nav class="navbar fixed-top">
      <div class="container-fluid">
      <a class="navbar-brand" href="#" ><img src="GATOTKACA2.PNG" alt="logo" style="height: 40px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" style="background-color: #f5f5f5;">
          <span class="navbar-toggler-icon" style="background-color: #f5f5f5; border-color: #f5f5f5;"></span>
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
    <center>
    <h3>Jadwal Mengajar</h3>
    </center>
    <?php
    include('koneksi.php');
    $kode=$_GET['kode'];
    $query = "SELECT * FROM mengajar WHERE kode='$kode'";
    $result = mysqli_query($link, $query);
    ?>
    <div> 
        <div class="row">
            <div class=>
         
                <center>
               
                <br>
                    <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>
              <br>
              <table width="100%" border="0">
              <tbody>
              <td valign="top">
              <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
              <tbody>
                        <tr>
                          <td>Jam Mengajar</td>
                          <td>:</td>
                          <td><?php echo $row['jam_mulai']; ?> - <?php echo $row['jam_selesai']; ?></td>
                        </tr>
                        <tr>
                            <td>kode </td>
                            <td>:</td>
                            <td><?php echo $row['kode']; ?></td>
                        </tr>
                        <tr>
                          <td>Mata Kuliah</td>
                          <td>:</td>
                          <td><?php echo $row['mata_kuliah']; ?></td>
                        </tr>
                        <tr>
                          <td>Kelas</td>
                          <td>:</td>
                          <td><?php echo $row['kelas']; ?></td>
                        </tr>
                        <tr>
                          <td>semester</td>
                          <td>:</td>
                          <td><?php echo $row['semester']; ?></td>
                        </tr>
                        <tr>
                          <td>SKS</td>
                          <td>:</td>
                          <td><?php echo $row['sks']; ?></td>
                        </tr>
                        <tr>
                          <td>Tahun Ajaran</td>
                          <td>:</td>
                          <td><?php echo $row['tahun']; ?></td>
                        </tr>
                        </tr>
                        </tbody></table>
                        </td>
                    </tr>
                    </tbody></table>
                      <br>
                      <button class="tambah"><a href="edit_mengajar.php?kode=<?php echo $row['kode'];?>" role="button">Edit Jadwal</a></button>  
                            <?php 
                            }
                            mysqli_close($link);
                            ?>
                <br><br>
                <button class="tambah">
                    <a href="tampil_mengajar.php"> Back </a>
                </button>
                <p id="tanggal" style="text-align: right; font-size: 15px"><?php echo date("d M Y"); ?></p>
               
                </center>
            </div>
        </div>
    </div>
                    

</body>
</html>