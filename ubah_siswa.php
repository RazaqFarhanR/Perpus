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
    $qry_get_siswa=mysqli_query($koneksi,"select * from siswa where id_siswa = '".$_GET['id_siswa']."'");
    $dt_siswa=mysqli_fetch_array($qry_get_siswa);
    ?>
    <h3>Ubah Siswa</h3>
    <form action="proses_ubah_siswa.php" method="post">
        <input type="hidden" name="id_siswa" value="<?=$dt_siswa['id_siswa']?>">
        nama siswa :
        <input type="text" name="nama_siswa" value="<?=$dt_siswa['nama_siswa']?>" class="form-control">
        Tanggal Lahir :
        <input type="date" name="tanggal_lahir" value="<?=$dt_siswa['tanggal_lahir']?>" class="form-control">
        Gender:
        <?php
        $arr_gender=array('L'=>'Laki-laki','P'=>'Perempuan');
        ?>
        <select name="gender" class="form-control">
            <option></option>
            <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$dt_siswa['gender']){
                    $selek="selected";
                } else {
                    $selek="";
                }
            ?>
            <option value="<?=$key_gender?>"
            <?=$selek?>><?=$val_gender?></option>
            <?php endforeach?>
        </select>
        Alamat :
            <textarea name="alamat" class="form-control"
        rows="4"><?=$dt_siswa['alamat']?></textarea>
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
            <input type="text" name="username" value="<?=$dt_siswa['username']?>" class="form-control">
        Password :
            <input type="password" name="password" value="" class="form-control">
            <input type="submit" name="simpan" value="Ubah Siswa" class="btn btn-primary">
    <form>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>