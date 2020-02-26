<?php

class Enano extends Humanoide {

    public function __construct(string $name, string $sex, string $bodyType, float $hp, int $level,
    float $str, float $intl, float $agi, float $pDef, float $mDef, float $xp) {
        parent::__construct($name, $sex, $bodyType, $hp*1.04, $level, $str, $intl*1.02,  $agi, $pDef, $mDef,$xp);
    }
}