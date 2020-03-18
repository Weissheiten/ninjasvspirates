<?php

namespace Weissheiten\NinjasVsPirates\Abstracts;

use Weissheiten\NinjasVsPirates\Interfaces\CombatantInterface;

/**
 * Class AbstractCombatant
 * @package Weissheiten\NinjasVsPirates\Abstract
 *
 * Provides the base class for a combatant which can be extended by custom functions
 */
class AbstractCombatant implements CombatantInterface
{
    protected string $name;
    protected string $allegiance;
    protected int $lifePoints;
    protected array $fightMoves;

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function getAllegiance(): string
    {
        return $this->allegiance;
    }

    /**
     * @inheritDoc
     */
    public function getCurrentLifePoints(): string
    {
        return $this->lifePoints;
    }

    /**
     * @inheritDoc
     */
    public function getFightMoves(): array
    {
        return $this->fightMoves;
    }

    /**
     * @inheritDoc
     */
    public function receiveDamage(int $damage): bool
    {
        $this->lifePoints -= $damage;
        return ($this->lifePoints <= 0) ? true : false;
    }

    /**
     * AbstractCombatant constructor.
     * @param string $name Name of the combatant (e.g.: Blackbeard)
     * @param string $allegiance Allegiance of the combatant (e.g.: Pirate)
     * @param array $fightMoves Set of fightmoves for the pirate
     */
    public function __construct(string $name, string $allegiance, array $fightMoves){
        $this->name = $name;
        $this->allegiance = $allegiance;
        $this->fightMoves = $fightMoves;
        // fixed for all combatants
        $this->lifePoints = 9;
    }
}