<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Project 5</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- link bootstrap untuk style warna pada navbar -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
  </head>
  <body>

    <!-- Membuat Navbar dan Header-->
    <nav class="navbar bg-primary fixed-top">
      <div class="container-fluid">
        <div>
            <!-- membuat header -->
            <span class="navbar-brand mb-0 h1">PBW</span>
            <a class="navbar-brand" href="#">Selamat datang, Syafira Putri Kamila</a>
        </div>
        <!-- membuat fungsi navbar -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <!-- untuk membuat icon navbar yang garis 3 -->
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Praktikum PBW A</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>

          <!-- untuk membuat content -->
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <b><a class="nav-link active" aria-current="page" href="">Home</a></b>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Daftar Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Informasi Tugas</a>
              </li>
            </ul>

            <!-- untuk membuat tombol logout  -->
            <div class="d-grid gap-2">
              <button class="btn btn-danger" type="button">Logout</button>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <!-- Membuat card menggunakan fitur content di Bootstrap -->
    <section class="mt-5">
        <div class="content position-relative" style="padding-top: 20px">
          <div class="row">
            <h2 class="text-center">
              WEBSITE PRAKTIKUM 
              <p>PEMROGRAMAN BERBASIS WEB</p>
            </h2>

            <!-- isi card nya -->
        <div class="row align-items-center mt-4">
            <div class="col-4">
                <div class="card mx-auto" style="width: 85%">
                <img src="toga nendo.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Toga Himiko</h5>
                    <p class="card-text">Himiko Toga adalah villain dalam manga dan anime My Hero Academia. 
                    Karakternya digambarkan sebagai sosok yang menyeramkan karena ia bisa tersenyum setelah membunuh seseorang.</p></p>
                </div>
                </div>
              </div>

            <div class="col-4">
                <div class="card mx-auto" style="width: 85%">
                <img src="anya forger.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Anya Forger</h5>
                    <p class="card-text">Anya Forger adalah anak angkat dari Loid Forger dan Yor Forger dalam serial animasi Spy x Family 
                        yang memiliki kemampuan telepati. 
                        Dia juga seorang siswi di Eden Academy yang merupakan bagian dari Cecile Hall.</p>
                </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card mx-auto" style="width: 85%">
                    <img src="levi nendo.jpeg" class="card-img-top" alt="">
                    <div class="card-body">
                    <h5 class="card-title">Levi Ackerman</h5>
                    <p class="card-text">Levi merupakan salah satu karakter paling populer dalam serial Attack on Titan.
                        Meskipun memiliki tubuh yang pendek, tetapi squad captain di
                        Special Operation Squad dan memiliki kemampuan yang tidak dapat diremehkan.</p>
            </div>
        </div>
    </div>
</div>
</section>


  </body>
</html>