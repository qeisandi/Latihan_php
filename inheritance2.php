<?php
class MahasiswaBaru {
    public $nama,
           $nim,
           $jurusan;
    public function matkulbaru() {
        return "Informatika Lanjutan";
    }
}
class MahasiswaLama extends MahasiswaBaru {
    public $skripsi = false;

    public function judulskripsi() {
        $this->skripsi = true;
        return "Judul Skripsi: Analisis Algoritma Sorting"; 
    }
}

$info = new MahasiswaLama();

echo $info->matkulbaru();
echo "<br>";
echo $info->judulskripsi();