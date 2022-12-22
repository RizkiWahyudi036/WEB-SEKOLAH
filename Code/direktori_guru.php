<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMA Harapan Bangsa</title>
    <link rel="shortcut icon" href="asset/logo-removebg-preview.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="sxtyle.css">
    <link rel="stylesheet" href="webstyle.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!--  -->
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- End -->

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color:white ;">
        <div class="container">
            <a class="navbar-brand" href="index.php">SMK Harapan Bangsa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="profil.php">Profil</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="fasilitas.php">Fasilitas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Siswa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="direktori_siswa.php">Direktori Siswa</a></li>
                            <li><a class="dropdown-item" href="direktori_guru.php">Direktori Guru</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index.php">Galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="index.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="adm_login.php"><button class="btn btn-info">Login</button></a>

            </div>

        </div>

        </div>
    </nav>
    <!-- End -->

    <!-- content -->
    <section id="siswa">
        <div class="container mt-5">
            <div class="row text-center mb-2">
                <div class="col mt-3">
                    <div class="section-headline text-center">
                        <h2>Direktori Guru</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-evenly fs-5 text-center align-items-center">
                <div class="col-md-12">

                    <table class="table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Mata Pelajaran</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <!-- Menapilkan Data Mahasiswa -->

                        <?php
              include_once 'koneksi.php';
                $no=1;
                $data=mysqli_query($connection, "SELECT * FROM db_guru");
                while ($d=mysqli_fetch_array($data)){
            ?>

                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $d['nip']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['mapel']; ?></td>
                            <td><?php echo $d['jk']; ?></td>
                            <td><?php echo $d['alamat']; ?></td>
                        </tr>

                        <?php
            }
            ?>

                        <!-- Menampilkan Data Mahasiswa -->
                    </table>
                </div>
            </div>
        </div>
        <section>
            <div class="container">
                <div class="row justify-content-evenly  align-items-center">
                    <div class="col-md-7">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-6">
                                <div class="edit-data mb-4">

                                    <a href="index.php"><button class="back">Back To Homepage</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </section>
    <!-- end -->

    <!-- Footer -->
    <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-4 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>

        </div>

        <div class="col-lg-4 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong>0888-8888-8888<br>
              <strong>Email:</strong> smkharapanbangsa@sch.ac.id<br>
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SMK Harapan Bangsa</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <b>R Boyz</b>
      </div>
    </div>

  </footer>
    <!-- end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>