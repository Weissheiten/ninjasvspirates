<?php

namespace Weissheiten\NinjasVsPirates\Combatants;

use Weissheiten\NinjasVsPirates\Fightmoves\DummyFightMove;
use Weissheiten\NinjasVsPirates\Interfaces\CombatantInterface;
use Weissheiten\NinjasVsPirates\Abstracts\AbstractCombatant;

class DummyCombatant extends AbstractCombatant implements CombatantInterface {

    public function __construct(string $name)
    {
        $allegiance = "Dummy Allegiance";
        $fightMoves = [
            new DummyFightMove(),
            new DummyFightMove(),
            new DummyFightMove()
        ];
        parent::__construct($name, $allegiance, $fightMoves);
    }
}