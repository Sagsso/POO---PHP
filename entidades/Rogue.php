<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rogue
 *
 * @author pabhoz
 */
class Rogue extends Character implements ICharacter {
    //put your code here
    public function __construct(string $nombre, string $raza, 
            float $hp, float $str, float $md, float $ag) {
        parent::__construct($nombre, $raza, "rogue", $hp*1.2, 0, $str, $md, $ag*2);
    }

    public function attack(\ICharacter $character,$damage = false) {
        switch ($character->getClase()) {
            case 'mage':
                $damage = $this->getAg() * 3.5;
                break;
            case 'warrior':
                $damage = $this->getAg() * 0.5;
                break;
            
            default:
                $damage = $this->getAg() * 1.5;
                break;
        }
        parent::attack($character,$damage);
    }
    public function dramaticDeath() {
        echo "".$this->getNombre()." muere en silencio...<br>";
    }
}
