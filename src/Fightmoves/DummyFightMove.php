<?php

namespace Weissheiten\NinjasVsPirates\Fightmoves;

use Weissheiten\NinjasVsPirates\Abstracts\AbstractFightMove;
use Weissheiten\NinjasVsPirates\Interfaces\FightMoveInterface;

class DummyFightMove extends AbstractFightMove implements FightMoveInterface
{
    public function __construct()
    {
        $this->damageValue = 1;
        $this->description = " performs a dummy fight move";
    }
}