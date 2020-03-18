<?php

namespace Weissheiten\NinjasVsPirates\Examples;

require '../../vendor/autoload.php';

use Weissheiten\NinjasVsPirates\Combatants\DummyCombatant;
use Weissheiten\NinjasVsPirates\Interfaces\CombatantInterface;
use Weissheiten\NinjasVsPirates\Tools\FightTools;

// choose the combatants
try {
    FightTools::performFight(new DummyCombatant("Dummy Combatant 1"), new DummyCombatant("Dummy Combatant 2"));
}
catch(\Exception $e){
    echo $e->getMessage();
}


