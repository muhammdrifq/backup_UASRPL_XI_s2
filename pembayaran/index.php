<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style.css">
    <title>Page Pendaftaran | PPDB</title>
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
                        <a class="nav-link active" aria-current="page" href="../pendaftaran/index.php">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Back</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>

        

        <center><h2>Pembayaran</h2></center>
        <!-- CARDs -->
        <div class="container">
        <div class="card">
            <div class="card-header">
                
                <center><a href="create.php" class="btn btn-primary">Tambah Data</a></center>
            </div>
            <div class="card-body">
                <!-- TABLE DOSEN -->
                <table border="3">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col"><center>Kode Pembayaran</center></th>
                        <th scope="col"><center>Nama</center></th>
                        <th scope="col"><center>Tanggal Pembayaran</center></th>
                        <th scope="col"><center>Uang Pendaftaran</center></th>
                        <th scope="col"><center>Uang Seragam</center></th>
                        <th scope="col"><center>Uang Kegiatan</center></th>
                        <th scope="col"><center>Total Pembayaran</center></th>
                        <th scope="col" colspan="3"><center>Action</center></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                            include'../database.php';
                            $tb_pembayaran =  new Pembayaran();
                            $no = 1;
                            foreach ($tb_pembayaran->index() as $data){
                        ?>
                        <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $data['kode_pembayaran'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['tanggal_pembayaran'] ?></td>
                        <td><?php echo $data['uang_pendaftaran'] ?></td>
                        <td><?php echo $data['uang_seragam'] ?></td>
                        <td><?php echo $data['uang_kegiatan'] ?></td>
                        <td><?php echo $data['total_pembayaran'] ?></td>

                        <td>
                            <button href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Show</button>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <form action="proses.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                <input type="hidden" name="aksi" value="delete">
                                <!-- BUTTON DELETE -->
                                <button type="submit" class="btn btn-danger" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                    Delete
                                </button>
                           </form>
                        </td>
                        </tr>
                      <?php
                            }
                        ?>
                    </tbody>
                </table>
               
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




