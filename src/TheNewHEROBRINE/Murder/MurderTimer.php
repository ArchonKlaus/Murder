<?php
declare(strict_types=1);

namespace TheNewHEROBRINE\Murder;

use pocketmine\scheduler\Task;

class MurderTimer extends Task {
    /**
     * @param int $tick
     */
    public function onRun(int $tick) {
        if ($this->owner instanceof MurderMain){
            foreach ($this->owner->getArenas() as $arena) {
                $arena->tick();
            }
        }
    }
}
