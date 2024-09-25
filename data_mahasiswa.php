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
        background-image: url('Group.png');
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
                <a class="nav-link active" href="data_mahasiswa.php">Data Mahasiswa</a>
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
    <?php
    include('koneksi.php');

    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($link, $query);
    ?>
    <div> 
        <div class="row">
            <div class=>
         
                <center>
                <h3>Data Mahasiswa</h3>
                <br> 
                <table>
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>jenis Kelamnin</th>
                            <th>Tanggal lahir</th>
                            <th>Alamat</th>
                            <th>Agama</th>
                            <th>Asal Sekolah</th>
                            <th>edit/hapus</th>
                            <th>Profil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?php echo $row['nim']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['kelamin']; ?></td>
                                <td><?php echo $row['lahir']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['agama']; ?></td>
                                <td><?php echo $row['sekolah']; ?></td>
                                <td>
                                    <a href="edit_mahasiswa.php?nim=<?php echo $row['nim'];?>" role="button">Edit</a>
                                    <a href="hapus_mahasiswa.php?nim=<?php echo $row['nim'];?>" role="button">Hapus</a>
                                </td>
                                <td><a href="tampil.php?nim=<?php echo $row['nim'];?>" role="button">Profil</a></td> 
                            </tr>
                            
                            <?php 
                            }
                            mysqli_close($link);
                            ?>
                    </tbody>
                </table>
                <br><br>
                <button class="tambah">
                    <a href="tambah_mahasiswa.php"> Tambah Data Mahasiswa </a>
                </button>
                <p id="tanggal" style="text-align: right; font-size: 15px"><?php echo date("d M Y"); ?></p>
               
                </center>
            </div>
        </div>
    </div>
                    

</body>
</html>