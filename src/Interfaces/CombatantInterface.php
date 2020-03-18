<?php

namespace Weissheiten\NinjasVsPirates\Interfaces;

/**
 * Interface CombatantInterface
 * @package Weissheiten\NinjasVsPirates\Interfaces
 */
interface CombatantInterface {

    /**
     * @return string Gets the name of the combatant
     */
    public function getName() : string;

    /**
     * @return string Gets the allegiance of the Combatant (e.g.: Ninja, Pirate, Viking, etc.)
     */
    public function getAllegiance() : string;

    /**
     * @return string Gets the current life total of the combatant
     */
    public function getCurrentLifePoints() : string;

    /**
     * @return array Gets an array of available fight moves
     */
    public function getFightMoves() : array;

    /**
     * @param int $damage Number of damage point the combatant takes
     * @return bool indicates if the damage received was lethal
     */
    public function receiveDamage(int $damage) : bool;

}