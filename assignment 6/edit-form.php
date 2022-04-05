<?php
include('data/koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM krs WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <?php
                if(isset($_GET['$message'])){
                    $message = $_GET['$message'];
                ?>
                <div class="alert alert-danger my-4"><?= $message ?></div>
                <?php
                }
                ?>
                <div class="card border-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2>Edit Data Mahasiswa</h2>
                            <a href="list.php" class="btn btn-primary">List Mahasiswa</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="domain/edit_data_by_id.php" method="POST">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <div class="mb-4">
                                <label for="id" class="form-label">NPM</label>
                                <input type="text" name="id" id="id" class="form-control" value="<?php echo $data['id'] ?>">
                            </div>
                            <div class="mb-4">
                                <label for="npm" class="form-label">NPM</label>
                                <input type="text" name="npm" id="npm" class="form-control" value="<?php echo $data['mahasiswa_npm'] ?>">
                            </div>
                            <div class="mb-4">
                                <label for="mk" class="form-label">Mata Kuliah</label>
                                <select name="mk" id="mk" class="form-select" >
                                    <option value="MK1" <?=$data['matakuliah_kodemk'] == "MK1" ? "Selected" : ""?>>Basis Data</option>
                                    <option value="MK2" <?= $data['matakuliah_kodemk'] == "MK2" ? "Selected" : "" ?>>Pemrograman Berbasis Web</option>
                                    <option value="MK3" <?= $data['matakuliah_kodemk'] == "MK3" ? "Selected" : "" ?>>Algoritma dan Struktur Data</option>
                                    <option value="MK4" <?= $data['matakuliah_kodemk'] == "MK4" ? "Selected" : "" ?>>Kajian Jurnal Informatika</option>
                                </select>
                            </div>
                            <button type="submit" name="edit" class="btn btn-success">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>