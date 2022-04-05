<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment CRUD</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Style CSS -->
    <style>
        body{
            background:url('assets/unsika.jpg')no-repeat center fixed;
            -webkit-background-size:cover;
            -moz-background-size:cover;
            -o-background-size:cover;
            background-size:cover;
        }
        *{
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">eCampus</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add-form.php">Form Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
            echo  $message;
            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
            echo '</div>';
        }
        ?>

    </div>

    <section id="hero">
        <div class="container">
            <div class="row d-flex align-items-center mb-3">
                <div class="col-sm-12 col-md-6 offset-md- col-lg-6 offset-lg-1 order-lg-last">
                    <img src="assets/hero.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-sm-12 col-md-4 1 col-lg-4 order-12 order-lg-first">
                    <h1>Sistem Informasi eCampus</h1>
                    <p class="mt-4">
                    Universitas Singaperbangsa Karawang merupakan Perguruan Tinggi Negeri Baru yang berlokasi 
                    di Kabupaten Karawang Jawa Barat. Didirikan pada Tanggal 2 Februari 1982 dan kemudian berubah 
                    status menjadi PTN pada Tanggal 6 Oktober 2014.
                    </p>
                    <a href="add-form.php" class="btn btn-dark mt-2">Isi Form</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>