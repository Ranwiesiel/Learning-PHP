<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 80000);

echo $produk1->getLabel();
echo "<hr>";

$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 10000);
$produk3 = new Produk();

echo "komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";
echo "Random : ". $produk3->getLabel();