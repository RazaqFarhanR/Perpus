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
    <div class="container">
        <h3 class="text-center">Tambah Siswa<h3>
            <form action = "proses_tambah_siswa.php" method="post">
                Nama Siswa :
                <input type = "text" name="nama_siswa" value="" class="form-control">
                Tanggal Lahir :
                <input type = "date" name="tanggal_lahir" value="" class="form-control">
                Gender :
                <select name="gender" class="form-control">
                    <option></option>
                    <option value="L">laki-laki</option>
                    <option value="P">perempuan</option>
                </select>
                Alamat :
                <textarea name="alamat" value="" class="form-control" rows="4"></textarea>
                Kelas :
                <select name="id_kelas" class="form-control">
                    <option></option>
                    <?php
                    include "koneksi.php";
                        $qry_kelas=mysqli_query($koneksi,"select * from kelas");
                            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                            echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';
                    }
                    ?>
                    </select>
                Username :
                <input type="text" name="username" value="" class="form-control">
                Password :
                <input type="password" name="password" value="" class="form-control">
                <input type="submit" name="simpan" value="Tambah Siswa" class="btn btn-primary">
            <form>    
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>