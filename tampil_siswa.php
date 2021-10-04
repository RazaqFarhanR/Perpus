<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <div class="container">
    <div class="card">
        <div class="card-header">
            <h1>DATA SISWA</h1>
            <form method="POST" action="tampil_siswa.php" class="d-flex">
                <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
        <table class="table table-hover table-striped">
        <thead>
          <tr class="text-center">
            <th scope="col">NO</th>
            <th scope="col">Nama Siswa</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Gender</th>
            <th scope="col">Username</th>
            <th scope="col">Kelas</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <?php
                    include "koneksi.php";
                    if (isset($_POST['cari'])) {
                        $cari = $_POST['cari'];
                        $query_siswa = mysqli_query($koneksi, "select * from siswa s join kelas k on s.id_kelas = k.id_kelas where s.id_siswa = '$cari' or s.nama_siswa like '%$cari%' or s.alamat like '%$cari%' or s.username like '%$cari%'");
                    }
                    else{
                        $query_siswa = mysqli_query($koneksi, "select * from siswa s join kelas k on s.id_kelas = k.id_kelas");
                    }
                    $no=0;
                    while($data_siswa = mysqli_fetch_array($query_siswa)){ $no++?>
                    <tr class="text-center">
                    <td><?php echo $no?></td>
                    <td><?php echo $data_siswa["nama_siswa"]; ?></td>
                    <td><?php echo $data_siswa["tanggal_lahir"]; ?></td>
                    <td><?php echo $data_siswa["alamat"]; ?></td>
                    <td><?php echo $data_siswa["gender"]; ?></td>
                    <td><?php echo $data_siswa["username"]; ?></td>
                    <td><?php echo $data_siswa["nama_kelas"]; ?></td>
                    <td><a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>"class="btn btn-success">Ubah</a>  
                    <a href="hapus_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

                <tr>
            <?php
            }
            ?>
        </tbody>
        </table>
        </table>
            <a href="tambah_siswa.php" type="button" class="btn btn-primary">Tambah Siswa</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>