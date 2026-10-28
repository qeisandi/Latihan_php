<?php
class Hewan {
    public function bersuaraumum() {
        echo "Hewan mengeluarkan suara umum <br>";
    }
}
#inheritance , gunanya untuk membuat class baru yang 
#mewarisi properti dan method dari class induk. Dengan inheritance, 
#kita dapat membuat class baru yang memiliki semua fitur dari class induk,
#serta menambahkan fitur tambahan atau mengubah perilaku dari method yang diwarisi.
class Kucing extends Hewan {
    public function bersuara() {
        echo "Kucing mengeluarkan suara meong <br>";
    }
}
#hasil dari inheritance, class Kucing dapat menggunakan method bersuaraumum() dari class Hewan,
$kucing = new Kucing();
$kucing->bersuaraumum();
$kucing->bersuara();