<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="project.css">
    <title>Register Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
		body{
			background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://img.freepik.com/free-vector/wayang-kulit-abstract-person-clouds_52683-46747.jpg?w=1060&t=st=1669273123~exp=1669273723~hmac=d381eb795a6eb1edc93e1c2dfc3bfe7e2ca323cff575cee4cb9d455306b3be0c");
			background-blend-mode: darken;
			background-size: cover;
		}
        h3{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #f5f5f5;
            font-size: 30px;
            font-weight: 1400;
            margin-top: 30px;
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
          <div class="offcanvas-header" >
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="GATOTKACA23.PNG" alt="logo" style="height: 21px;"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" style="color: white;">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="home2.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="login.php">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="register.php">Register</a>
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

    $query = "SELECT * FROM admin";
    $result = mysqli_query($link, $query);

    $auto = mysql_query("select max(id_pengguna) as max_code from pengguna");
    $data = mysql_fetch_array($auto);
    $code = $data['max_code'];
    $urutan = (int)substr($code, 1, 3);
    $urutan++;
    $huruf = "US";
    $id_user = $huruf . sprintf("%03s", $urutan);
    ?>
    <div>
        <center>
        <h3>Form Register</h3><br>
        <form role="form" action="insert_register.php" method="post" class="form-tambah">
            <div class="tambah">
            <div class="edit-container">
            <p>
                <label class="label" for="id_pengguna">Id Pengguna: </label>
                <input type="text" name="id_pengguna" value="<?php echo $id_user ?>" placeholder="Masukkan Id Admin">
            </p>
            <p>
                <label class="label" for="username">Username: </label>
                <input type="text" name="username"placeholder="Masukkan username">
            </p>
            <p>
                <label class="label" for="password">Password: </label>
                <input type="password" name="password"placeholder="Masukkan password">
            </p>
            <p>
                <label class="label" for="nama">nama: </label>
                <input type="text" name="nama"placeholder="Masukkan nama">
            </p>
            <p>
                Jenis Kelamin: <br>
              <select name="kelamin">
                <option>Laki-laki</option>
                <option>Perempuan</option>
                <option>Lainnya</option>
              </select>
            </p>
            <p>
                <label class="label" for="email">Email: </label>
                <input type="email" name="email"placeholder="Masukkan Email">
            </p>
            <p>
                Agama: <br>
                <select name="agama">
						<option>Islam</option>
						<option>Kristen</option>
						<option>Katholik</option>
						<option>Hindu</option>
						<option>Buddha</option>
						<option>Konghuchu</option>
				</select>
                </p>
                <p>
                <label class="label" for="alamat">alamat: </label>
                <input type="text" name="alamat"placeholder="Masukkan Alamat">
            </p> 
            <p>
                Foto: <br>
                <input type="file" name="foto" placeholder="Masukkan Foto">
                </p> 
            <br>
            <button type="submit" name="submit" value="LOGIN"> Register </button>
            <br>
            <br>
            <p class="register"> Sudah Punya Akun? </p>
            <a href="login.php" class="register">Login</a>
            </div>
            </div>
        
        
        </form>
    </div>
    </center>
    <br>
    
</body>
</html> 