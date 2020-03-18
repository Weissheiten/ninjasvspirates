<?php

namespace Weissheiten\NinjasVsPirates\Interfaces;

/**
 * Interface FightMoveInterface
 * @package Weissheiten\NinjasVsPirates\Interfaces
 */
interface FightMoveInterface {
    /**
     * @return string Description of the fightmove, used in the combat log
     */
    public function getDescription() : string;

    /**
     * @return int Damage value of the Fightmove
     */
    public function getDamageValue() : int;
}