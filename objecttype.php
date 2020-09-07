<?php  
class produk{
  public $namaCHR,
         $stat,
         $coin;
  public function nama(){
    return "$this->namaCHR, $this->stat, $this->coin";
  }
  public function __construct($namaCHR="nama character", $stat="stat", $coin=0){
    $this->namaCHR = $namaCHR;
    $this->stat = $stat;
    $this->coin = $coin;
  }
}

class cetakinfoproduk{
    public function cetakInfo(produk $produk){
        $str="{$produk->namaCHR}, {$produk->nama()}";
        return $str;
    }
}

$produk1 = new produk("Mark","lvl 420",420000000);
$produk2 = new produk("Anggi","lvl 70",7000000);
$produk3 = new produk("Angel","lvl 80",20000000);
$produk4 = new produk("Arya","lvl 60",15000000);
$produk5 = new produk("Alpin","lvl 69",12000000);
$infoProduk = new cetakinfoproduk();

echo "Nama character: " . $produk1->nama();
echo "<br>";
echo "Nama character: " . $produk2->nama();
echo "<br>";
echo "Nama character: " . $produk3->nama();
echo "<br>";
echo "Nama character: " . $produk4->nama();
echo "<br>";
echo "Nama character: " . $produk5->nama();
echo "<br>";
echo $infoProduk->cetakInfo($produk1);
?>
