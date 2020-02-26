<?php

spl_autoload_register(function($class){
   if(file_exists("entidades/".$class.".php")){
       include "entidades/".$class.".php";
   }
   if(file_exists("interfaces/".$class.".php")){
       include "interfaces/".$class.".php";
   }
});

$humano = new Humano('Santiago', 'Masculino', 'llenito de amor', 100, 1, 80, 65, 88, 54, 91, 0);
$valentina = new Orco('Valentina', 'Femenino', 'llenito de amor', 100, 1, 80, 65, 88, 54, 91, 0);


echo $humano->getName()."<br>";
echo "Intelecto: ".$humano->getIntl()."<br>";
echo "Agilidad: ".$humano->getAgi()."<br>";

echo "<br>";

echo $valentina->getName()."<br>";
echo "Intelecto: ".$valentina->getIntl()."<br>";
echo "Agilidad: ".$valentina->getAgi()."<br>";























// $p1 = new Character("Pablo", "Humano", "Villano", 150, 23, 28, 0, 43);
// $p2 = new Warrior("Jose", "Humano", 100, 50, 0, 25);
// $p3 = new Mage("Sagsso", "Elfo", 100, 50, 10, 50, 15);
// $p4 = new Rogue("Pacho", "Hombre lobo", 100, 20, 3, 50);

// $p2->attack($p3);
// $p2->attack($p4);

// $p4->attack($p3);
// $p4->attack($p2);

// $p2->attack($p4);
// $p2->attack($p4);

// $p3->attack($p2);
// $p3->attack($p4);


//Create a warrior

//Create a Mage

//Create a Rogue

// The Warrior fight the mage

// The Mage fight the Rogue

// The Rogue fight the Warrior