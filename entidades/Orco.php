<?php

class Orco extends Humanoide {

    public function __construct(string $name, string $sex, string $bodyType, float $hp, int $level,
    float $str, float $intl, float $agi, float $pDef, float $mDef, float $xp) {
        parent::__construct($name, $sex, $bodyType, $hp*1.05, $level, $str*1.08, $intl*0.95, $agi, $pDef, $mDef,$xp);
    }
}