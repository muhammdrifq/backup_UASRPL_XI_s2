<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Show Pendaftaran | PPDB</title>
  </head>
  <body>
       <!-- NAVBAR -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://smkassalaambandung.sch.id/" target="_blank">
            <div class="logo-image">
                <img src="../assets/LOGO SMK.png" class="img-fluid">
            </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarDark">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../main/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../jurusan/index.php">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

        
        <!-- CARDs -->
        <div class="container">
        <div class="card">
            <div class="card-header">
            <center><h2>Data Pendaftaran</h2></center>
            </div>
            <div class="card-body">
            <?php
                include '../database.php';
                $tb_pendaftaran = new Pendaftaran();
                foreach ($tb_pendaftaran->edit($_GET['id']) as $data) {
                    $id = $data['id'];
                    $kode_pendaftaran = $data['kode_pendaftaran'];
                    $nama = $data['nama'];
                    $tanggal_lahir = $data['tanggal_lahir'];
                    $tempat_lahir = $data['tempat_lahir'];
                    $jenis_kelamin = $data['jenis_kelamin'];
                    $agama = $data['agama'];
                    $id_jurusan = $data['id_jurusan'];
                }
            ?>
            <form action="" method="p">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Pendaftaran</label> 
                        <input type="text" class="form-control" name="kode_pendaftaran" value="<?php echo $kode_pendaftaran; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <input type="text" class="form-control" name="agama" value="<?php echo $agama; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <select name="id_jurusan" class="form-control" disabled>
                            <?php
                            
                            $tb_jurusan = new Jurusan();
                            $no = 1;
                            foreach ($tb_jurusan->index() as $data){
                            ?>
                            <option value="<?php echo $data['id'] ?>"><?php echo $data['jurusan']?></option>
                            <?php } ?>
                        </select>
                    </div>
                </form>
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>