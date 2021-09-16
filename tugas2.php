<?php
//class
class Hewan {

//access modifiers
  public $nama;
  public $warna;

//construct
  public function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna; 
  }

//destruct
  function __destruct() {
    echo "Hewan ini bernama {$this->nama}."; 
    echo "<br>";
  }
 
  public function intro() {
    echo "Hewan ini bernama {$this->nama} dan mempunyai warna {$this->warna}."; 
    echo "<br>";
  }
}

//inheritance
class Koala extends Hewan {
  public function message() {
    echo "Saya memiliki hewan peliharaan. "; 
    echo "<br>";
  }
}

//static method
class greeting {
  public static function welcome() {
    echo "Nama hewannya adalah koala. ";
    echo "<br>";
  }
}

//static properties
class umur {
  public static $value = 12;
}

$koala = new Koala("koala", "hitam");
$koala->message();
$koala->intro();

greeting::welcome();

echo umur::$value;

//iterable
function getIterable():iterable {
  return [" adalah", " umur"." hewan."];
}

$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}

//interface
interface Makanan {
  public function jenisKelamin();
}

class Kucing implements Makanan {
  public function jenisKelamin() {
    echo "<br>";
    echo "Kucing ini memiliki jenis kelamin jantan";
  }
}

class Gajah implements Makanan {
  public function jenisKelamin() {
    echo ", gajah ini memiliki jenis kelamin betina. ";
    echo "<br>";
  }
}

$kucing = new Kucing();
$gajah = new Gajah();
$animals = array($kucing, $gajah);

foreach($animals as $animal) {
  $animal->jenisKelamin();
}
?>
