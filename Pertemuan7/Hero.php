<?php
class Hero{
    //Atribut / Properties pada class
    public $name = "Alucard";
    public $health = 3200;
    public $damage = 200;

    // constructor akan dijalankan secaraa otomatis
    public function __construct($name, $health, $damage)
{
    $this->name = $name;
    $this->health = $health;
    $this -> danage = $damage;
 }
 // method untuk menampilkan informasi hero
 public function getInfo()
 {
    echo " Nama Hero  " . $this->name;
    echo "<br> HP: " . $this-> health;
    echo "<br> Damage: " . $this->damage; 
 }
}

// membuat objek dari class Hero
$hero1 = new Hero('Alucard', 3200, 200);
$hero2 = new Hero('Franco', 5000,50);

// memanggil method
$hero1 ->getInfo();


