<?php

 class AccionesHumanoides {

    public static function learnSkill(string $skill, Humanoide $personaje){
        echo "Se atacó a".$personaje;
    }
    public function forgetSkill(string $skill, Humanoide $personaje) {

    }
    public function die(Humanoide $personaje) {

    }
    public function revive(Humanoide $personaje) {

    }
    public function levelUp($numOfLevels, Humanoide $personaje) {

    }
    public function levelDown($numOfLevels, Humanoide $personaje) {

    }
    public function takeDamage($damage, Humanoide $personaje) {

    }
    public static function attack(string $skill, Humanoide $personaje) {
        echo $personaje->getName()." perdió hp";
    }

}