<?php
class Motor 
{
  public $merk;
  public $bensin;
  public $topSpeed;
  public $cc;

  public function __construct($merk, $bensin, $topSpeed, $cc)
  {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
  }
  public function jalan($jarak) //kilometer
  {
        $jalan = $jarak / 30;
        $waktu = $jarak / $this->topSpeed;
        $this->bensin -= $jalan;
        
        echo "Motor <p>$this->merk $this->cc CC</b> telah berjalan sepanjang <b>$jarak km</b>
        dengan kecepatan<b>$this->topSpeed km/h</b>, sampai ke tempat tujuan dengan waktu <b>$waktu jam</b>
        dan bensin yang tersisa yaitu <b>$this->bensin Liter</b> <hr><br>";
    }
}

$motor = new Motor('NMAX', 3, 400, 350);
$motor->Jalan(30);

$motor2 = new Motor('PCX', 10, 400, 350);
$motor2->Jalan(20);

$motor3 = new Motor('Vario', 1, 500, 250);
$motor3->Jalan(10);

$motor4 = new Motor('Vixion', 2, 250, 500);
$motor4->jalan(60);

?>