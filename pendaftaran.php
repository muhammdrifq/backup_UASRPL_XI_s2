<?php
    class Pendaftaran extends Database
    {
        // Menampilkan data PENDAFTARAN ke index.php
        public function index()
        {
            $data_pendaftaran = mysqli_query($this->koneksi,
            "SELECT pendaftaran.id, pendaftaran.kode_pendaftaran, pendaftaran.nama, pendaftaran.tanggal_lahir,
            pendaftaran.tempat_lahir, pendaftaran.jenis_kelamin, pendaftaran.agama, jurusan.jurusan
            from jurusan
            join pendaftaran
            on jurusan.id = pendaftaran.id_jurusan");

            return $data_pendaftaran;
        }

        public function create($kode_pendaftaran,$nama, $tanggal_lahir, $tempat_lahir, $jenis_kelamin, $agama, $id_jurusan)
        {
            mysqli_query($this->koneksi,
                    "INSERT INTO pendaftaran values
                    (null, '$kode_pendaftaran', '$nama', '$tanggal_lahir', '$tempat_lahir', '$jenis_kelamin', '$agama', '$id_jurusan')"
                );
        }

        // memilih data PENDAFTARAN yang akan diubah
        public function edit($id)
        {
            
            $data_pendaftaran = mysqli_query($this->koneksi, 
                        "select * from pendaftaran where id='$id'"
                    );

            return $data_pendaftaran;
        }
        // merubah data PENDAFTARAN
        public function update($id, $kode_pendaftaran,$nama, $tanggal_lahir, $tempat_lahir, $jenis_kelamin, $agama, $id_jurusan)
        {
            mysqli_query(
                $this->koneksi,
                "update pendaftaran set kode_pendaftaran='$kode_pendaftaran', nama='$nama', tanggal_lahir='$tanggal_lahir',
                tempat_lahir='$tempat_lahir', jenis_kelamin='$jenis_kelamin', agama='$agama', id_jurusan='$id_jurusan'
                where id='$id'"
            );
        }

        // Menampilkan data PENDAFTARAN berdasarkan id
        public function show($id)
        {
           $data_pendaftaran = mysqli_query(
                $this->koneksi,
                "SELECT pendaftaran.id,
                pendaftaran.kode_pendaftaran,
                pendaftaran.nama,
                pendaftaran.tanggal_lahir,
                pendaftaran.tempat_lahir,
                pendaftaran.jenis_kelamin,
                pendaftaran.agama, 
                jurusan.jurusan
            from jurusan
            join pendaftaran
            on jurusan.id = pendaftaran.id_jurusan where id='$id'"
           );
           return $data_pendaftaran;

        }

        // Menghapus data PENDAFTARAN
        public function delete($id)
        {
            mysqli_query(
                $this->koneksi,
                "delete from pendaftaran where id='$id'"
            );
        }
    }
?>