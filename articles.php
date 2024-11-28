<?php

require 'function.php';
$data = query('SELECT * FROM tb_artikel');

if (isset($_POST['cari'])) {
  $data = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>STICKUSTEAK - Articles</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />
  <link href="img/logo.png" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem" role="status">
      <span class="sr-only"></span>
    </div>
  </div>
  <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
    data-wow-delay="0.1s">
    <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
      <h1 class="mb-0 text-primary">
        <img src="img/logo.png" alt="" />stickusteak
      </h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.php" class="nav-item nav-link">Home</a>
        <a href="about.php" class="nav-item nav-link">About</a>
        <a href="articles.php" class="nav-item nav-link active">Articles</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
          <div class="dropdown-menu m-0">
            <a href="price.php" class="dropdown-item">Pricing Plan</a>
            <a href="places.php" class="dropdown-item">Our Branch</a>
            <a href="open.php" class="dropdown-item">Working Hours</a>
          </div>
        </div>
        <a href="contact.php" class="nav-item nav-link">Contact</a>
      </div>
      <a href="" class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Appointment<i
          class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
      <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">
        Articles
      </h1>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- articles Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
        <p class="d-inline-block bg-secondary text-primary py-1 px-4">
          Articles
        </p>
        <h1 class="text-uppercase"></h1>
      </div>
      <div class="row g-4">
        <form action="" method="post">
          <div class="search">
            <input type="text" class="search-input" placeholder="Search..." autocomplete="off" name="keyword">
            <button type="submit" class="search-icon" name="cari"><i class="fa fa-search"></i></button>
          </div>
        </form>
        <?php foreach ($data as $row) : ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
            <div class="ps-4">
              <h3 class="text-uppercase mb-3"><?= $row['judul_art'];?></h3>
              <p>
                <?= $row['sub_artikel'];?>
              </p>
            </div>
            <a class="btn btn-square" href="art1.php?id=<?= $row['id'];?>">Read More</a>
          </div>
        </div>
        <?php endforeach; ?>
        <h1 class="text-uppercase" id="error"></h1>
      </div>
    </div>
  </div>
  <!-- articles End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-4 col-md-6">
          <h4 class="text-uppercase mb-4">Get In Touch</h4>
          <div class="d-flex align-items-center mb-2">
            <div class="btn-square bg-dark flex-shrink-0 me-3">
              <span class="fa fa-map-marker-alt text-primary"></span>
            </div>
            <span>Southcity Hive 1, Jl. Raya Southcity Utara No.5, Pd. Cabe Udik, Kec. Pamulang, Kota Tangerang Selatan,
              Banten 15418</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <div class="btn-square bg-dark flex-shrink-0 me-3">
              <span class="fa fa-phone-alt text-primary"></span>
            </div>
            <span>+62 812-9090-8072</span>
          </div>
          <div class="d-flex align-items-center">
            <div class="btn-square bg-dark flex-shrink-0 me-3">
              <span class="fa fa-envelope-open text-primary"></span>
            </div>
            <span>info@example.com</span>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <h4 class="text-uppercase mb-4">Quick Links</h4>
          <a class="btn btn-link" href="index.php" s>Home</a>
          <a class="btn btn-link" href="about.php">About</a>
          <a class="btn btn-link" href="articles.php">Articles</a>
          <a class="btn btn-link" href="contact.php">Contact</a>
        </div>
        <div class="col-lg-4 col-md-6">
          <h4 class="text-uppercase mb-4">Newsletter</h4>
          <div class="d-flex pt-1 m-n1">
            <a class="btn btn-lg-square btn-dark text-primary m-1" href="https://www.facebook.com/StickuSteak/"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn btn-lg-square btn-dark text-primary m-1" href="https://www.instagram.com/stickusteak.id/"><i
                class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col text-center">
            &copy; <a class="border-bottom" href="#">stickusteak.id</a>, All
            Right Reserved.
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>