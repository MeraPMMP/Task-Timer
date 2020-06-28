<?php

namespace Mera;

use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\Task;
use pocketmine\Server;

class MTask extends Task {
    
    public function onRun(int $currentTick){
        foreach(Server::getInstance()->getOnlinePlayers() as $p){
            $p->sendMessage("Test-On");
        }
    }
}
