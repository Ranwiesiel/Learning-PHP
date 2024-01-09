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

    public function getInfo(){
        return "- 100 hal";
    }
}


class CetakInfoProduk {
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp {$produk->harga})";
        return $str;
    }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 80000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 10000);
$infoProduk1 = new CetakInfoProduk();
echo "Komik : {$infoProduk1->cetak($produk1)} {$produk1->getInfo()}";
