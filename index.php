<?php

spl_autoload_register(function($class){
   if(file_exists("entidades/".$class.".php")){
       include "entidades/".$class.".php";
   }
});

//Create a warrior

//Create a Mage

//Create a Rogue

// The Warrior fight the mage

// The Mage fight the Rogue

// The Rogue fight the Warrior