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
    $qry_get_buku=mysqli_query($koneksi,"select * from buku where id_buku = '".$_GET['id_buku']."'");
    $dt_buku=mysqli_fetch_array($qry_get_buku);
    ?>
    <h3>Ubah Buku</h3>
    <form action="proses_ubah_buku.php" method="post">
        <div class="mb-3">
        <input type="hidden" name="id_buku" value="<?=$dt_buku['id_buku']?>">
                Nama Buku :
                <input type="text" class="form-control" name="nama_buku"  value="<?=$dt_buku['nama_buku']?>" placeholder="Masukan Nama Buku" required>
            </div>
            <div class="mb-3">
                Pengarang :
                <input type="text" class="form-control" name="pengarang"  value="<?=$dt_buku['pengarang']?>" placeholder="Masukan Pengarang" required>
            </div>
            <div class="mb-3">
                Deskripsi :
                <input type="text" class="form-control" name="deskripsi"  value="<?=$dt_buku['deskripsi']?>" placeholder="Masukan Deskripsi Buku" required>
            </div>
            <div class="mb-3">
                Foto :
                <input type="file" name="foto" value="" class="form-control" value="<?=$dt_buku['foto']?>" required>
            </div>
            <input type="submit" name="simpan" value="Ubah Buku" class="btn btn-primary">
    <form>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>