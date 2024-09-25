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
    <title>Jadwal Mengajar</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body{
        background-image: url('Group.png');
        background-repeat: no-repeat;
        background-blend-mode: darken;
        background-size: cover;
    }
      h3{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #333;
        font-size: 26px;
        font-weight: 1100;
        margin-top: 70px;
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
    <?php
    include('koneksi.php');
    
    $hari=$_POST['hari'];
    $tahun=$_POST['tahun'];
    $query = "SELECT * FROM mengajar WHERE hari='$hari' AND tahun='$tahun'";
    $result = mysqli_query($link, $query);
   
    ?>
    <form method="POST" enctype="multipart/form-data" action="tampil_mengajar2.php"> 
        <div class="row">
            <div class=>
         
                <center>
                <h3>JADWAL MENGAJAR</h3>
                <br> 
                <table>
                    
                    <thead>
                       
                        <br>
                        <tr>
                            <th>Hari</th>
                            <th>Jam Kuliah</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Mata Kuliah</th>
                            <th>Kelas</th>
                            <th>Semester</th>
                            <th>SKS</th>
                            <th>Tahun Ajaran</th>
                            <th>Action</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>    
                            <tr>
                                <td><?php echo $row['hari']; ?></td>
                                <td><?php echo $row['jam_mulai']; ?> - <?php echo $row['jam_selesai']; ?></td>
                                <td><?php echo $row['kode']; ?></td>
                                <td><?php echo $row['mata_kuliah']; ?></td>
                                <td><?php echo $row['kelas']; ?></td>
                                <td><?php echo $row['semester']; ?></td>
                                <td><?php echo $row['sks']; ?></td>
                                <td><?php echo $row['tahun']; ?></td>
                                <td>
                                    <a href="edit_mengajar.php?kode=<?php echo $row['kode'];?>" role="button">Edit</a>
                                    <a href="hapus_mengajar.php?kode=<?php echo $row['kode'];?>" role="button">Hapus</a>
                                </td> 
                                <td><a href="detail_mengajar.php?kode=<?php echo $row['kode'];?>" role="button">Detail</a></td>
                            </tr>
                            
                            <?php 
                            }
                            mysqli_close($link);
                            ?>
                    </tbody>
                </table>
                <br><br>
                <button class="tambah">
                    <a href="tambah_mengajar.php"> Tambah Jadwal Mengajar </a>
                </button>
                <br><br>
                <button class="batal">
                <a href="tampil_mengajar2.php">Back</a>
                </button>
                <p id="tanggal" style="text-align: right; font-size: 15px"><?php echo date("d M Y"); ?></p>
               
                </center>
            </div>
        </div>
    </form>
                    

</body>
</html>