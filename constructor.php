<?php

use Produk as GlobalProduk;

class Produk {
    public  $judul ,
            $penulis ,
            $penerbit ,
            $harga ;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

}


$produk1 = new Produk("naruto", "masashi kishimoto", "shonen jump", 30.000);
$produk2 = new Produk("uncharted", "neil druckmann", "sony computer", 250000);
$produk3 = new Produk("Dragon ball");

echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);

?>