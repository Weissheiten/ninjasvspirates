<?php

namespace Weissheiten\NinjasVsPirates\Tools;

use Weissheiten\NinjasVsPirates\Interfaces\CombatantInterface;

/**
 * Class FightTools
 * @package Weissheiten\NinjasVsPirates\Tools
 *
 * Static helper functions for combats
 */
class FightTools
{
    /**
     * @param CombatantInterface $combatant A combatant to be used in a fight
     * @return bool The combatant is allowed to fight
     */
    public static function evaluateCombatant(CombatantInterface $combatant) : bool
    {
        // Combatant must have exactly 3 fight moves
        if(count($combatant->getFightMoves())!=3){
            return false;
        }

        $totalDamageValue = 0;

        // adding up all damage values from all 3 moves must not exceed 9
        foreach($combatant->getFightMoves() as $fightMove){
            /* @var $fightMove \Weissheiten\NinjasVsPirates\Interfaces\FightMoveInterface */
            $totalDamageValue += $fightMove->getDamageValue();
        }

        // total damage value is too high
        if($totalDamageValue > 9){
            return false;
        }

        // combatant is allowed to fight
        return true;
    }

    /**
     * @param CombatantInterface $combatant1 Combatant 1
     * @param CombatantInterface $combatant2 Combatant 2
     * @throws \Exception
     */
    public static function performFight(CombatantInterface $combatant1, CombatantInterface $combatant2){
        $combatants = [$combatant1,$combatant2];

        // announce the combatants
        echo "\n"."### Combat participants ###"."\n";

        foreach($combatants as $combatant){
            /* @var $combatant CombatantInterface */
            echo "{$combatant->getName()} will fight for {$combatant->getAllegiance()}"."\n";
        }

        echo "\n"."### Referee is checking combatants ###"."\n";

        // check the rules for each combatant
        foreach($combatants as $combatant){
            echo "Evaluating {$combatant->getName()}: ";
            if(FightTools::evaluateCombatant($combatant)){
                echo "{$combatant->getName()} was allowed to fight by the referee"."\n";
            }
            else{
                echo "{$combatant->getName()} was disallowed to fight by the referee"."\n";
            }
        }

        // choose a random combatant to strike first
        echo "\n"."### Checking initiative ###"."\n";
        $initiative = random_int(0,1);

        echo "{$combatants[$initiative]->getName()} will strike first."."\n";

        // choose a random combatant to strike first
        echo "\n"."### Begin combat ###"."\n";
        $fight = true;

        while($fight) {
            /* @var $attacker CombatantInterface */
            $attacker = $combatants[$initiative];

            /* @var $defender CombatantInterface */
            $defender = $combatants[!$initiative];

            /* @var $randomFightMove \Weissheiten\NinjasVsPirates\Interfaces\FightMoveInterface */
            $randomFightMove = $attacker->getFightMoves()[random_int(0, 2)];


            echo "{$attacker->getName()} {$randomFightMove->getDescription()} ({$randomFightMove->getDamageValue()} points of damage.)" . "\n";

            if ($defender->receiveDamage($randomFightMove->getDamageValue())) {
                // the fight is over
                echo "\n" . "### Combat conclusion ###" . "\n";
                echo "{$attacker->getName()} wins the fight for {$attacker->getAllegiance()}!" . "\n";
                $fight = false;
            } else {
                // output the life total of the defender
                echo "{$defender->getName()} new life total: {$defender->getCurrentLifePoints()}." . "\n";
                $initiative = !$initiative;
            }
        }
    }
}

