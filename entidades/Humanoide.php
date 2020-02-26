<?php

// include_once './AccionesHumanoides.php';

abstract class Humanoide {

    private $name;
    private $sex;
    private $bodyType;
    private $hp;
    private $level;
    private $str;
    private $intl;
    private $agi;
    private $pDef;
    private $mDef;
    private $xp;

    private $class;
    private $skills;

    function __construct(string $name, string $sex, string $bodyType, float $hp, int $level,
    float $str, float $intl, float $agi, float $pDef, float $mDef, float $xp) {
        $this->name = $name;
        $this->sex = $sex;
        $this->bodyType = $bodyType;
        $this->hp = $hp;
        $this->level = $level;
        $this->str = $str;
        $this->intl = $intl;
        $this->agi = $agi;
        $this->pDef = $pDef;
        $this->mDef = $mDef;
        $this->xp = $xp;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getSex(): string {
        return $this->sex;
    }

    public function getBodyType(): string {
        return $this->bodyType;
    }

    public function getHp(): float {
        return $this->hp;
    }

    public function getLevel(): int {
        return $this->level;
    }

    public function getStr(): float {
        return $this->str;
    }

    public function getIntl(): float {
        return $this->intl;
    }

    public function getAgi(): float {
        return $this->agi;
    }

    public function getPDef(): float {
        return $this->pDef;
    }

    public function getMDef(): float {
        return $this->mDef;
    }

    public function getXP(): float {
        return $this->xp;
    }
    
    public function setName($name){
        $this->name = $name;
    }

    public function setSex($sex){
        $this->sex = $sex;
    }

    public function setBodyType($bodyType){
        $this->bodyType = $bodyType;
    }

    public function setHp($hp){
        $this->hp = $hp;
    }

    public function setLevel($level){
        $this->level = $level;
    }

    public function setStr($str){
        $this->str = $str;
    }

    public function setIntl($intl){
        $this->intl = $intl;
    }

    public function setAgi($agi){
        $this->agi = $agi;
    }

    public function setPDef($pDef){
        $this->pDef = $pDef;
    }

    public function setMDef($mDef){
        $this->mDef = $mDef;
    }

    public function setXp($xp){
        $this->xp = $xp;
    }

    public function learnSkill(string $skill, Humanoide $personaje){

    }

    public function forgetSkill(string $skill, Humanoide $personaje){

    }
    public function attack(string $skill, Humanoide $personaje){
        echo $this->name." ataca a ".$personaje->getName()."<br>";
        AccionesHumanoides::attack($skill, $personaje);
    }


}