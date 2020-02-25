<?php

abstract class Humanoide implements AccionesHumanoides{

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

    function __construct(string $name, string $sex, string $bodyType, float $hp, int $level,
    float $str, float $intl, float $agi, float $pDef, float $mDef, float $xp) {
    }

    function getName(): string {
        return $this->name;
    }

    function getSex(): string {
        return $this->sex;
    }

    function getBodyType(): string {
        return $this->bodyType;
    }

    function getHp(): float {
        return $this->hp;
    }

    function getLevel(): int {
        return $this->level;
    }

    function getStr(): float {
        return $this->str;
    }

    function getIntl(): float {
        return $this->intl;
    }

    function getAgi(): float {
        return $this->agi;
    }

    function getPDef(): float {
        return $this->pDef;
    }

    function getMDef(): float {
        return $this->mDef;
    }

    function getXP(): float {
        return $this->xp;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function setBodyType($bodyType)
    {
        $this->bodyType = $bodyType;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }


    public function setStr($str)
    {
        $this->str = $str;
    }

    public function setIntl($intl)
    {
        $this->intl = $intl;
    }

    public function setAgi($agi)
    {
        $this->agi = $agi;
    }

    public function setPDef($pDef)
    {
        $this->pDef = $pDef;
    }

    public function setMDef($mDef)
    {
        $this->mDef = $mDef;
    }

    public function setXp($xp)
    {
        $this->xp = $xp;
    }
}