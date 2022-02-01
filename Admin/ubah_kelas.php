<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
    include "koneksi.php";
    $qry_get_kelas=mysqli_query($koneksi,"select * from kelas where id_kelas = '".$_GET['id_kelas']."'");
    $dt_kelas=mysqli_fetch_array($qry_get_kelas);
    ?>
    <h3>Ubah kelas</h3>
    <form action="proses_ubah_kelas.php" method="post">
        <div class="mb-3">
        <input type="hidden" name="id_kelas" value="<?=$dt_kelas['id_kelas']?>">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" name="nama_kelas"  value="<?=$dt_kelas['nama_kelas']?>" placeholder="Masukan Nama Kelas" required>
            </div>
            <div class="mb-3">
                <label for="kelompok" class="form-label">Kelompok</label>
                <input type="text" class="form-control" name="kelompok"  value="<?=$dt_kelas['kelompok']?>" placeholder="Masukan Kelompok" required>
            </div>
            <input type="submit" name="simpan" value="Ubah Kelas" class="btn btn-primary">
    <form>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>