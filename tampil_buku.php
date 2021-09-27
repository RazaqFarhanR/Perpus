<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
        <form action="tampil_kelas.php" method="post">
            <input type="text" name="cari" class="form-control" 
            placeholder="Cari berdasarkan ID/Nama Kelas">
        </form>
        <H1 class="text-center">DATA BUKU<H1>
        <table class="table table-hover table-striped">
        <thead>
          <tr class="text-center">
            <th scope="col">ID BUKU</th>
            <th scope="col">Nama Buku</th>
            <th scope="col">Pengarang</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Foto</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            if (isset($_POST["cari"])) {
                // jika ada keyword penarian
                $cari = $_POST['cari'];
                $query_buku = mysqli_query($koneksi, 
                "SELECT * from buku where id_buku='$cari' or nama_buku like '%$cari%'");
            } else {
                // jika tidak ada keyword pencarian
                $query_buku = mysqli_query($koneksi, "select * from buku");
            }
            
            
            while($data_buku = mysqli_fetch_array ($query_buku)) { ?>
                <tr class="text-center">
                    <td><?php echo $data_buku["id_buku"]; ?></td>
                    <td><?php echo $data_buku["nama_buku"]; ?></td>
                    <td><?php echo $data_buku["pengarang"]; ?></td>
                    <td><?php echo $data_buku["deskripsi"]; ?></td>
                    <td><?php echo $data_buku["foto"]; ?></td>
                    <td><a href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>"class="btn btn-success">Ubah</a>  
                    <a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                <tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>