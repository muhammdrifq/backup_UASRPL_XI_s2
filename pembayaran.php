<?php
    class Pembayaran extends Database
    {
        // Menampilkan data dosen ke index.php
        public function index()
        {
            $datapembayaran = mysqli_query($this->koneksi,
            "SELECT pembayaran.id, pembayaran.kode_pembayaran, pembayaran.tanggal_pembayaran, pembayaran.uang_pendaftaran, 
            pembayaran.uang_seragam, pembayaran.uang_kegiatan, pembayaran.total_pembayaran, pendaftaran.nama
            from pendaftaran
            join pembayaran
            on pendaftaran.id = pembayaran.id_pendaftaran");
            return $datapembayaran;
        }

        public function create($kode_pembayaran,$tanggal_pembayaran, $uang_pendaftaran, $uang_seragam, $uang_kegiatan,
        $total_pembayaran, $id_pendaftaran)
        {
            mysqli_query($this->koneksi,
                    "insert into pembayaran values (null, '$kode_pembayaran','$tanggal_pembayaran', '$uang_pendaftaran', 
                    '$uang_seragam', '$uang_kegiatan', '$total_pembayaran', '$id_pendaftaran')"
                );
        }

        // memilih data dosen yang akan diubah
        public function edit($id)
        {
            
            $datapembayaran = mysqli_query($this->koneksi, 
                        "select * from pembayaran where id='$id'"
                    );

            return $datapembayaran;
        }
        // merubah data dosen
        public function update($id,$kode_pembayaran,$tanggal_pembayaran, 
        $uang_pendaftaran, $uang_seragam, $uang_kegiatan,
        $total_pembayaran, $id_pendaftaran)
        {
            mysqli_query(
                $this->koneksi,
                "update jurusan set kode_pembayaran='$kode_pembayaran', tanggal_pembayaran='$tanggal_pembayaran',
                uang_pendaftaran='$uang_pendaftaran', uang_seragam='$uang_seragam', uang_kegiatan='$uang_kegiatan',
                total_pembayaran='$total_pembayaran' id_pendaftaran='$id_pendaftaran' where id='$id'"
            );
        }

        // Menampilkan data dosen berdasarkan id
        public function show($id)
        {
           $datapembayaran = mysqli_query(
                $this->koneksi,
                "SELECT pembayaran.id, pembayaran.kode_pembayaran, pembayaran.tanggal_pembayaran, pembayaran.uang_pendaftaran, 
                pembayaran.uang_seragam, pembayaran.uang_kegiatan, pembayaran.total_pembayaran, pendaftaran.nama
                from pendaftaran
                join pembayaran
                on pendaftaran.id = pembayaran.id_pendaftaran where id='$id'"
           );
           return $datapembayaran;
        }

        // Menghapus data dosen
        public function delete($id)
        {
            mysqli_query(
                $this->koneksi,
                "delete from pembayaran where id='$id'"
            );
        }
    }
?>