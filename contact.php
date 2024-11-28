<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>STICKUSTEAK - Contact</title>
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
      <h1 class="mb-0 text-primary text-uppercase">
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
        <a href="articles.php" class="nav-item nav-link">Articles</a>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
          <div class="dropdown-menu m-0">
            <a href="price.php" class="dropdown-item">Pricing Plan</a>
            <a href="places.php" class="dropdown-item">Our Branch</a>
            <a href="open.php" class="dropdown-item">Working Hours</a>
          </div>
        </div>
        <a href="contact.php" class="nav-item nav-link active">Contact</a>
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
        Contact
      </h1>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-0">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
          <div class="bg-secondary p-5">
            <p class="d-inline-block bg-dark text-primary py-1 px-4">
              Contact Us
            </p>
            <h1 class="text-uppercase mb-4">
              Have Any Query? Please Contact Us!
            </h1>
            <form action="prosesMailer.php" method="post">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="name" name="name" class="form-control" id="name" placeholder="Your Name" />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="subject" placeholder="Subject"
                      name="subject" />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a message here" id="message"
                      style="height: 100px" name="body"></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                <!-- otacswsqduzxuvjq -->
                  <button class="btn btn-primary w-100 py-3" type="submit" name="sendMail">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="h-100" style="min-height: 400px">
            <iframe class="google-map w-100 h-100"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15861.565938840504!2d106.7650153!3d-6.3433182!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef5dd40e8c79%3A0xb7ade7df050998ea!2sStickusteak%20By%20Chef%20Nats%20SouthCity%20Pondok%20Cabe!5e0!3m2!1sid!2sid!4v1724993041634!5m2!1sid!2sid"
              frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" style="border: 0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

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