<?php

class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

//$produk1 = new Produk();
//$produk1->judul = "naruto";
//var_dump($produk1);

//$produk2 =  new Produk();
//$produk2->judul = "uncharted";
//$produk2->tambahproperty = "hahaha";
//var_dump($produk2->judul)

$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "masashi kishimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = 30.000;


$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "neil druckmann";
$produk4->penerbit = "sony computer";
$produk4->harga = 250000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();

?>