<?php

interface AccionesHumanoides {

    public function learnSkill(string $skill, Humanoide $personaje);
    public function forgetSkill(string $skill, Humanoide $personaje);
    public function die(Humanoide $personaje);
    public function revive(Humanoide $personaje);
    public function levelUp($numOfLevels, Humanoide $personaje);
    public function levelDown($numOfLevels, Humanoide $personaje);
    public function takeDamage($damage, Humanoide $personaje);
    public function attack(string $skill, Humanoide $personaje);

}