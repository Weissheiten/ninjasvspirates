<?php

namespace Weissheiten\NinjasVsPirates\Abstracts;

use Weissheiten\NinjasVsPirates\Interfaces\FightMoveInterface;

/**
 * Class AbstractFightMove
 * @package Weissheiten\NinjasVsPirates\Abstracts
 *
 * Provides a base class for a fight move which can be extended by custom classes
 */
class AbstractFightMove implements FightMoveInterface
{
    protected string $description = "Abstract Fight Move, Description missing";
    protected int $damageValue = 0;

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @inheritDoc
     */
    public function getDamageValue(): int
    {
        return $this->damageValue;
    }
}