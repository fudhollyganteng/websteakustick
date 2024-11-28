<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: ./login.php"); // Redirect to login page
    exit();
}


require "../function.php";

$id = $_GET['id'];

$image = query("SELECT * FROM place WHERE id = $id")[0];


if (isset($_POST['update'])) {
    if (update($_POST) > 0) {
        echo "<script>
            alert('data berhasil di update');
            document.location.href='./index.php';
          </script>";
    } else {
        echo "<script>
            alert('data gagal di update');
            document.location.href='./index.php';
          </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Index for admin, <?= htmlspecialchars($_SESSION['username']); ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <link href="../img/logo.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Link bootstrap collapse -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet" />
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                Ini halaman Cabang
            </h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- articles Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">
                    Branch
                </p>
            </div>
            <div class="row g-4 mb-5 text-center justify-content-center">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $image['id'];?>">
                        <input type="hidden" name="imageLama" value="<?= $image['id'];?>">
                        <div class="form-group text-start">
                            <label class="mt-4" style="color: #bf9b44;">Alamat</label>
                            <textarea class="form-control mt-1" name="alamat" placeholder="Masukkan Alamat Siswa"
                                rows="4"><?= $image['alamat']; ?></textarea>
                        </div>

                        <div class="form-group text-start">
                            <label class="mt-4" style="color: #bf9b44;">Deskripsi</label>
                            <textarea class="form-control mt-1" name="deskripsi" placeholder="Masukkan deskripsi Siswa"
                                rows="4"><?= $image['deskripsi']; ?></textarea>
                        </div>

                        <div class="form-group text-center">
                            <p class="mt-4" style="color: #bf9b44;">
                                Image Deminsion harus 500x600 jika tidak tampilan akan menjadi buruk
                            </p>
                        </div>

                        <div class="form-group text-start mb-5">
                            <label style="color: #bf9b44;">Image</label><br>
                            <img class="mt-4" style="color: #bf9b44;" width="300px" src="../img/<?= $image['image'];?>">
                            <input class="mt-4" style="color: #bf9b44;" type="file" name="image"
                                value="<?= $image['image'];?>">
                        </div>

                        <button type="submit" class="btn btn-outline-primary update" name="update">UPDATE</button>

                    </form>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">
                    <a href="tambahCabang.php">Add +</a>
                </p>
            </div>
        </div>
        <a href="./index.php" class="btn btn-outline-primary mt-5">Back</a>
    </div>
    <!-- articles End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>