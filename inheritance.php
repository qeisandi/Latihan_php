<?php
class Hewan {
    public function bersuaraumum() {
        echo "Hewan mengeluarkan suara umum <br>";
    }
}
class Kucing extends Hewan {
    public function bersuara() {
        echo "Kucing mengeluarkan suara meong <br>";
    }
}

$kucing = new Kucing();
$kucing->bersuaraumum();
$kucing->bersuara();