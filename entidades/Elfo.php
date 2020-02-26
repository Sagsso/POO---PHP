<?php

class Elfo extends Humanoide {

    public function __construct(string $name, string $sex, string $bodyType, float $hp, int $level,
    float $str, float $intl, float $agi, float $pDef, float $mDef, float $xp) {
        parent::__construct($name, $sex, $bodyType, $hp, $level, $str, $intl*1.1,  $agi*1.05, $pDef*0.95, $mDef,$xp);
    }
}