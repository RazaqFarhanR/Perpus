<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link" href="tambah_kelas.php">Tambah Kelas</a>
            <a class="nav-link" href="tambah_siswa.php">Tambah Siswa</a>
            <a class="nav-link" href="tambah_buku.php">Tambah Buku</a>
            <a class="nav-link" href="tampil_siswa.php">Data Siswa</a>
            <a class="nav-link" href="tampil_kelas.php">Data Kelas</a>
            <a class="nav-link" href="tampil_buku.php">Data Buku</a>
            </div>
        </div>
        </div>
    </nav>
</head>
<body>
<div class="container">
        <h3 class="text-center">Tambah Buku<h3>
            <form action = "proses_tambah_buku.php" method="post">
                Nama Buku :
                <input type = "text" name="nama_buku" value="" class="form-control">
                Pengarang :
                <input type = "text" name="pengarang" value="" class="form-control">
                Deskripsi :
                <input type = "text" name="deskripsi" value="" class="form-control">
                Foto :
                <input type="file" name="foto" value="" class="form-control">

                <input type="submit" name="simpan" value="Tambah Buku" class="btn btn-primary">
            <form>    
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>