<?php include('domain/get_data.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
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
                if(isset($_GET['message'])){
                    $message = $_GET['message'];
                ?>
                <div class="alert alert-seccess my-4"><?= $message ?></div>
                <?php
                }
                ?>

                <div class="card border-0">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2>List Mahasiswa</h2>
                            <a href="add-form.php" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Mata Kuliah</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!isset($query)) {
                                    echo "Belum ada yang mengisi form";
                                } else {
                                    while ($row = mysqli_fetch_assoc($run)){
                                        echo '<tr>';
                                        echo '<td>' . $row['id'] . '</td>';
                                        echo '<td>' . $row['nama'] . '</td>';
                                        echo '<td>' . $row['nama_mk'] . '</td>';
                                        echo '<td>' . "<span style='color:palevioletred;font-weight:bolder;'>".$row['nama']."</span>". ' Mengambil Mata Kuliah ' . "<span style='color:palevioletred;font-weight:bolder;'>" . $row['nama_mk'] ."</span>". " (".$row['jumlah_sks'] . ' SKS)' . '</td>'; 
                                        echo '<td><a href="edit-form.php?id=' . $row['id'] . '">' . '<button class="btn btn-success btn-sm"> <i class="fa fa-edit"></i> Edit </button></a>' . '<a href="delete.php?id=' . $row['id'] . '"> ' . '<button class="btn btn-danger btn-sm"> <i class="fa fa-edit"></i> Delete </button>' . '</td>';
                                        echo '</tr>';
                                    }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>