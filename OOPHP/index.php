<?php

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;
           
    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shounen Jump";
$produk1->harga = "80000";

echo $produk1->getLabel();
echo "<hr>";

$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->penulis = "Neil Druckmann";
$produk2->penerbit = "Sony Computer";
$produk2->harga = "100000";

echo "komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();