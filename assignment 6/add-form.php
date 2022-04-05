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
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background: #E9ECEB;
            padding: 0 10px;
        }
        .container{
            max-width: 500px;
            width: 100%;
            background: #fff;
            margin: 20px auto;
            padding: 30px;
            box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="py-4 text-center">
        <img class="mb-4 d-block mx-auto" src="assets/logo unsika.png" alt="Unsika Logo" width="120" height="120">
        <h2>eCampus Form</h2>
        <p class="lead">Silahkan diisi lengkap dan benar identitas Anda!</p>    
        </div>

        <div class="container-form">
            <form action="domain/post_data.php" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="npm" class="form-label">NPM</label>
                    <input type="text" name="npm" id="npm" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="mb-4">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-select">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Operasi">Sistem Informasi</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control"></textarea>
                </div>
                <div class="mb-4">
                    <label for="mk" class="form-label">Mata Kuliah</label>
                    <select name="mk" id="mk" class="form-select">
                        <option value='MK1'>Basis Data</option>
                        <option value='MK2'>Pemrograman Berbasis Web</option>
                        <option value='MK3'>Algoritma dan Struktur Data</option>
                        <option value='MK4'>Kajian Jurnal Informatika</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="sks" class="form-label">Jumlah SKS</label>
                    <select name="sks" id="sks" class="form-select">
                        <option value='3'>3</option>
                    </select>
                </div>
                <button type="submit" name="add" class="btn btn-primary mb-4">Add</button>
            </form>
        </div>
    </div>
    
    

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>