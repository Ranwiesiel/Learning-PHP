<?php

// require_once 'App/Produk/InfoProduk.php';
// require_once 'App/Produk/Product.php';
// require_once 'App/Produk/Komik.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/CetakInfoProduk.php';

spl_autoload_register(function($class){
    require_once __DIR__ . '/Produk/' . $class . '.php';
});