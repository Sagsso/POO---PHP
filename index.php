<?php

spl_autoload_register(function($class){
   if(file_exists("entidades/".$class.".php")){
       include "entidades/".$class.".php";
   }
   if(file_exists("interfaces/".$class.".php")){
       include "interfaces/".$class.".php";
   }
});

$p1 = new Character("Pablo", "Humano", "Villano", 150, 23, 28, 0, 43);
$p2 = new Warrior("Jose", "Humano", 200, 23, 28);
$p3 = new Mage("Sagsso", "Humano", 100, 23, 28, 5, 40);
$p4 = new Rogue("Pacho", "Humano", 100, 20, 20, 20);

$p2->attack($p3);
$p2->attack($p4);

$p4->attack($p3);
$p4->attack($p2);
$p4->attack($p1);

$p2->attack($p4);
$p2->attack($p4);


//Create a warrior

//Create a Mage

//Create a Rogue

// The Warrior fight the mage

// The Mage fight the Rogue

// The Rogue fight the Warrior