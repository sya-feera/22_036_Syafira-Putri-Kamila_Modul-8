<?php 
session_start();
 
// Cek apakah user sudah login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit();
}

require 'config.php';

// ambil data 
$id = $_GET["id"];

$data = query("SELECT * FROM isi WHERE id = $id")[0];

if(isset($_POST["submit"])){
  if (ubah($_POST) > 0 ){
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
          </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tambah Data</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <form action="" method="post">
        <div class="mb-3">
          <input
            type="hidden"
            class="form-control"
            id="id"
            name="id"
            required
            value="<?= $data["id"]; ?>"
          />
        </div>
        <div class="mb-3">
          <label for="nim" class="form-label">Nim</label>
          <input
            type="number"
            class="form-control"
            id="nim"
            name="nim"
            required
            value="<?= $data["nim"]; ?>"
          />
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input
            type="text"
            class="form-control"
            id="nama"
            name="nama"
            required
            value="<?= $data["nama"]; ?>"
          />
        </div>
        <div class="mb-3">
          <label for="dosen" class="form-label">dosen</label>
          <input
            type="text"
            class="form-control"
            id="dosen"
            name="dosen"
            required
            value="<?= $data["dosen"]; ?>"
          />
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <input
            type="text"
            class="form-control"
            id="status"
            name="status"
            required
            value="<?= $data["status"]; ?>"
          />
        </div>
        <div class="mb-3">
          <label for="ket" class="form-label">Keterangan</label>
          <input
            type="text"
            class="form-control"
            id="ket"
            name="ket"
            required
            value="<?= $data["ket"]; ?>"
          />
        </div>
        <div class="mb-3">
          <button
            type="submit"
            id="submit"
            name="submit"
            class="btn btn-primary"
          >
            Ubah Data
          </button>
          <a href="index.php" type="button" class="btn btn-danger  btn">Kembali</a>
        </div>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
