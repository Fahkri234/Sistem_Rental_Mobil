<?php 
require "../functions.php";
// ambil id dari Url
$id = $_GET["id"];

$costumer = query ($conn, "SELECT * FROM tb_costumer WHERE id_costumer=$id")[0];

if (isset($_POST["submit"])) {
    if (ubahCostumer ($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'data-costumer.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Diubah!');
                document.location.href = 'data-costumer.php';
            </script>
        ";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambahkan Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    
<div class="container">
    <!-- form tambah data  -->
    <form action="" method="post" enctype="multipart/form-data">
      <div class="card mt-4">
        <div class="card-header text-center bg-dark text-white">
        Form Edit Costumer
        </div>
        <div class="card-body">
          <div class="mb-3 text-left">
            <input type="hidden" name="id-costumer" value="<?= $costumer["id_costumer"] ?>">
          </div>
          <div class="mb-3 text-left">
            <label for="nama-costumer" class="form-label ">Nama Costumer</label>
            <input type="text" name="nama-costumer" value="<?= $costumer["nama_costumer"] ?>" class="form-control" id="nama-costumer" placeholder="Masukan Nama Anda" required>
          </div>
          <div class="mb-3">
            <label for="alamat-costumer" class="form-label">Alamat Costumer</label>
            <input type="text" name="alamat-costumer" value="<?= $costumer["alamat_costumer"] ?>" class="form-control" id="alamat-costumer" placeholder="Masukan Alamat Costumer" required>
          </div>
          <div class="mb-3">
            <label for="nomer-telepon" class="form-label">Nomer Telepon</label>
            <input type="text" name="nomer-telepon" value="<?= $costumer["nomer_telepon"] ?>" class="form-control" id="nomer-telepon" placeholder="Masukan Nomer Telepon" required>
          </div>
          <div class="mb-3 text-left">
            <label for="jenis-kelamin" class="form-label ">Jenis Kelamin</label>
            <select class="form-select" name="jenis-kelamin" value="<?= $costumer["jenis_kelamin"] ?>" aria-label="Default select example" id="jenis-kelamin" required>
              <option selected>Pilih Jenis Kelamin</option>
              <option value="1">Pria</option>
              <option value="2">Wanita</option>
            </select>
          </div>
        </div>
        <div class="card-footer bg-dark mb-4"></div>

        <!-- button add & delete -->
        <div class="text-center mb-4">
          <a href="data-costumer.php">
            <button type="submit" name="submit" class="btn btn-success">Save</button>
          </a>
          <a href="data-costumer.php">
            <button type="button" class="btn btn-danger">Batal</button>
          </a>
        </div>
      </div>
    </form>
    <!-- form tambah data  -->
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>

