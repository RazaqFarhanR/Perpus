<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "navbar.php";
    ?>
<div class="container">
        <form action="tampil_siswa.php" method="post">
            <input type="text" name="cari" class="form-control" 
            placeholder="Cari berdasarkan ID/Nama Kelas">
        </form>
        <H3 class="text-center">DATA SISWA<H3>
        <table class="table table-hover table-striped">
        <thead>
          <tr>
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
            if (isset($_POST["cari"])) {
                // jika ada keyword penarian
                $cari = $_POST['cari'];
                $query_siswa = mysqli_query($koneksi, 
                "SELECT * from siswa join kelas on kelas.id_kelas=siswa.id_kelas where siswa.id_siswa='$cari' nama_siswa like '%$cari%'");
            } else {
                // jika tidak ada keyword pencarian
                $query_siswa = mysqli_query($koneksi, "select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
            }
            
            $no=0;
            while($data_siswa = mysqli_fetch_array($query_siswa)) {$no++;?>
                <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $data_siswa["nama_siswa"]; ?></td>
                    <td><?php echo $data_siswa["tanggal_lahir"]; ?></td>
                    <td><?php echo $data_siswa["alamat"]; ?></td>
                    <td><?php echo $data_siswa["gender"]; ?></td>
                    <td><?php echo $data_siswa["username"]; ?></td>
                    <td><?php echo $data_siswa["nama_kelas"]; ?></td>
                    <td><a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>"class="btn btn-success">Ubah</a>  
                    <a href="hapus.php?id_siswa=<?=$data_siswa['id_siswa']?>"
                    onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>

                <tr>
            <?php
            }
            ?>
        </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script
</body>
</html>