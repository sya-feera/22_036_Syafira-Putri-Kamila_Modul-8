<?php 
session_start();
 
// Cek apakah user sudah login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

require 'config.php';
$mahasiswa = query("SELECT * FROM isi");

?>

<!DOCTYPE html> 
<html lang="en">
  <head>
    <!-- UNTUK MENAMPILKANicon -->
    <link rel="icon" href="" />  
    <title>Praktikum Modul 8</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- header -->
    <nav class="navbar bg-primary fixed-top">
      <div class="container-fluid">
        <div> 
          <!-- untuk brand di navbar -->
          <span class="navbar-brand mb-0 h1">
          <span style="color:white; font-style:montserrat; font-weight:bold; font-size: 35px;">PBW</span>
            <a class="navbar-brand" href="#">
            <span style="color:white; font-style:montserrat; font-size: 20px;">Selamat datang, Syafira Putri Kamila</span></a>
        </div>
        <!-- target = -->
        <!-- button bisa terpanggil garis tiganya karna ada yang dibawahhnya ada tagar yang akan dipanggil di button -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
              Praktikum PBW A
            </h5>
            <!-- untuk tombol silang -->
            <!-- data bs dismis unutk menghilangkan fungsi silangnya  -->
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <!-- a untuk membuat link -->
          <!-- ini adalah body dari garis tiga -->
          <div class="offcanvas-body position-relative">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="PROJECT5_220441100036_SYAFIRA PUTRI KAMILA.php">Home</a>
              </li>
              <li class="nav-item">
               <b><a class="nav-link active" href="#">Daftar Mahasiswa</a></b>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Informasi Tugas</a>
              </li>
            </ul>
            <div class="tombol position-absolute bottom-0 start-50">
              <a class="btn btn-danger d-grid gap-2" href="logout.php" role="button" 
                >Logout</a
              >
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end header -->

    <!-- content -->
    <section class="mt-5">
        <div class="content position-relative" style="padding-top: 50px">
          <div class="row">
            <h2 class="text-center">
            <span style="color:rgba(94, 94, 94, 1);">
              DAFTAR MAHASISWA 
              <p>PRAKTIKUM PEMROGRAMAN BERBASIS WEB</p>
            </span></h2>
        
             
        </div>
      </div>
    </section>
    <!-- end content -->

    <!-- searching -->
    <div class="container-sm">
      <div class="row">
        <div class="col-6">
          <a class="btn btn-success" href="tambah.php" role="button">Tambah data</a>
          <a class="btn btn-danger" href="#" role="button">Cetak laporan</a>
        </div>
        <div class="col-6">
          <div class="container-fluid">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="CARI BERDASARKAN NIM" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">🔍</button>
            </form>
          </div>
        </div>
      </div>
    <!-- end searching -->

    <!-- table -->
    <h5 class="card-title"> </h5>
            <p class="card-text">
                <table class="table table-striped" style="width: 97%; text-align: center;">
                    <thead class="table-primary">
              <tr>
              <th scope="col">No.</th>
              <th scope="col">Nim</th>
              <th scope="col">Nama</th>
              <th scope="col">Dosen</th>
              <th scope="col">Status</th>
              <th scope="col">Ket</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- membuat nomor -->
            <?php $i = 1; ?>
            <!-- menampilkan isi database -->
            <?php foreach( $mahasiswa as $mhs) : ?>
            <tr>
              <th><?= $i; ?></th>
              <td><?= $mhs["nim"]; ?></td>
              <td><?= $mhs["nama"]; ?></td>
              <td><?= $mhs["dosen"]; ?></td>
              <td><?= $mhs["status"]; ?></td>
              <td><?= $mhs["ket"]; ?></td>
              <td>
              <a href="edit.php?id=<?= $mhs["id"]; ?>" type="button" class="btn btn-primary  btn-sm" style="width: 100px; height: 30px; border-radius: 12px; background-color: #87A9FF;">Edit</a> | 
              <a href="hapus.php?id=<?= $mhs["id"]; ?>" role="button" class="btn btn-danger btn-sm" style="width: 100px; height: 30px; border-radius: 12px; background-color: #FF5E5E;">Hapus</a></td>
            </tr>

            <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- end table -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>