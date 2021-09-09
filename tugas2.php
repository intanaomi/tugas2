<!DOCTYPE html>
<html>
<body>

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
    echo "<hr>";
  }
 
  public function intro() {
    echo "Hewan ini bernama {$this->nama} dan mempunyai warna {$this->warna}."; 
    echo "<br>";
    echo "<hr>";
  }
}

//inheritance
class Koala extends Hewan {
  public function message() {
    echo "Saya memiliki hewan peliharaan. "; 
    echo "<br>";
    echo "<hr>";
  }
}

//static method
class greeting {
  public static function welcome() {
    echo "Nama hewannya adalah koala. ";
    echo "<br>";
    echo "<hr>";
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
    echo "<hr>";
    echo "Kucing ini memiliki jenis kelamin jantan";
  }
}

class Gajah implements Makanan {
  public function jenisKelamin() {
    echo ", gajah ini memiliki jenis kelamin betina. ";
    echo "<br>";
    echo "<hr>";
  }
}

$kucing = new Kucing();
$gajah = new Gajah();
$animals = array($kucing, $gajah);

foreach($animals as $animal) {
  $animal->jenisKelamin();
}
?>
 
</body>
</html>