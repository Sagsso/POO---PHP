<?php

spl_autoload_register(function($class){
   if(file_exists("entidades/".$class.".php")){
       include "entidades/".$class.".php";
   }
   if(file_exists("interfaces/".$class.".php")){
       include "interfaces/".$class.".php";
   }
});

$p1 = new Character("Pablo", "Humano", "Villano", 45, 23, 28, 0, 43);
$p2 = new Warrior("Jose", "Humano", 9, 23, 28);

$p1->attack($p2);

//Create a warrior

//Create a Mage

//Create a Rogue

// The Warrior fight the mage

// The Mage fight the Rogue

// The Rogue fight the Warrior