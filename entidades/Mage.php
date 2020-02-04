<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MAge
 *
 * @author pabhoz
 */
class Mage extends Character implements ICharacter{
    //put your code here
    public function __construct(string $nombre, string $raza, 
            float $hp, float $mn, float $str, float $md, float $ag) {
        parent::__construct($nombre, $raza, "mage", $hp, $mn*5, $str, $md*2.5, $ag);
    }

    public function magicAttack(\ICharacter $character,$damage = false) {
        if($character->getClase() == "warrior") {
        $damage = $this->getMd() * 4.5;
		} else {
        $damage = $this->getMd() * 1.5;
		}
        parent::attack($character,$damage);
    }
        public function dramaticDeath() {
        echo "Oh! yo ".$this->getNombre()." he sido derrotado en batalla<br>";
    }
}
